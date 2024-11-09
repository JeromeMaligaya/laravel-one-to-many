@extends('layouts.app')

@section('page-title', 'project Show ' . $project)

@section('content')
<main>
    <section id="project-item">
        <div class="container">
            <div id="project-card" class="card pt-2 mb-2">
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
            <div class="d-flex justify-content-center">
                <a href="{{route("admin.projects.index")}}" class="btn btn-success">Back to index</a>
            </div>
        </div>
    </section>
</main>
@endsection
