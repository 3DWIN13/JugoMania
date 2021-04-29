<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RolesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $roles = Role::all();
        return view('roles.index', [
            'roles' => $roles,
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|unique:roles,name|max:255',
        ]);

        Role::create([
            'name' => $validated['nombre']
        ]);

        return redirect()->back()->with('status', 'El rol se ha creadi correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    public function assign(Request $request, $roleId)
    {
        $role = Role::findById($roleId);
        $validated = $request->validate([
            'user' => 'required',
        ]);
        $user = User::find($validated['user']);

        if($user->hasRole($role)){
            return redirect()->back()->with('error', 'El usuario seleccionado ya tiene el rol asignado');
        }

        $user->assignRole($role);

        return redirect()->back()->with('status', 'Rol asignado correctamente');
    }

    public function remove(Request $request, $roleId)
    {
        $role = Role::findById($roleId);
        $validated = $request->validate([
            'user' => 'required',
        ]);
        $user = User::find($validated['user']);

        if(!$user->hasRole($role)){
            return redirect()->back()->with('error', 'El usuario seleccionado ya tiene no el rol asignado');
        }

        $user->removeRole($role);

        return redirect()->back()->with('status', 'Rol removido correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($roleId)
    {
        $role = Role::findById($roleId);
        $role->delete();

        return redirect()->back()->with('status', 'Rol eliminado correctamente');
    }
}
