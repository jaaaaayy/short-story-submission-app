@extends('layout')

@section('title', 'Write Story | ' . config('app.name'))

@section('content')

  <div class="p-4 lg:p-6 grow flex items-center justify-center">
    <form action="" method="POST" class="grid gap-4 border border-gray-200 rounded-xs p-6 w-[1200px]">
      @csrf

      <h1 class="text-xl font-semibold text-center">Write a story.</h1>

      <div class="grid grid-cols-3 gap-4">
        <div>
          <div class="w-64 aspect-[1/1.5] border border-gray-200">
            <img src="/path/to/cover.jpg" alt="Story Cover" class="w-full h-full object-cover" />
          </div>
        </div>
        <div class="col-span-2 space-y-4">
          <div class="grid gap-2">
            <label for="title" class="font-medium">Title</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}"
              class="h-10 border border-gray-200 p-2 px-3 rounded-xs focus:outline-none focus:border-orange-500 focus:ring-orange-500/50 focus:ring-[3px]"
              placeholder="Enter the title" autocomplete="off">
            @error('title')
              <p class="text-red-600">{{ $message }}</p>
            @enderror
          </div>

          <div class="grid gap-2">
            <label for="content" class="font-medium">Content</label>
            <textarea rows="20" id="content" name="content" value="{{ old('content') }}"
              class="border border-gray-200 p-2 px-3 rounded-xs focus:outline-none focus:border-orange-500 focus:ring-orange-500/50 focus:ring-[3px]"
              placeholder="Enter the content" autocomplete="off"></textarea>
            @error('content')
              <p class="text-red-600">{{ $message }}</p>
            @enderror
          </div>

          <div class="grid gap-2">
            <label for="genre" class="font-medium">Genre</label>
            <select name="genre" id="genre"
              class="h-10 border border-gray-200 p-2 px-3 rounded-xs focus:outline-none focus:border-orange-500 focus:ring-orange-500/50 focus:ring-[3px]"
              required>
              @foreach ($genres as $genre)
                <option value="{{ $genre->id }}" {{ old('genre') == $genre->id ? 'selected' : '' }}>
                  {{ $genre->name }}
                </option>
              @endforeach
            </select>
          </div>

          <div class="flex gap-2">
            <button
              class="h-10 bg-gray-500 hover:bg-gray-600 transition-colors p-2 px-3 rounded-xs text-white font-medium shadow-sm">Cancel</button>

            <button
              class="h-10 bg-orange-500 hover:bg-orange-600 transition-colors p-2 px-3 rounded-xs text-white font-medium shadow-sm">Publish</button>
          </div>
        </div>
      </div>
    </form>
  </div>

@endsection
