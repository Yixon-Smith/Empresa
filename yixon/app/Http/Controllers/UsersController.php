<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;


class UsersController extends Controller
{
    public function __construct(Request $request)
    {
        $this->request = $request;

        $this->middleware('guest', [
            'only' => ['create','index', 'create']
        ]);
    }
    
    
    public function index()
    {
        return view('pages/login'); 
    }

    public function create()
    {
        return view('pages/register');   
    }

    public function authenticate(Request $request)
    {   
        Users::consulta($this->request->email, $this->request->password);
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, false, true)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function store()
    {
        $this->request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
      
         $user = Users::add($this->request->name,$this->request->lastname, $this->request->email, $this->request->password);
         
        if ( !$user )
            $this->request->session();
        else
            $this->request->session(); 
        return redirect()->to('dashboard');

    }

    public function destroy(){
       
        Auth::logout();
        $this->request->session()->invalidate();
        $this->request->session()->regenerateToken();

        return redirect()->to('/');
    }

}
