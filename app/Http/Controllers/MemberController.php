<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeMembers;
use App\Models\member;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;


class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Indice de Paginacion de Miembros
        $members = member::latest()->paginate(7);

        return view('members.index',compact('members'))
        ->with('i',(request()->input('page',1)-1)*7);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Formulario de Creacion de Miembros
        return view('members.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeMembers $request)
    {
        // Redirige la validacion a /app/http/request/storeMembers
        
        $request->validate([$request]);

        member::create($request->all());

        return redirect()->route('members.index')
        ->with('success','Member Added succesfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(member $member)
    {
        //Muestra Elementos Member (del modelo $member )
        return view('members.show', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(member $member)
    {
        //Archivo de edicion de member

        return view('members.edit',compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(storeMembers $request, member $member)
    {
        //PUT changes into db 

        $request->validate();
    
        $member->update($request->all());
    
        return redirect()->route('members.index')
                        ->with('success','Member updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(member $member)
    {
        //Delete Member in DB

        $member->delete();

        return redirect()->route('members.index')->with('success', 'Member Deleted Succesfully');
    }
//     public function subirArchivo(Request $request)
//  {
//         //Recibimos el archivo y lo guardamos en la carpeta storage/app/public
//         $request->file('archivo')->store('public');
//         dd("subido y guardado");
//  }
 }
