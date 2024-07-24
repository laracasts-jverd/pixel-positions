@props(['employer', 'width' => 90])

@php
  $src = $employer->logo ? asset($employer->logo) : "http://picsum.photos/seed/" . rand(0, 999) . "/" . $width;
@endphp

<img src="{{ $src }}" alt="logo" class="rounded-xl" width="{{ $width }}">
