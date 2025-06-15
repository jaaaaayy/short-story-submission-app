@php
  $status = [
      'success' => 'bg-green-500',
      'error' => 'bg-red-500',
  ];
@endphp

<div class="flex items-center {{ $status[$type] }} text-white font-medium px-4 py-3 rounded-sm">
  <p>{{ $message }}</p>
</div>
