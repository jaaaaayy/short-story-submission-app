@extends('layout')

@section('title', 'Short Story Submission App | ' . config('app.name'))

@section('content')

  <div class="p-4 md:px-12 lg:p-6 lg:px-18 grow">
    <div class="grid md:grid-cols-2 gap-4 h-full">
      <section class="flex flex-col items-start justify-center">
        <h1 class="text-5xl font-bold mb-4 text-orange-500">Unleash Stories Worth Sharing</h1>
        <p class="text-lg">
          Join a vibrant community of storytellers and readers. Share your short stories, discover inspiring tales from
          others, and fuel your creativity in a space where every word matters.
        </p>
        <div class="flex items-center gap-4 mt-6">
          <button
            class="bg-orange-500 hover:bg-orange-600 transition-colors text-white p-2 px-4 rounded-sm shadow-sm font-medium">Start
            Reading</button>
          <button
            class="bg-orange-500 hover:bg-orange-600 transition-colors text-white p-2 px-4 rounded-sm shadow-sm font-medium">Start
            Writing</button>
        </div>
      </section>
      <section class="flex items-center justify-center">Short story list image from the app is shown here</section>
    </div>
  </div>

@endsection
