<header
  class="z-10 sticky top-0 bg-white h-14 lg:h-16 p-4 lg:px-6 border-b border-gray-200 flex items-center justify-between">
  <a href={{ auth()->check() ? route('stories.index') : route('landing.index') }}
    class="text-2xl font-bold text-orange-500">Talevy</a>
  <nav>
    <ul class="flex items-center gap-4">
      @auth
        <a href="{{ route('profile.index') }}" @class([
            'font-medium',
            'text-orange-500' => request()->routeIs('profile.index'),
        ])>Profile</a>
      @endauth
      <li>
        <a href={{ route('stories.create') }} @class([
            'font-medium',
            'text-orange-500' => request()->routeIs('stories.create'),
        ])>Write</a>
      </li>
      @guest
        <li>
          <a href={{ route('auth.index') }} @class([
              'font-medium',
              'text-orange-500' => request()->routeIs('auth.index'),
          ])>Login</a>
        </li>
        <li>
          <a href={{ route('auth.create') }} @class([
              'font-medium',
              'text-orange-500' => request()->routeIs('auth.create'),
          ])>Register</a>
        </li>
      @endguest
      @auth
        <a href="{{ route('auth.logout') }}" class="font-medium">Logout</a>
      @endauth
    </ul>
  </nav>
</header>
