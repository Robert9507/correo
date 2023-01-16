<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\ConctactMailable;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    // metodo para mostrar el formulario
    public function index() {
        return view('contactanos.index');
    }

    // metodo para procesar el formulario y enviarlo 
    public function store(Request $request) {

        $request->validate([
            'name' => 'required',
            'correo' => 'required|email',
            'mensaje' => 'required',
        ]);

        $email = new ConctactMailable($request->all());
        Mail::to('robertoch9514@hotmail.com')->send($email);

        return redirect()->route('contactanos.index')->with('info','Mensaje enviado');      
    }
}
