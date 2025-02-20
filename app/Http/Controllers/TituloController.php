<?php

namespace App\Http\Controllers;

use App\Http\Requests\TituloRequest;
use App\Models\Titulos;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TituloController extends Controller
{
    //renderizar el listado de tareas -tareas paginadas
    public function index()
    {
        //pasamos variables a las vistas con notación de array
        $tasks=Titulos::paginate(perPage:5);
        return view('titulos.index',[
            'titulos'=>$tasks,  
        ]);
    }

    public function create(){
        return view('create',[
            'task' => new Titulo(),
            'actionUrl' => route('titulos.store'),
            'submitButtonText' => 'Crear tarea',
        ]);
    }
    public function update(TituloRequest $request, Titulos $task):RedirectResponse
    {
        $task->update($request->validated());
       return redirect()->route('titulos.index');
    }

    public function store(TituloRequest $request):RedirectResponse{
        dd($request -> validated());  
    }

    public function toggle (Titulos $task): RedirectResponse{
        $task->update([
            'completed'=>!$task->completed
        ]);
        return redirect()->route('titulos.index');
    }
 
    public function delete(Titulos $task): RedirectResponse{
        $task->delete();
        return redirect()->route('titulos.index');
    }
}
