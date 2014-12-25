@extends('master')

@section('content')
        
	<div class="welcome">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">System Users List</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive"> 
                    <table id="users-list" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Email</th>
                                <th>Created Datetime</th>
                                <th>Updated Datetime</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user['id'] }}</td>
                                    <td>{{ $user['email'] }}</td>
                                    <td>{{ $user['created_at'] }}</td>
                                    <td>{{ $user['updated_at'] }}</td>
                                    <td><a href="{{ action('UserController@getView',$user['id']) }}" class="view btn btn-primary btn-sm"><i class="fa fa-fw fa-eye"></i>View</a>&nbsp;&nbsp;
                                        <a href="{{ action('UserController@getUpdate',$user['id']) }}" class="update btn btn-success btn-sm"><i class="fa fa-fw fa-pencil-square"></i>Update</a>&nbsp;&nbsp;
                                        <a href="{{ action('UserController@getDelete',$user['id']) }}" class="btn btn-danger delete btn-sm"><i class="fa fa-fw fa-minus-square"></i>Delete</a></td>
                                </tr>
                            @endforeach
                        </tbody>
<!--                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Email</th>
                                <th>Created Datetime</th>
                                <th>Updated Datetime</th>
                            </tr>
                        </tfoot>-->
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
	</div>
        
@endsection

