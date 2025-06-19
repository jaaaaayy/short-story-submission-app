@extends('layout')

@section('title', 'Edit ' . $story->title . ' | ' . config('app.name'))

@section('content')

  <div class="flex grow">
    <x-sidebar />
    <div class="p-4 lg:p-6 w-full">
      <form action="{{ route('mystories.update', $story->id) }}" method="POST" enctype="multipart/form-data"
        class=" space-y-4">
        @csrf
        @method('PUT')

        <h1 class="text-xl font-semibold">Edit Story</h1>
        <div class="flex flex-col gap-2">
          <label for="cover_image" class="font-medium">Cover Image</label>
          <input type="file" id="cover_image" name="cover_image" accept="image/*" class="hidden"
            onChange="previewCoverImage(event)" />
          <div
            class="w-60 sm:w-64 aspect-[1/1.5] border border-gray-200 cursor-pointer rounded-xs overflow-hidden relative"
            onclick="document.getElementById('cover_image').click()">
            <img src="{{ Storage::url($story->cover_image) }}" alt="{{ $story->title }}" id="preview"
              class="w-full h-full object-cover" />
          </div>
          @error('cover_image')
            <p class="text-red-500">{{ $message }}</p>
          @enderror
        </div>
        <div class="grid gap-2">
          <label for="title" class="font-medium">Title</label>
          <input type="text" id="title" name="title" value="{{ old('title', $story->title) }}"
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
            placeholder="Enter the content" autocomplete="off">{{ old('content', $story->content) }}</textarea>
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
              <option value="{{ $genre->id }}" {{ old('genre_id', $story->genre_id) == $genre->id ? 'selected' : '' }}>
                {{ $genre->name }}
              </option>
            @endforeach
          </select>
          @error('genre_id')
            <p class="text-red-500">{{ $message }}</p>
          @enderror
        </div>
        <div class="flex gap-2">
          <a href="{{ route('mystories.show', $story->id) }}"
            class="h-10 bg-gray-500 hover:bg-gray-600 transition-colors p-2 px-3 rounded-xs text-white font-medium shadow-sm">Cancel</a>

          <button
            class="h-10 bg-orange-500 hover:bg-orange-600
            transition-colors p-2 px-3 rounded-xs text-white font-medium shadow-sm">Update</button>
        </div>
      </form>
    </div>
  </div>

@endsection
