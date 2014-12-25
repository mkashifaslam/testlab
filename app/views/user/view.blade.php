@extends('master')

@section('content')
        
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">User Profile View</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    {{ Form::open(array('url' => URL::previous(), 'method' => 'get' )) }}
        <div class="box-body">
            <div class="form-group">
                {{ Form::label('email', 'E-Mail Address: '); }}
                {{ Form::email('email', $user['email'], array('class' => 'form-control','disabled')); }}
            </div>
            <div class="form-group">
                {{ Form::label('datetime', 'Created Datetime: '); }}
                {{ Form::text('created_at', $user['created_at'], array('class' => 'form-control','disabled')); }}
            </div>
            <div class="form-group">
                {{ Form::label('datetime', 'Updated Datetime: '); }}
                {{ Form::text('updated_at', $user['updated_at'], array('class' => 'form-control','disabled')); }}
            </div>
        </div><!-- /.box-body -->
        <div class="box-footer">
            {{ Form::submit('Back to Users List',array('class' => 'btn btn-primary')); }}
        </div>
    {{ Form::close() }}
</div>

@endsection