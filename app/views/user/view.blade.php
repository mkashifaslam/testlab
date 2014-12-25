@extends('master')

@section('content')
        
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">User Profile View</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form">
        <div class="box-body">
                <div class="form-group">
                    <label for="email">Email address: </label> {{ $user['email'] }}
                </div>
            <div class="form-group">
                <label for="datetime">Created Datetime: </label> {{ $user['created_at'] }}
            </div>
            <div class="form-group">
                <label for="datetime">Updated Datetime: </label> {{ $user['updated_at'] }}
            </div>
        </div><!-- /.box-body -->

        <div class="box-footer">
            <button class="btn btn-primary">Back to Users List</button>
        </div>
    </form>
</div>

@endsection