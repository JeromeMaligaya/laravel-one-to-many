@extends('layouts.app')

@section('page-title', 'project index')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1 class="text-center">This is your current Projects-Bin</h1>
        </div>
        <div class="col-10">
            <ul class="row">
                @forelse ($projects as $project)
                <li class="col-4 g-3">
                    <div id="project-card" class="card py-4">
                        <div class="card-body">
                            <h5 class="card-title">Name project: {{ $project->name }}</h5>
                            <h5>Started on: {{ $project->date }}</h5>
                            <div class="mb-2">
                                <h5 class="mb-1">Languages used: </h5>
                                <p class="card-text">
                                {{ $project->languages}}
                                </p>
                            </div>
                            <div class="mb-2">
                                <h5 class="mb-1">Description:</h5>
                                <p class="card-text">
                                    {{ $project->description}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <form action="{{ route("admin.projects.restore",["id"=>$project->id])}}" method="POST" class="w-100 mt-1">
                        @method('PATCH')
                        @csrf
                        <button type="submit" class="btn btn-warning w-100">Restore</button>
                    </form>
                    <form action="{{ route("admin.projects.permanent.delete",["id"=>$project->id])}}" method="POST" class="w-100 mt-1 mb-5">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger w-100">Permanent Delete</button>
                    </form>
                </li>
                @empty
                <h1 class="text-center text-bg-danger my-3 p-2 rounded-4">There are not projects in your bin! </h1>
                @endforelse
            </ul>
        </div>
    </div>
</div>

@endsection
