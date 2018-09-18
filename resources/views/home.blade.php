@extends('layouts.app')

@section('content')
<div class="flex items-center">
    <div class="md:w-1/2 md:mx-auto">
        <div class="rounded shadow">
            <div class="font-medium text-lg text-brand-darker text-center bg-brand-darker p-3 rounded-t">
                <p class="text-white">Mis Proyectos</p>
            </div>
            <div>
                @foreach($projects as $key => $project)
                    <div class="bg-white mx-auto shadow-lg rounded-lg overflow-hidden mb-2">
                      <div class="sm:flex sm:items-center px-6 py-4">
                        <img class="block h-16 sm:h-24 rounded-full mx-auto mb-4 sm:mb-0 sm:mr-4 sm:ml-0" src="https://avatars2.githubusercontent.com/u/4323180?s=400&u=4962a4441fae9fba5f0f86456c6c506a21ffca4f&v=4" alt="">
                        <div class="text-center sm:text-left sm:flex-grow">
                          <div class="mb-4">
                            <p class="text-xl leading-tight">
                                {{$project->name}}
                            </p>
                            <p class="text-sm leading-tight text-grey-dark">
                                {{$project->description}}
                            </p>
                          </div>
                          <div>
                            <a href="/projects/{{$project->id}}/edit" class="no-underline text-xs font-semibold rounded-full px-4 py-1 leading-normal bg-white border border-yellow-darker text-yellow-darker hover:bg-yellow-darker hover:text-white">
                                Editar
                            </a>
                            
                            <button class="text-xs font-semibold rounded-full px-4 py-1 leading-normal bg-white border border-red text-red hover:bg-red hover:text-white ml-2">
                                Eliminar
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
