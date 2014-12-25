@extends('master')

@section('content')
        
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">User Profile Update</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form">
        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" placeholder="Enter email" id="email" class="form-control" value="{{ $user['email'] }}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" placeholder="Password" id="password" class="form-control" value="">
            </div>
        </div><!-- /.box-body -->

        <div class="box-footer">
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </form>
</div>

@endsection