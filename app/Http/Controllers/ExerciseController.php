<?php

namespace App\Http\Controllers;

use App\Exercise;
use App\Group;
use Carbon\Carbon;
use Carbon\Traits\Week;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exercises = Exercise::paginate();
        return view('exercises.index', compact('exercises'));
    }


    public function treino($name)
    {
        $week = Carbon::now()->weekOfYear;
        $treinos = Exercise::where('name', 'like', '%'. $name . '%')->where('week', '=', $week)->get();
        if (!$treinos)
          return redirect()->back();
        return view('exercises.treino', compact('treinos'));
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Group::pluck('title','id');
        return view('exercises.create', compact('groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $exercise = $request->only('group_id','name','description','repetition','charge','week');
        if($request->file('image')->isValid()){
            $imageName = $request->name . "." . $request->file('image')->extension();
            $imagePath=$request->file('image')->storeAs('exercicio',$imageName);
            $exercise['image']=$imagePath;

        }

        Exercise::create($exercise);
        flash('Exercicio Cadastrado com sucesso')->success();
        return redirect()->route('exercises.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $groups = Group::pluck('title','id');
        $exercise = Exercise::findOrFail($id);
        if (!$exercise)
          return redirect()->back();
        return view('exercises.edit', compact('exercise','groups'));
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
        $exercise = Exercise::findOrFail($id);
        $data = $request->all();
        if($request->hasFile('image')){

            if($exercise->image && Storage::exists($exercise->image)){
                Storage::delete($exercise->image);
            }

            $imageName = $exercise->name . "." . $request->image->extension();
            $imagePath=$request->image->storeAs('exercicio',$imageName);
            $data['image']=$imagePath;
        }

        $exercise->update($data);
        flash('Exercicio atualizado com sucesso')->success();
        return redirect()->route('exercises.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exercise = Exercise::findOrFail($id);
        $exercise->delete();
        flash('Exercicio Apagado com sucesso')->success();
        return redirect()->route('exercises.index');
    }
}
