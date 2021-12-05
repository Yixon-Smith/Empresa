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
        dd($us);
        //return view('pages/dashboard', compact('us'));
        // return redirect()->to('dashboard', compact('us'));
    }

    public function vistaorden(){


        return view('pages/ordenvista');
    } 

    public function vistadetallesorden(){

        return view ('pages/detallesproductos');
    }

    public function muestradatos_orden(Home $orden)
    {   
        $orden =  Home::tabladatos_orden($this->request->num,$this->request->fech,$this->request->mon,$this->request->est);
        dd($orden);

        //return view('pages/orden', compact('orden'));
    }

}



