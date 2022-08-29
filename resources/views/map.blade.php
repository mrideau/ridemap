@extends('layouts.app')

@push('head')
    <!-- Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
          integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
          crossorigin=""/>
@endpush

@push('scripts')
    <script>
        const skateparks = @json($skateparks);
    </script>
    <script src="{{ asset('js/map.js') }}" defer></script>
@endpush

@section('content')
    <div id="map" class='map-popup'></div>
@endsection
