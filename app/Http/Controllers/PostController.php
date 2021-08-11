<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\ContactModel;
use Hash;

class PostController extends Controller
{
   
    public function getContact()
    {
        return view('contact');
    }
    
    
    public function saveContact(Request $request)
    {  
        $request->validate([
            'firstName' => 'required|alpha',
            'lastName' => 'required|alpha',
            'email' => 'required|email',
            'phone' => 'required|digits_between:9,10 ',
            'message' => 'required'
        ]);
        
        $data = $request->all();
        $check = $this->create($data);
         
        // return back()->with('success', 'Thank you for contact us!');  max:10
        return redirect("contact")->withSuccess('Great! You have Successfully sent'); 
        //  |unique:users
        
    }

    public function create(array $data)
    {
      return ContactModel::create([
        'firstName' => $data['firstName'],
        'lastName' => $data['lastName'],
        'email' => $data['email'],
        'phone' => $data['phone'],
        'message' => $data['message'],

        
      ]);
    }
    
    
}
