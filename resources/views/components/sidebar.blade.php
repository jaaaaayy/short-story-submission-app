<ul class="grid gap-2">
  <li>
    <a href="{{ route('profile.index') }}" @class([
        'font-medium',
        'text-orange-500' => request()->routeIs('profile.index'),
    ])>Profile</a>
  </li>
  <li>
    <a href="{{ route('profile.my-story-list') }}" @class([
        'font-medium',
        'text-orange-500' => request()->routeIs('profile.my-story-list'),
    ])>My Stories</a>
  </li>
</ul>
