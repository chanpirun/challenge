<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request as FacadesRequest;

class HomeController extends Controller
{


    public function aboutus()
    {

        return view('aboutus');
    }
    public function footer()
    {

        return view('footer');
    }
    public function contactus()
    {

        return view('contactus');
    }
    public function airpollution()
    {

        return view('airpollution');
    }
    public function waterpollution()
    {

        return view('waterpollution');
    }
    public function noisepollution()
    {

        return view('noisepollution');
    }
    public function biodiversity()
    {

        return view('biodiversity');
    }




    public function signup(Request $request)
    {

        $validationRules = [
            // 'firstname' => 'required|string|max:50',
           
            'username' => 'required|string|max:50',
            'email'      => 'required|unique:users,email|max:50',
            'password'   => 'required|min:6|max:20',

        ];
        $this->validate($request, $validationRules);

        $user            =   new User();
        $user->username     =   $request->username;
        // $user->lastname     =   $request->lastname;
        $user->email     =   $request->email;
        $user->password  =   Hash::make($request->password);
        $user->save();
        $request->session()->put('authenticated', true);
        $request->session()->put('user_id', $user->id);
       

        return redirect()->route('index');
    }
    public function signin(Request $request)
    {
    

        $validationRules = [
            'email'      => 'required|email|max:50',
            'password'   => 'required|min:6|max:20',

        ];
        $this->validate($request, $validationRules);
        $user  = User::where('email', $request->email)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            $request->session()->put('authenticated', true);
            $request->session()->put('user_id', $user->id);
        }
        else{
            $request->session()->forget('authenticated');
        }
       
        return redirect()->route('index');
 
    }
    public function logout(Request $request) {
        // Clear the session variable
        $request->session()->forget('authenticated');
        $request->session()->forget('user_id');
        
        // Redirect to the index view
        return redirect()->route('index');
    }
    public function contact(Request $request){

      
        $user_id = $request->session()->get('user_id');
        $validationRules = [
            
            'info'      => 'required',
            

        ];
        $this->validate($request, $validationRules);

        $contact            =   new Contact();
        $contact->user_id     =   $user_id;
        $contact->info     =   $request->info;
       
        $contact->save();
       

        return redirect()->route('index');
    }
    
  
    
}
