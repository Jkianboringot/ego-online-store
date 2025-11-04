@props(['title'=>'','footerLinks'=>'','bodyClass'=>null])

<x-base-layout :$title :$bodyClass>
   @if (session('success'))
   <div class="flash-message bg-yellow-500 text-white px-4 py-2 rounded mb-3 ">
      {{ session('success') }}
   </div>
   @endif
   <x-layouts.header />
   {{ $slot }}

</x-base-layout>