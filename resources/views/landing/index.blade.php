@extends('layout')

@section('title', 'Short Story Submission App | ' . config('app.name'))

@section('content')

  <div class="p-4 md:px-12 lg:p-6 lg:px-18 grow flex items-center justify-center">
    <div class="grid md:grid-cols-2 gap-4 h-full">
      <section class="flex flex-col items-start justify-center">
        <h1 class="text-5xl font-bold mb-4 text-orange-500">Unleash Stories Worth Sharing</h1>
        <p class="text-lg">
          Join a vibrant community of storytellers and readers. Share your short stories, discover inspiring tales from
          others, and fuel your creativity in a space where every word matters.
        </p>
        <div class="flex items-center gap-4 mt-6">
          <a href="{{ route('stories.index') }}"
            class="bg-orange-500 hover:bg-orange-600 transition-colors text-white p-2 px-4 rounded-xs shadow-sm font-medium">Start
            Reading</a>
          <a href="{{ route('stories.create') }}"
            class="bg-orange-500 hover:bg-orange-600 transition-colors text-white p-2 px-4 rounded-xs shadow-sm font-medium">Start
            Writing</a>
        </div>
      </section>
      <section class="md:flex items-center justify-center hidden">
        <img src="{{ Storage::url('landing/Hero.png') }}" alt="Story List">
      </section>
    </div>
  </div>

@endsection
