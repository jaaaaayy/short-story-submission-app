@extends('layout')

@section('title', 'Register | ' . config('app.name'))

@section('content')

  <div class="p-4 lg:p-6 grow flex items-center justify-center">
    <form action="{{ route('auth.register') }}" method="POST"
      class="grid gap-4 border border-gray-200 rounded-sm p-6 w-[400px]">
      @csrf

      @if (session('error'))
        <x-alert type="error" :message="session('error')" />
      @elseif (session('success'))
        <x-alert type="success" :message="session('success')" />
      @endif

      <h1 class="text-xl font-semibold text-center">Create an account.</h1>

      <div class="grid gap-2">
        <label for="username" class="font-medium">Username</label>
        <input type="text" id="username" name="username" value="{{ old('username') }}"
          class="h-10 border border-gray-200 p-2 px-3 rounded-sm focus:outline-none focus:border-orange-500 focus:ring-orange-500/50 focus:ring-[3px]"
          placeholder="Enter your username" autocomplete="off">
        @error('username')
          <p class="text-red-600">{{ $message }}</p>
        @enderror
      </div>

      <div class="grid gap-2">
        <label for="email" class="font-medium">Email</label>
        <input type="text" id="email" name="email" value="{{ old('email') }}"
          class="h-10 border border-gray-200 p-2 px-3 rounded-sm focus:outline-none focus:border-orange-500 focus:ring-orange-500/50 focus:ring-[3px]"
          placeholder="Enter your email" autocomplete="off">
        @error('email')
          <p class="text-red-600">{{ $message }}</p>
        @enderror
      </div>

      <div class="grid gap-2">
        <label for="password" class="font-medium">Password</label>
        <input type="password" id="password" name="password"
          class="h-10 border border-gray-200 p-2 px-3 rounded-sm focus:outline-none focus:border-orange-500 focus:ring-orange-500/50 focus:ring-[3px]"
          placeholder="Enter your password">
        @error('password')
          <p class="text-red-600">{{ $message }}</p>
        @enderror
      </div>

      <div class="grid gap-2">
        <label for="password_confirmation" class="font-medium">Confirm Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation"
          class="h-10 border border-gray-200 p-2 px-3 rounded-sm focus:outline-none focus:border-orange-500 focus:ring-orange-500/50 focus:ring-[3px]"
          placeholder="Confirm your password">
      </div>

      <button
        class="bg-orange-500 hover:bg-orange-600 transition-colors p-2 px-3 rounded-sm text-white font-medium shadow-sm">Register</button>

      <p class="text-center">Already have an account? <a href="{{ route('auth.index') }}"
          class="underline underline-offset-4">Login</a></p>
    </form>
  </div>

@endsection
