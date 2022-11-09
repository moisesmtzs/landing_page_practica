<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class SitioController extends Controller
{
    public function validarParametro( $id = null ) {
        if ( $id == 1234 ) {
            $name = "Moises";
            $email = "correo@correo.com";
            $message = "Este comentario es de prueba";
        } else {
            $name = "";
            $email = "";
            $message = "";
        }

        return view('contact', compact('name', 'email', 'message'));
    }

    public function goToLandingPage() {
        return view('index');
    }

    public function formReceive( Request $request ) {
        $request->validate([
            'name' => 'required|min:10',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);

        Contacto::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);
    
        
        // Contacto::create($request->all());
    
        return redirect('/contact');
        // dd($request->all());
    }

    // public function insertar(Request $request) {

    //     //$contacto = new Contacto();
    //     //$contacto->nombre = $request->nombre;
    //     //$contacto->correo = $request->correo;
    //     //$contacto->save();

    // }

}
