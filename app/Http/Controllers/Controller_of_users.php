<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class Controller_of_users extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $All_users= User::all();
        return view('pages_user.page_show_users',compact('All_users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages_user.page_insert_user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_name' => 'required|max:20',
            'user_email' =>  'required|max:25',
            'user_type' =>  'required|max:10',
            'user_phone' =>  'required|max:13',
           ]);
  
  
            $dataUser =   new User;
            $dataUser->user_name       = $request->user_name;
            $dataUser->password        = $request->password;
            $dataUser->user_email      = $request->user_email;
            $dataUser->user_type       = $request->user_type;
            $dataUser->user_phone      = $request->user_phone;
        
            $dataUser->save();
  
             return redirect('/pages_user');
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
        $data_user= User::find($id);

        return view('pages_user.page_edit_user',compact('data_user'));
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
        $request->validate([
            'user_name' => 'required|max:20',
            'user_email' =>  'required|max:25',
            'user_type' =>  'required|max:10',
            'user_phone' =>  'required|max:13',
           ]);
  
  
            $dataUser =  User::find($id);
            $dataUser->user_name  = $request->user_name;
            $dataUser->user_email      = $request->user_email;
            $dataUser->user_type  = $request->user_type;
            $dataUser->user_phone = $request->user_phone;
        
            $dataUser->save();
  
             return redirect('/pages_user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_user  =User::find($id);
        $delete_user->delete();

       return redirect('/pages_user');
    }
}
