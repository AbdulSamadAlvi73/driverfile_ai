<?php

namespace App\Http\Controllers;
use Validator;
use App\Models\Companies;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username_or_email' => 'required',
            'password' => 'required',
        ]);
    
        $isEmail = filter_var($request->username_or_email, FILTER_VALIDATE_EMAIL);
    
        $company = null;
        if ($isEmail) {
            $company = Companies::where('email', $request->username_or_email)->first();
        } else {
            $company = Companies::where('username', $request->username_or_email)->first();
        }
        if (!$company || !Hash::check($request->password, $company->password)) {
            // Set a custom error message for login failure
            $errors = new MessageBag(['login_error' => 'Invalid email or password']);
            return redirect()->back()->withInput()->withErrors($errors)->with('loginactiveTab', 'login');
        }
    
        Auth::login($company);
    
        return redirect()->route('companyprofile');
    }
    
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:companies',
            'email' => 'required|unique:companies|email',
            'password' => 'required|min:8|confirmed',
            'phone_no' => 'required|unique:companies',
            'zipcode' => 'required|digits:5',
            'company_code' => 'required|digits:6' // Add validation rule for company code
        ]);
    
        if ($validator->fails()) {
            // Add a new parameter to indicate that there was an error in the sign-up form
            return redirect()->back()->withErrors($validator)->withInput()->with('activeTab', 'signup');
        }
        
    
        // Create the company record with the provided code
        $company = Companies::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone_no' => $request->phone_no,
            'zip_code' => $request->zipcode,
            'company_code' => $request->company_code    
        ]);
    
        // Authenticate the newly registered user
        Auth::login($company);
    
        return redirect()->route('companyprofile')->with('success', 'Registration successful');
    }
    
    
    
     
public function logout(){
    \Session::flash('success', 'Logout successful');
    \Auth::logout();
    return redirect('login');
}

}
