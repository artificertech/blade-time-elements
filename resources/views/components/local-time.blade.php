@include('blade-time-elements::parse-datetime')

<local-time datetime="{{ $datetime }}" {{ $attributes }}>{{ $slot ?? '' }}</local-time>
