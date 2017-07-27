<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'faq';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data,[
            'name' => 'required|string|max:40',
            'lastname'   => 'required|min:3|max:20',
            'email'  => 'required|email|max:30|unique:users',
            'password' => 'required|alpha_num|min:8|max:12',
            'password_confirmation' => 'required|same:password',
            'age' => 'required|numeric|between:18,75',
            'sex' => 'required',
            'sex.1' => 'numeric|min:1|max:1',
            'sex.2' => 'numeric|min:2|max:2',
            'accion' => 'required|array',
            'accion.1' =>  'min:1|max:1',
            'accion.2' =>  'min:2|max:2',
            'profile_picture' => 'max:2048|mimes:jpg,jpeg,gif,png',
            'terminos' => 'required',
            ],
            [
            'name.required' => 'El nombre es obligatorio',
            'lastname.required' => 'El apellido es obligatorio',
            'email.required' => 'El :attribute es obligatorio',
            'password.required' => 'La contraseña es obligatoria',
            'password_confirmation.required' => 'La confirmacion es obligatorio',
            'password_confirmation.same' => 'Las contraseñas deben coincidir',
            'age.numerica' => 'El campo tiene que ser numerico',
            'age.between' => 'La edad tiene que estar entre un rango de 18 a 75',
            'age.required' => 'La edad es obligatoria',
            'sex.required' => 'Tiene que elegir una opcion',
            'accion.required' => 'Tiene que elegir una opcion',
            'terminos.required' => 'Debe aceptar los terminos y condiciones',
            'profile_picture.mimes' => "La foto de perfil solamente se permiten formatos jpg, jpeg, gif, png",
            'profile_picture.max' => 'El tamaño maixmo es 2Mb',
            ]);

        
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {

       

        $user = User::create([
            'name' => $data['name'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'age' => $data['age'],
            'sex' => $data['sex'],
        ]);

        if(request()->has('accion.driver')){
            $user->update(['driver' => request()->accion['driver']]);
        }

        if (request()->has('accion.co-driver')){
            $user->update(['co-driver' => request()->accion['co-driver']]);
        };



        if(request()->profile_picture != null) {
// Asignamos nombre para la DB.
            $fileName = uniqid() . "." . request()->profile_picture->extension();            
// Defino la carpeta en la que voy a guardar la imagen
            $folder =  'uploads/files';
// Almacenar la imagen en el servidor con el nuevo nombre
            $path = request()->profile_picture->storeAs($folder, $fileName, 'public');
// Salvamos el usuario para la data base.
            $user->update(['profile_picture' => $fileName]);
// php artisan storage:link -> link storage desde consola.       
        }
// Devolvemos el usuario completo.
        return $user;
        

    }
}
