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
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required'
        ]);
        
        $data = $request->all();
        $check = $this->create($data);
         
        return back()->with('success', 'Thank you for contact us!');
        //return redirect("contact")->withSuccess('Great! You have Successfully sent');  |unique:users
        
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
