<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Database\Eloquent\Model;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('auth', ['except' => ['create','store']]);
    }

    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("users.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
        
        //dd($request->toArray());
        $request->flash(); //Esta linea es para que los datos ingresados no se pierdan en caso de que algo salga mal.
        
        //----- Estas lineas se remplazan por el Request CreateUserRequest
        // $this->validate($request,
        // [
        //     'name' => 'required',
        //     'phone' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required|min:8',
        // ]);

        //dd($request->toArray()); //--Te muestra el request hecho un array

        // if(User::passwordVlidation($request))
        //     {
        //         $user = User::create($request->all());
        //     }
        // else
        //     {
        //         return redirect()->route('users.create')->with('validateP', 'las contraseñas no coinciden');
        //     }
        
        $user = User::create($request->all());
        return redirect()->route('users.create')->with('info', 'El usuario se ha creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->flash(); //Esta linea es para que los datos ingresados no se pierdan en caso de que algo salga mal.
        $user = User::findOrFail($id)->update($request->all());
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id)->delete();
        return redirect()->route('users.index');
    }
}
