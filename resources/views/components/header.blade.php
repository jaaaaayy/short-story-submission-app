<header class="h-14 lg:h-16 p-4 lg:px-6 border-b border-gray-200 flex items-center justify-between">
  <a href={{ route('landing.index') }} class="text-2xl font-bold text-orange-500">Talevy</a>
  <nav>
    <ul class="flex items-center gap-4">
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
    </ul>
  </nav>
</header>
