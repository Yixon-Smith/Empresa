<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Users extends Model
{
    use HasFactory;

    public static function add($name, $lastname, $email, $password)
    {
        DB::insert("call add_user('$name', '$lastname', '$email', '$password')");    
    }

    public static function consulta($email, $password)
    {
        DB::select("call addcs('$email', '$password')"); 
    }
    
}
