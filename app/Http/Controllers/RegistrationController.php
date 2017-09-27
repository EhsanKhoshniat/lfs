<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\User;
// use App\Mail\Welcome;
use App\Http\Requests\RegistrationForm;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view('registration.create');
    }

    public function store(RegistrationForm $form)
    {
    	//Validate the form
        /* MOVED TO REGISTRATION REQUEST  */
        /* IF YOU VALIDATING A FEW FORM, IT'S OK TO BE IN CONTROLLERS*/
 
    $form->persist();
    	
     /* MOVED TO REGISTRATION REQUEST  */
        // //Create and save the user
    	// $user = User::create([ 
     //    'name' => request('name'),
     //    'email' => request('email'),
     //    'password' => bcrypt(request('password'))
     //    ]);

    	// //Sign them up
    	// auth()->login($user);

     //    \Mail::to($user)->send(new Welcome($user));


        session()->flash('message', 'Welcome!');

    	//Redirect to the home page
    	return redirect()->home();

    }
}
