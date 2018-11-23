@extends('adminlte::page')

@section('title', 'test')


<!-- Content Header (Page header) -->
@section('content_header')
    <h1>
        لوحة التحكم
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard.index') }}"> لوحة التحكم</a></li>
        <li><a href="{{ route('user.index') }}">المستخدمين</a></li>
        <li class="active">الملف الشخصي</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <!-- /.col -->
        <div class="col-md-9">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#settings" data-toggle="tab">الضبط</a></li>
                </ul>
                <div class="tab-content">

                    <div class="tab-pane active" id="settings">
                        <form class="form-horizontal">
                            <div class="form-group">

                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputName"
                                           placeholder="@lang('user::user.name')">
                                </div>
                                <label for="inputName" class="col-sm-2 control-label">@lang('user::user.name')</label>
                            </div>
                            <div class="form-group">

                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail"
                                           placeholder="@lang('user::user.email')">
                                </div>
                                <label for="inputEmail" class="col-sm-2 control-label">@lang('user::user.email')</label>
                            </div>
                            <div class="form-group">

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputName"
                                           placeholder="@lang('user::user.phone')">
                                </div>
                                <label for="inputName" class="col-sm-2 control-label">@lang('user::user.phone')</label>
                            </div>
                            <div class="form-group">

                                <div class="col-sm-10">
                                    <textarea class="form-control" id="inputExperience"
                                              placeholder="@lang('user::user.address')"></textarea>
                                </div>
                                <label for="inputExperience"
                                       class="col-sm-2 control-label">@lang('user::user.address')</label>
                            </div>
                            <div class="form-group">

                                <div class="col-sm-10">
                                    <div class="radio">
                                        <input id="serviceProvider" type="radio" name="account_type" value="1"
                                               checked="">
                                        <label for="serviceProvider">
                                            @lang('user::user.service_provider')
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <input id="client" type="radio" name="account_type" value="2">
                                        <label for="client">
                                            @lang('user::user.client')
                                        </label>
                                    </div>
                                </div>
                                <label for="inputSkills"
                                       class="col-sm-2 control-label">@lang('user::user.account_type')</label>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-success">حفظ</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->

        <div class="col-md-3">

            <!-- Profile Image -->
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle"
                         src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png"
                         alt="User profile picture">
                    <h3 class="profile-username text-center">محمد علي احمد</h3>

                    <p class="text-muted text-center">@lang('user::user.service_provider')</p>

                    <ul class="list-group list-group-unbordered" style="padding: 10px;">
                        <li class="list-group-item">
                            <b>الطلبات</b> <a class="pull-left">16</a>
                        </li>
                        <li class="list-group-item">
                            <b>الخدمات</b> <a class="pull-left">3</a>
                        </li>
                        <li class="list-group-item">
                            <b>العروض</b> <a class="pull-left">13</a>
                        </li>
                    </ul>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- About Me Box -->
            {{--<div class="box box-primary">--}}
                {{--<div class="box-header with-border">--}}
                    {{--<h3 class="box-title">عني</h3>--}}
                {{--</div>--}}
                {{--<!-- /.box-header -->--}}
                {{--<div class="box-body">--}}
                    {{--<strong><i class="fa fa-book margin-r-5"></i> Education</strong>--}}

                    {{--<p class="text-muted">--}}
                        {{--B.S. in Computer Science from the University of Tennessee at Knoxville--}}
                    {{--</p>--}}

                    {{--<hr>--}}

                    {{--<strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>--}}

                    {{--<p class="text-muted">Malibu, California</p>--}}

                    {{--<hr>--}}

                    {{--<strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>--}}

                    {{--<p>--}}
                        {{--<span class="label label-danger">UI Design</span>--}}
                        {{--<span class="label label-success">Coding</span>--}}
                        {{--<span class="label label-info">Javascript</span>--}}
                        {{--<span class="label label-warning">PHP</span>--}}
                        {{--<span class="label label-primary">Node.js</span>--}}
                    {{--</p>--}}

                    {{--<hr>--}}

                    {{--<strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>--}}

                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>--}}
                {{--</div>--}}
                {{--<!-- /.box-body -->--}}
            {{--</div>--}}
            <!-- /.box -->
        </div>
    </div>
@stop