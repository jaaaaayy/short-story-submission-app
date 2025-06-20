@php
  $status = [
      'success' => 'bg-green-500',
      'error' => 'bg-red-500',
  ];
@endphp

<div id="alert"
  class="flex items-center justify-between {{ $status[$type] }} text-white font-medium px-4 py-3 rounded-xs mx-4 lg:mx-6">
  <p>{{ $message }}</p>
  <button onclick="document.getElementById('alert').style.display='none'">
    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-x"
      viewBox="0 0 16 16">
      <path
        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
    </svg>
  </button>
</div>
