<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile');
    }


    public function store()
    {

        $user = User::find(Auth::user()->id);


        $this->validate(request(), [       
          'phone' => 'required|numeric',
          'email' => 'unique:users,email,'.$user->id,
          'password' => 'required|alpha_num|min:8|max:12',
          'password_confirmation' => 'required|same:password',
          'accion' => 'required|array',
          'accion.driver' =>  'min:1|max:1',
          'accion.co-driver' =>  'min:2|max:2',
          'profile_picture' => 'max:2048|mimes:jpg,jpeg,gif,png',
          ]);


        
        
        $user->phone = request()->phone;
        $user->email = request()->email;
        $user->password = bcrypt(request()->password);


        $user->update();
       
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


        
        return redirect('profile');     
    }


}
