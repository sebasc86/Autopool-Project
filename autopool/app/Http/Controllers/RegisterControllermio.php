<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function registerView()
	{
		return view('register');
	}

	public function registerValidate()
	{
	 $this->validate(request(),[
                'nombre'   => 'required|min:3|max:20',
                'apellido'   => 'required|min:3|max:20',
                'correo'  => 'required|email|max:30',
                'password' => 'required|alpha_num|min:8|max:12',
                'password_confirmation' => 'required|same:password',
                'edad' => 'required|numeric|between:18,75',
                'sexo' => 'required',
                'sexo.1' => 'numeric|min:1|max:1',
                'sexo.2' => 'numeric|min:2|max:2',
                'accion' => 'required|array',
                'accion.1' =>  'min:1|max:1',
                'accion.2' =>  'min:2|max:2',
                'terminos' => 'required',
                ],
                [
                'required' => 'El :attribute es obligatorio',
                'correo.email' => 'Tiene que ser un Email valido',
                'password_confirmation.required' => 'La confirmacion es obligatoria',
                'password.alpha_num' => 'La contraseña debe ser Alfa numerica',
                'password.min' => 'La contraseña debe tener un minimo de  8 caracteres',
                'password.max' => 'La contraseña tiene que tener un maximo de 8 caracteres',
                'password_confirmation.same' => 'Las contraseñas no coinciden',
                'sexo.1' => 'No se admite modificar el formulario',
                'edad.between' => 'La :attribute tiene que ser mayor a 18 o menor a 75 años',
                'terminos.required' => 'Debe aceptar los terminos y condiciones',
                ]);
         
            
    } 		
}
