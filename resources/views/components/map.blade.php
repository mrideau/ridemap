@props([
    "name" => "map",
    "script" => "map.js",
])

@push('head')
    <!-- Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
          integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
          crossorigin=""/>
@endpush

@if($script != 'none')
    @push('scripts')
        <script src="{{ asset('js/' . $script) }}" defer></script>
    @endpush
@endif

<div id="{{ $name }}"></div>
