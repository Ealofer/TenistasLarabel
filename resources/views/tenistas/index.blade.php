<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
           Listado de tareas
        </h2>
    </x-slot>
 <!-- definimos el contenido a renderizar ( no hace falta poner slot )-->
 <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-g sm:px.20 bg-white border-b border-gray-200">
                Cuerpo
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <button class="p-4">
                           <a href="{{route('tenistas.create')}}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium bg-black text-white rounded-md hover:bg-gray-800">
                               Crear Tarea
                            </a>
                        </button>
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    id
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nombre
                                </th>
                                <th scope="col" class="px-6 py-3">
                                  Apellidos
                                </th>
                                <th scope="col" class="px-6 py-3">
                                   Altura
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Mano
                                 </th>
                                <th scope="col" class="px-6 py-3">
                                    Año nacimiento
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Accion
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                        @forelse($tenistas as $tenista)
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                            <td class="px-6 py-4">
                                {{$tenista->id}}
                            </td>
                            <td class="px-6 py-4">
                                {{$tenista->nombre}}
                            </td>
                            <td class="px-6 py-4">
                                {{$tenista->apellidos}}
                            </td>
                            <td class="px-6 py-4">
                                {{$tenista->altura}}
                            </td>
                            </td>
                            <td class="px-6 py-4">
                                {{$tenista->mano?'Diestro':'Zurdo'}}
                            </td>
                            <td class="px-6 py-4">
                                {{$tenista->anno_nacimiento}}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{route('tenistas.edit',$tenista)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                Editar
                                </a>
                            <form action="{{route('tenistas.delete',$tenista)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">
                                    Eliminar
                                </button>
                            </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                           <td class="px-6 py-4 whitespace-nowrap">
                                No hay tareas
                            </td>
                        </tr>
                        @endforelse
                        </tbody>
                    </table>
                    <div class="p-4">
                    {{$tenistas->links()}}
                  </div>
                </div>
            </div>
        </div>
    </div></x-app-layout>