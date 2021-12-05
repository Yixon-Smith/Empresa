<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Home extends Model
{
    use HasFactory;

    public static function tabladatos_usuarios()
    {
      $us= DB::select("call adddatos()");

      return $us;
    }

    public static function tabladatos_orden()
    {
      $orden = DB::select("call add_datos_orden()");
      
      return $orden;

    }
    
}