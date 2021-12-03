<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function __invoke(){
        return view('pages/dashboard');
    }

    public function muestradatos(Home $us)
    {   
        $us =  Home::tabladatos($this->request->name,$this->request->lastname,$this->request->email);
        //dd($us);
        return view('pages/dashboard', compact('us'));
       // return redirect()->to('dashboard', compact('us'));
    }

}

