{{-- atom component  --}}
<a href="{{ $url }}">
    <button class="{{ $buttonClass() }}" >
        {{ $slot }}
    </button>
</a>