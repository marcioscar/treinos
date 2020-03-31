<?php

namespace App\Http\Controllers;

use App\Classes;
use App\Mail\ContatoMail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = Classes::paginate();
        return view('classes.index', compact('classes'));
    }

    public function aulasDia(){
        $day = Carbon::now()->locale('pt')->dayName;
        $hora = Carbon::now()->format('H:i:s');
        $listaAulasDia = json_encode(Classes::select('aula', 'hora')->where('dia', '=', $day)->where('hora', '>=', $hora)->orderBy('hora', 'ASC')->get());

        $listaAulas = json_encode(Classes::select('aula', 'hora', 'dia')->orderBy('hora', 'ASC')->get());

        return view('welcome', compact('listaAulasDia','listaAulas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('classes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $class = $request->all();
        Classes::create($class);
        flash('Aula criada com sucesso')->success();
        return redirect()->route('classes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $class = Classes::findOrFail($id);
        if (!$class)
          return redirect()->back();
        return view('classes.edit', compact('class'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function edit(Classes $classes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $class = Classes::findOrFail($id);
        $class->update($request->all());
        flash('Aula atualizada com sucesso')->success();
        return redirect()->route('classes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $class = Classes::findOrFail($id);
        $class->delete();
        flash('Aula apagada com sucesso')->success();
        return redirect()->route('classes.index');
    }

    public function contato(Request $request){

        Mail::to('marcio@quattoracademia.com.br')->send(new ContatoMail($request));
        flash('email enviado com sucesso')->success();
        return redirect()->back();
    }
}
