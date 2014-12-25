@extends('master')

@section('content')

<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">User Profile Update</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    {{ Form::open(array('url' => URL::previous(), 'method' => 'get', 'role' => 'form' )) }}
        <div class="box-body">
            <div class="form-group">
                {{ Form::label('email', 'E-Mail Address: '); }}
                {{ Form::email('email', $user['email'], array('class' => 'form-control')); }}
            </div>
            <div class="form-group">
                {{ Form::label('password', 'Password: '); }}
                {{ Form::password('password', array('class' => 'form-control')); }}
            </div>
        </div><!-- /.box-body -->

        <div class="box-footer">
            {{ Form::submit('Update',array('class' => 'btn btn-primary')); }}
        </div>
    {{ Form::close() }}
</div>

@endsection