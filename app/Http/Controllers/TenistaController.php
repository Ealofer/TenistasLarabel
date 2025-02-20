<?php

namespace App\Http\Controllers;

use App\Http\Requests\TenistaRequest;
use App\Models\Tenista;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TenistaController extends Controller
{
    //renderizar el listado de tareas -tareas paginadas
    public function index()
    {
        //pasamos variables a las vistas con notación de array
        $tasks=Tenista::paginate(perPage:5);
        return view('tenistas.index',[
            'tenistas'=>$tasks,  
        ]);
    }

    public function create(){
        return view('create',[
            'task' => new Tenista(),
            'actionUrl' => route('tenistas.store'),
            'submitButtonText' => 'Crear tarea',
        ]);
    }
    public function update(TenistaRequest $request, Tenista $task):RedirectResponse
    {
        $task->update($request->validated());
       return redirect()->route('tenistas.index');
    }

    public function store(TenistaRequest $request):RedirectResponse{
        dd($request -> validated());  
    }

    public function toggle (Tenista $task): RedirectResponse{
        $task->update([
            'completed'=>!$task->completed
        ]);
        return redirect()->route('tenistas.index');
    }

    public function delete(Tenista $task): RedirectResponse{
        $task->delete();
        return redirect()->route('tenistas.index');
    }
}