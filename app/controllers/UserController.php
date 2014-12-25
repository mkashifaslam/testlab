<?php

class UserController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getIndex()
	{
        $users = User::paginate(100);
        return View::make('user.list')->withUsers($users);
	}
    public function getView($id)
    {
        $user = User::find($id)->toArray();
        return View::make('user.view')->withUser($user);
    }
    public function getUpdate($id)
    {
        $user = User::find($id)->toArray();
        return View::make('user.update')->withUser($user);
    }
    public function getDelete()
    {
        return View::make('user.delete');
    }

}
