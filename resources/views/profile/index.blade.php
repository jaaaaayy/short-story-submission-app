@extends('layout')

@section('title', $user->username . ' | ' . config('app.name'))

@section('content')

  <div class="flex grow">
    <x-sidebar />
    <div class="p-4 lg:p-6 w-full space-y-4">
      <h1 class="text-xl font-semibold">Profile Information</h1>
      <div class="grid gap-2">
        <label for="username" class="font-medium">Username</label>
        <p>{{ $user->username }}</p>
      </div>
      <div class="grid gap-2">
        <label for="email" class="font-medium">Email</label>
        <p>{{ $user->email }}</p>
      </div>
    </div>
  </div>

@endsection
