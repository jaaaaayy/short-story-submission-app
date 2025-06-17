@extends('layout')

@section('title', $story->title . ' | ' . config('app.name'))

@section('content')

  <div class="p-4 lg:p-6 grow flex justify-center">
    <div class="w-[800px] flex flex-col gap-6 items-center">
      <div class="text-center space-y-1">
        <h1 class="text-xl font-semibold">{{ $story->title }}</h1>
        <p>{{ $story->genre->name }}</p>
        <p>By <span class="font-medium">{{ $story->author->username }}</span></p>
      </div>
      <p>{!! nl2br(e($story->content)) !!}</p>
    </div>
  </div>

@endsection
