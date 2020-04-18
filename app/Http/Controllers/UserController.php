<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

// importamos el modelo user

use App\User;


class UserController extends Controller

{
    // creamos la función index
   public function index()
   {
    //    retornar datos de usuarios a la vista
       $users = User::all();
       return view( 'usuarios', ['users' => $users]); 
   }
}
