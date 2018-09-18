@extends('layouts.app')

@section('content')
<div class="bg-white mx-auto lg:w-1/2 md:w-3/4 shadow-lg rounded-lg overflow-hidden">
  <div class="sm:flex sm:items-center px-6 py-4 mt-6">
    <img class="block h-16 sm:h-24 rounded-full mx-auto mb-4 sm:mb-0 sm:mr-4 sm:ml-0" src="https://avatars2.githubusercontent.com/u/4323180?s=400&u=4962a4441fae9fba5f0f86456c6c506a21ffca4f&v=4" alt="">
    <div class="text-center sm:text-left sm:flex-grow">
      <div class="mb-4">
        <p class="text-xl leading-tight">{{$project->name}}</p>
        <p class="text-sm leading-tight text-grey-dark">{{$project->description}}.</p>
      </div>
      <div>
        <button class="text-xs font-semibold rounded-full px-4 py-1 leading-normal bg-white border border-green text-green hover:bg-green hover:text-white">Guardar</button>
      </div>
    </div>
  </div>
  <div class="sm:flex sm:itesm-center px-6 py-4">
    <example-component :project_id="{{$project->id}}"></example-component>
  </div>
</div>

@endsection

@section('scripts')

@endsection