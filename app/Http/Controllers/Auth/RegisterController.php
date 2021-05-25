<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Client;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
        
        return Validator::make($data, [
            /*
            'nombreCompleto' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'direccion' => ['required', 'string', 'max:255'],
            'numCuenta' => ['required', 'string', 'max:255'],
            'numTelefono' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            */
        ]);
    }
    

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        $c = new Client();
        $c->nombreCompleto = $data['name'];
        $c->tiempoEmpleado = 0;
        $c->taquillaActual = -1;
        $c->direccion = $data['direccion'];
        $c->numCuenta = $data['numCuenta'];
        $c->numTelefono = $data['numTelefono'];
        $c->fechaAlta = date_create('2020-07-01');
        $c->save();

        $u = new User();
        $u->email = $data['email'];
        $u->password = Hash::make($data['password']);
        $u->role = 'Client';

        $c->user()->save($u);

        return $u;

       
    
    }
}
