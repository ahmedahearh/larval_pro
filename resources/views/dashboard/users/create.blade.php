@extends('layouts.guest')
@section('content')

<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">اضافة مستخدم </h3>
    </div><!-- /.box-header -->
    <!-- form start -->
{{--    <form class="form-horizontal" method="post" action="/dashboard/users/save">--}}
    <form class="form-horizontal" method="post" action="/dashboard/users/save">
        @csrf
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif


        <div class="box-body">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">الاسم </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="text" placeholder="ادخل الاسم  " name="name" value="{{ old('name') }}">
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>


            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">البريد الالكتروني</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail3" placeholder="ادخل البريد الالكتروني " name="email" value="{{ old('email') }}">
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>


            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">كلمة المرور</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="inputPassword3" placeholder="كلمة المرور" name="password">
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label"> اعادة كلمة المرور</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control @error('conf_password') is-invalid @enderror" id="inputPassword3" placeholder="اعد كتابة كلمة المرور" name="conf_password">
                    @error('conf_password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-info pull-right"> حفظ</button>
        </div>
    </form>
</div><!-- /.box -->


@endsection
