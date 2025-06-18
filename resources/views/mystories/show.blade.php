@extends('layout')

@section('title', $story->title . ' | ' . config('app.name'))

@section('content')

  <div class="flex grow">
    <x-sidebar />
    <div class="p-4 lg:p-6 w-full">
      <div class="flex flex-col gap-6">
        <div class="flex justify-between">
          <div class="flex items-center gap-4">
            <div class="rounded-xs overflow-hidden aspect-[16/25] h-[250px]">
              <img src="{{ Storage::url($story->cover_image) }}" alt="{{ $story->title }}"
                class="w-full h-full object-cover">
            </div>
            <div class="text-start space-y-1">
              <h1 class="text-xl font-semibold">{{ $story->title }}</h1>
              <p>{{ $story->genre->name }}</p>
              <p>By <span class="font-medium">{{ $story->author->username }}</span></p>
            </div>
          </div>
          <div class="flex gap-2">
            <a href="{{ route('mystories.edit', $story->id) }}"
              class="h-10 bg-orange-500 hover:bg-orange-600 transition-colors p-2 px-3 rounded-xs text-white font-medium shadow-sm">Edit</a>
            <form action="{{ route('mystories.destroy', $story->id) }}" method="POST"
              onsubmit="return confirm('Are you sure you want to delete this story?')">
              @csrf
              @method('DELETE')

              <button
                class="h-10 bg-red-500 hover:bg-red-600 transition-colors p-2 px-3 rounded-xs text-white font-medium shadow-sm">Delete</button>
            </form>
          </div>
        </div>
        <p>{!! nl2br(e($story->content)) !!}</p>
      </div>
    </div>
  </div>

@endsection
