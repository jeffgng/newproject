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

    /* public function liste()
    {
        //
         $liste = message::all();

    return view('liste', compact('liste'));
    }*/


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
        //
        $message = message::findOrFail($id);

    return view('edit', compact('message'));
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
         $validatedmessage = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required',
        'message'=>'required'
         ]);
         liste::whereId($id)->update($validatedmessage);

    return redirect('/liste')->with('success', ' mise à jour effectuée succèss');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $messages = message::findOrFail($id);
    $messages->delete();

    return redirect('/liste')->with('success', ' supprimer avec succèss');
    }
}
