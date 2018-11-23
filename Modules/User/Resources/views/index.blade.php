@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>المستخدمين</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">ادارة المستخدمين</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered text-center">
                <thead>
                <tr>
                    <th>الاسم</th>
                    <th>البريد الالكتروني</th>
                    <th>الحاله</th>
                    <th>نوع الحساب</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>test</td>
                    <td>test</td>
                    <td>test</td>
                    <td>test</td>
                </tr>
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
@stop

@section('css')
    {{--<link rel="stylesheet" href="/css/admin_custom.css">--}}
@stop

@section('js')
    {{--<script> console.log('Hi!'); </script>--}}
@stop
