@extends('layout')

@section('title', 'Write Story | ' . config('app.name'))

@section('content')

  <div class="p-4 lg:p-6 flex justify-center">
    <form action="{{ route('stories.store') }}" method="POST" enctype="multipart/form-data"
      class="grid gap-4 border border-gray-200 rounded-xs p-4 lg:p-6 w-[1200px]">
      @csrf

      <h1 class="text-xl font-semibold text-center">Write a story.</h1>

      <div class="grid lg:grid-cols-3 gap-4">
        <div class="flex flex-col gap-2">
          <label for="cover_image" class="font-medium">Cover Image</label>
          <input type="file" id="cover_image" name="cover_image" accept="image/*" class="hidden"
            onChange="previewCoverImage(event)" />
          <div
            class="w-60 sm:w-64 aspect-[1/1.5] border border-gray-200 cursor-pointer rounded-xs overflow-hidden relative"
            onclick="document.getElementById('cover_image').click()">
            <img id="preview" class="w-full h-full object-cover hidden" />
            <div id="upload-placeholder" class="absolute inset-0 flex items-center justify-center text-neutral-500">
              <span>Upload cover image</span>
            </div>
          </div>
          @error('cover_image')
            <p class="text-red-500">{{ $message }}</p>
          @enderror
        </div>
        <div class="lg:col-span-2 space-y-4">
          <div class="grid gap-2">
            <label for="title" class="font-medium">Title</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}"
              class="h-10 border border-gray-200 p-2 px-3 rounded-xs focus:outline-none focus:border-orange-500 focus:ring-orange-500/50 focus:ring-[3px]"
              placeholder="Enter the title" autocomplete="off">
            @error('title')
              <p class="text-red-500">{{ $message }}</p>
            @enderror
          </div>

          <div class="grid gap-2">
            <label for="content" class="font-medium">Content</label>
            <textarea rows="20" id="content" name="content"
              class="border border-gray-200 p-2 px-3 rounded-xs focus:outline-none focus:border-orange-500 focus:ring-orange-500/50 focus:ring-[3px]"
              placeholder="Enter the content" autocomplete="off">{{ old('content') }}</textarea>
            @error('content')
              <p class="text-red-500">{{ $message }}</p>
            @enderror
          </div>

          <div class="grid gap-2">
            <label for="genre" class="font-medium">Genre</label>
            <select name="genre_id" id="genre"
              class="h-10 border border-gray-200 p-2 px-3 rounded-xs focus:outline-none focus:border-orange-500 focus:ring-orange-500/50 focus:ring-[3px]">
              <option value="" disabled selected>Select a genre</option>
              @foreach ($genres as $genre)
                <option value="{{ $genre->id }}" {{ old('genre_id') == $genre->id ? 'selected' : '' }}>
                  {{ $genre->name }}
                </option>
              @endforeach
            </select>
            @error('genre_id')
              <p class="text-red-500">{{ $message }}</p>
            @enderror
          </div>

          <div class="flex gap-2">
            <a href="{{ route('stories.index') }}"
              class="h-10 bg-gray-500 hover:bg-gray-600 transition-colors p-2 px-3 rounded-xs text-white font-medium shadow-sm">Cancel</a>

            <button
              class="h-10 bg-orange-500 hover:bg-orange-600 transition-colors p-2 px-3 rounded-xs text-white font-medium shadow-sm">Publish</button>
          </div>
        </div>
      </div>
    </form>
  </div>

@endsection
