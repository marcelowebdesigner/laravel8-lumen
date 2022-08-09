<?php

namespace App\Http\Controllers;

use App\Models\Cliente;

class ClienteController extends Controller
{
   public function ObtenerClientes(){
        return Cliente::all();
   }
   public function ObtenerClientePorId($id){
        return Cliente::find($id);
   }
}
