<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

	public function __construct() {
		$this->middleware('guest', [ 'except' => 'doLogout' ]);
	}

	/**
     * Display a login page.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLogin()
    {
	    $title      = "Login";
//	    $department = "CHEM";
//	    $logoText   = "Chemical Lab";
//	    $name   = "John Doe";
//	    $date = date( 'd/m/Y' );

	    return view( 'layouts.login', compact( 'title') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		//
    }

    /**
     * Process login and create session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function doLogin(Request $request)
    {
	    // check and sign in
	    //sign in

//	    dd($request->all());

	    $this->validate($request, [
	    	'email' => 'required',
	    	'password' => 'required'
	    ]);

	    if(! auth()->attempt(request(['email','password']))){
	    	return back()->withErrors([
	    		'message' => 'Invalid email or password.'
		    ]);
	    }

	    return redirect()->home();

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function doLogout()
    {
		auth()->logout();

		return redirect()->home();
    }
}
