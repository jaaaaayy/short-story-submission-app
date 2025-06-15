@php
  $status = [
      'success' => 'bg-green-400',
      'error' => 'bg-red-400',
  ];
@endphp

<div class="flex items-center {{ $status[$type] }} text-white font-medium px-4 py-3 rounded-xs mx-4 lg:mx-6">
  <p>{{ $message }}</p>
</div>
