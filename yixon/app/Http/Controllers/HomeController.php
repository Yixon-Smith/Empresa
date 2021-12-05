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
        $us =  Home::tabladatos_usuarios();
        //dd($us);
        return view('pages/dashboard', compact('us'));
        
    }

    

    public function vistadetallesorden(){

        return view ('pages/detallesproductos');
    }

    public function muestradatos_orden()
    {   
        $orden =  Home::tabladatos_orden();
        //dd($orden);

       return view('pages/ordenvista', compact('orden'));
    }

}



