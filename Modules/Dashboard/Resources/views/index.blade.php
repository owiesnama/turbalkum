{{--@extends('dashboard::layouts.master')--}}

{{--@section('content')--}}
    {{--<h1>Hello World</h1>--}}

    {{--<p>--}}
        {{--This view is loaded from module: {!! config('dashboard.name') !!}--}}
    {{--</p>--}}
{{--@stop--}}


@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
