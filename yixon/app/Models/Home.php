<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Home extends Model
{
    use HasFactory;

    public static function tabladatos($name,$lastname,$correo)
    {
      $us= DB::select("call adddatos('$name','$lastname','$correo')");

      return $us;
    }
}