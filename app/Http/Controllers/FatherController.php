<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Father;
class FatherController extends Controller
{
    
    public function index()
    {
        return view('father.insertDataFather');
    }

  
    public function create()
    {
        
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'nameFather' => 'required|max:20',
            'addressFather' =>  'required|max:20',
            'fatherPhone' =>  'required|max:13',
            'emailFather' =>  'required|max:30'
  
           ]);
  
  
            $dataFather = new father();
            $dataFather->name = $request->nameFather;
          //  $dataFather->username = 123;
          //  $dataFather->password =123;
            $dataFather->address = $request->addressFather;
            $dataFather->phone = $request->fatherPhone;
            $dataFather->email =$request->emailFather;
            $dataFather->save();
  
             return redirect('/father/')->with('status','data is inserted ');
    }

   
    public function show()
    {
        $allfather=father::all();
      return view('father.showFather',compact('allfather'));
    }

   
    public function edit($id)
    {
        //
    }

  
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
