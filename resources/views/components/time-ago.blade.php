@props(['datetime'])
@php
$datetime = $datetime instanceof \Carbon\Carbon ? $datetime->toIso8601ZuluString() : $datetime;
@endphp


<time-ago datetime="{{ $datetime }}" {{ $attributes }}>{{ $slot ?? '' }}</time-ago>
