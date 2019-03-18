<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(5);
        return view('admin.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'username' => 'required',
            'image' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'password' => 'required',
            'status' => 'required',

    ]);
        $user = new User();
        $user -> username = $request -> username;
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file -> move('uploads/gallery/', $filename);
            $user->image = $filename;
        }else{
//            return $request;
            $user->image = '';
        }
        $user -> first_name = $request -> fname;
        $user -> last_name = $request -> lname;
        $user -> email = $request -> email;
        $user -> password = bcrypt($request -> password);
        $user -> status = $request -> status == 'active'?1:0;
        $user -> save();
        return redirect()->route('user');
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
        $user = User::find($id);
        return view('admin.user.edit',compact('user'));
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
        $request -> validate([
            'username' => 'required',
            'image' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'password' => 'required',
            'status' => 'required',
        ]);
        $user = User::find($id);
        $user -> username = $request -> username;
//        $user -> image = $request -> image;
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file -> move('uploads/gallery/', $filename);
            $user->image = $filename;
        }else{
//            return $request;
            $user->image = '';
        }
        $user -> first_name = $request -> fname;
        $user -> last_name = $request -> lname;
        $user -> email = $request -> email;
       // $user -> password = $request -> password;
        $user -> password = bcrypt($request -> password);
//        $user -> status = $request -> status;
    //    dd($user);
        $user -> status = $request -> status == 'active'?1:0;
        $user -> save();
        return redirect()->route('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $user = User::find($id);
        $user -> delete();
        return redirect()->route('user');
    }
}
