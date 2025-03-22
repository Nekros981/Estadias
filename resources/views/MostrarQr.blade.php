@extends('plantilla-header')
@section('header')
    <div>
        <img src="data:image/png;base64, {{ $qrCode }}">
    </div>
@endsection
