@extends('layout')

@section('title', 'Story List | ' . config('app.name'))

@section('content')

  <div class="p-4 lg:p-6 grow space-y-4">
    <h1 class="text-xl font-semibold">Story List</h1>
    <div class="grid grid-cols-4 md:grid-cols-8 gap-2 lg:gap-4">
      @foreach ($stories as $story)
        <a key={{ $story->id }} href="{{ route('stories.show', $story->id) }}"
          class="rounded-xs overflow-hidden aspect-[16/25]">
          <img src="{{ Storage::url($story->cover_image) }}" alt="{{ $story->title }}" class="w-full h-full object-cover" />
        </a>
      @endforeach
    </div>
  </div>

@endsection
