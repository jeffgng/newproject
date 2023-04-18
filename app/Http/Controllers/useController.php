<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\message;
use Illuminate\Http\Request;

class useController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function acceuil()
    {
        //
         return view('home');
    }


    public function apropos()
    {
        //
           $tab = [
            'nom' => 'GNEGNE',
            'prenom' => 'farouk',
            'age' => 22,
            'pays' => 'burkina',
            'ville' => 'ouaga',

        ];

            array_push($tab,"blue","yellow");

        $a = 2;
         return view('apropos',  compact('tab','a'));
    }


    public function service()
    {
        //
         return view('service');
    }

    public function tarif()
    {
        //
         return view('tarif');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         message::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);
        return "message envoyé";
    }
    public function liste ()
    {
        $messages = message::all();
        return view('liste', compact('messages'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function edit($id)
    {
        $message = message::find($id);
        return view('edit',['message' => $message]);

    }
    public function update(Request $request,$id){
        $message = message::find($id);
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');
        $message->save();
        return 'element modifier avec succes';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

       public function remove($id)
    {

            $message= message::find($id);

            $message->delete();
            return "element supprimé";

    }
    public function destroy($id)
    {
        //

      /*  $messages = message::findOrFail($id);
    $messages->delete();

    return redirect('/liste')->with('success', ' supprimer avec succèss');*/
    }
}

