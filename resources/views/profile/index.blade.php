@extends('layout')

@section('title', $user->username . ' | ' . config('app.name'))

@section('content')

  <div class="flex grow">
    <x-sidebar />
    <div class="p-4 lg:p-6 w-full space-y-4">
      <h1 class="text-xl font-semibold">Profile Information</h1>
      <form action="{{ route('profile.update', $user->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PATCH')

        <div class="grid gap-2">
          <label for="username" class="font-medium">Username</label>
          <input type="text" id="username" name="username" value="{{ old('username', $user->username) }}"
            class="h-10 border border-gray-200 p-2 px-3 rounded-xs focus:outline-none focus:border-orange-500 focus:ring-orange-500/50 focus:ring-[3px]"
            placeholder="Enter your username" autocomplete="off">
          @error('username')
            <p class="text-red-500">{{ $message }}</p>
          @enderror
        </div>
        <div class="grid gap-2">
          <label for="email" class="font-medium">Email</label>
          <input type="text" id="email" name="email" value="{{ old('email', $user->email) }}"
            class="h-10 border border-gray-200 p-2 px-3 rounded-xs focus:outline-none focus:border-orange-500 focus:ring-orange-500/50 focus:ring-[3px]"
            placeholder="Enter your email" autocomplete="off">
          @error('email')
            <p class="text-red-500">{{ $message }}</p>
          @enderror
        </div>
        <button
          class="h-10 bg-orange-500 hover:bg-orange-600 transition-colors p-2 px-3 rounded-xs text-white font-medium shadow-sm">Update</button>
      </form>
      <form action="{{ route('profile.update', $user->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PATCH')

        <h1 class="text-xl font-semibold">Change Password</h1>
        <div class="grid gap-2">
          <label for="password" class="font-medium">Password</label>
          <input type="password" id="password" name="password"
            class="h-10 border border-gray-200 p-2 px-3 rounded-xs focus:outline-none focus:border-orange-500 focus:ring-orange-500/50 focus:ring-[3px]"
            placeholder="Enter your password" autocomplete="off">
          @error('password')
            <p class="text-red-500">{{ $message }}</p>
          @enderror
        </div>
        <div class="grid gap-2">
          <label for="password_confirmation" class="font-medium">Confirm Password</label>
          <input type="password" name="password_confirmation" id="password_confirmation"
            class="h-10 border border-gray-200 p-2 px-3 rounded-xs focus:outline-none focus:border-orange-500 focus:ring-orange-500/50 focus:ring-[3px]"
            placeholder="Confirm your password">
        </div>
        <button
          class="h-10 bg-orange-500 hover:bg-orange-600 transition-colors p-2 px-3 rounded-xs text-white font-medium shadow-sm">Update</button>
      </form>
    </div>
  </div>

@endsection
