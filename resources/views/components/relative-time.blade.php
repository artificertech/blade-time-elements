@include('blade-time-elements::parse-datetime')

<relative-time datetime="{{ $datetime }}" {{ $attributes }}>{{ $slot ?? '' }}</relative-time>
