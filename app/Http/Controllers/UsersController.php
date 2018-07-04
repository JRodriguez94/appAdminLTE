<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use Carbon\Carbon;

use Illuminate\Http\Request;
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
        //$this->middleware('auth', ['only' => ['create']]);
        $this->middleware('auth', ['except' => ['create','store']]);
    }

    public function index()
    {
        $users = User::all();
       // return User::all();
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
        //dd($request->all());
        //return all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,
        [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
           // 'password-confirm' => 'required|same:password'
        ]);

        if(User::passwordVlidation($request))
        {
            //return "Pasa";
            $user = User::create($request->all());
        }else
        {
            return redirect()->route('users.create')->with('validateP', 'las contraseñas no coinciden');
        }
       
        //dd($user);
        //return $user;
        return redirect()->route('users.create')->with('info', 'hemos recibido tu solicitud');
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
        //return $user;
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
        //dd($request->all());
        DB::table('users')->where('id', $id)->update([
                "name" => $request->input('name'),
                "phone" => $request->input('phone'),
                "email" => $request->input('email'),
                "updated_at" => Carbon::now(),
            ]);

        //$user = User::findOrFail($id)->update($request->all());
        //dd($request->all());
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
