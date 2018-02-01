<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FeedbackUserLoginController extends Controller
{
	public function __construct() {
		$this->middleware('guest:feedbackUser');
	}

	public function showLoginForm(){
		$title = 'Anonymous Feedback Login';

		return view('auth.feedback-user-login',  compact('title'));
	}

	public function login(Request $request){

		$this->validate($request, [
			'username' => 'required|min:4',
			'password' => 'required|min:6'
		]);

		if ( Auth::guard( 'feedbackUser' )->attempt( [
			'username' => $request->username,
			'password' => $request->password
		], $request->remember ) ) {

			return redirect()->intended(route('feedback-user.dashboard'));
		}

		return redirect()->back()->withInput( $request->only( 'username', 'remember' ) )
		                 ->withErrors( [ 'message' => 'Invalid User Id or Password.' ] );
	}
}
