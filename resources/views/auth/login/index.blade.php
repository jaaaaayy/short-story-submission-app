@extends('layout')

@section('title', 'Login | ' . config('app.name'))

@section('content')

  <div class="p-4 lg:p-6 grow flex items-center justify-center">
    <form action="" class="grid gap-4 border border-gray-200 rounded-sm p-6 w-[400px]">
      <h1 class="text-xl font-semibold text-center">Welcome back!</h1>

      <div class="grid gap-2">
        <label for="" class="font-medium">Username</label>
        <input type="text"
          class="h-10 border border-gray-200 p-2 px-3 rounded-sm focus:outline-none focus:border-orange-500 focus:ring-orange-500/50 focus:ring-[3px]"
          placeholder="Username">
      </div>

      <div class="grid gap-2">
        <label for="" class="font-medium">Password</label>
        <input type="password"
          class="h-10 border border-gray-200 p-2 px-3 rounded-sm focus:outline-none focus:border-orange-500 focus:ring-orange-500/50 focus:ring-[3px]"
          placeholder="Password">
      </div>

      <button
        class="bg-orange-500 hover:bg-orange-600 transition-colors p-2 px-3 rounded-sm text-white font-medium shadow-sm">Login</button>

      <p class="text-center">Don&apos;t have an account? <a href="/register"
          class="underline underline-offset-4">Register</a></p>
    </form>
  </div>

@endsection
