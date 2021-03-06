<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Noticia;
use Log;

class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    { 
        // 1-hacer consulta en caso de que el request traiga order
            // $id = noticia::orderby('created_at', 'DESC')
            // if (isset($request->$id))
            // return $id
            
        $order = $request->get('order');
        Log::info($order);
        if(isset($order)){
            $query = Noticia::orderBy('created_at', $order);
        }
        // 2-hacer consulta en caso de que el request traiga id en el caso de que no tenga traer todo
            // return Noticia::where('user_id', $id) consulta para traer por id de user
            // return Noticia::orderBy('created_at', 'DESC') si no pide por id, traer todas las noticias
        $id = $request->get('user_id');
        if(isset($id)){
            $query = $query->where('user_id', $id);
        }

        if(!isset($order, $id )){
            return Noticia::all();
        }

        // 3-ejecutar get
        return $query->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        return Noticia::find($id);
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
