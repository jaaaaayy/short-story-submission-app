@extends('layout')

@section('title', 'Story List | ' . config('app.name'))

@section('content')

  <div class="p-4 lg:p-6 grow space-y-4">
    <h1 class="text-xl font-semibold">Story List</h1>
    <div class="grid grid-cols-8 gap-4">
      @foreach ($stories as $story)
        <div key={{ $story->id }} class="rounded-xs overflow-hidden aspect-[16/25]">
          <img src="{{ Storage::url($story->cover_image) }}" class="w-full h-full object-cover" />
        </div>
      @endforeach
    </div>
  </div>

@endsection
