<div class="p-4 lg:p-6 w-[300px]">
  <ul class="grid gap-2">
    <li>
      <a href="{{ route('profile.index') }}" @class([
          'font-medium',
          'text-orange-500' => request()->routeIs('profile.index'),
      ])>Profile</a>
    </li>
    <li>
      <a href="{{ route('profile.my-stories.index') }}" @class([
          'font-medium',
          'text-orange-500' => request()->routeIs('profile.my-stories.index'),
      ])>My Stories</a>
    </li>
  </ul>
</div>
