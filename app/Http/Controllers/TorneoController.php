<?php

namespace App\Http\Controllers;

use App\Http\Requests\TorneoRequest;
use App\Models\Torneo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TorneoController extends Controller
{
     //renderizar el listado de tareas -tareas paginadas
     public function index()
     {
         //pasamos variables a las vistas con notación de array
         $tasks=Torneo::paginate(perPage:5);
         return view('torneos.index',[
             'torneos'=>$tasks,  
         ]);
     }
 
     public function create(){
         return view('create',[
             'task' => new Torneo(),
             'actionUrl' => route('torneos.store'),
             'submitButtonText' => 'Crear tarea',
         ]);
     }
     public function update(TorneoRequest $request, Torneo $task):RedirectResponse
     {
         $task->update($request->validated());
        return redirect()->route('torneos.index');
     }
 
     public function store(TorneoRequest $request):RedirectResponse{
         dd($request -> validated());  
     }
 
     public function toggle (Torneo $task): RedirectResponse{
         $task->update([
             'completed'=>!$task->completed
         ]);
         return redirect()->route('torneos.index');
     }
 
     public function delete(Torneo $task): RedirectResponse{
         $task->delete();
         return redirect()->route('torneos.index');
     }
}
