@extends('layouts.app')

@section('page-title', 'project index')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1 class="text-center">My projects</h1>
        </div>
        <div class="col-12 text-center my-3">
            <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Create a new project</a>
            {{-- {{ dd(route('admin.projects.create')) }} --}}
        </div>
        <div class="col-10">
            <ul class="row">
                @forelse ($projects as $project)
                <li class="col-4 g-3">
                    <div id="project-card" class="card pt-2">
                        <div class="card-body">
                            <div class="mb-2">
                                <h5 class="mb-1">Name project: </h5>
                                <p class="card-text fw-bolder">
                                    {{ $project->name }}
                                </p>
                            </div>
                            <div class="mb-2">
                                <h5 class="mb-1">Started on: </h5>
                                <p class="card-text fw-bolder">
                                    {{ $project->date }}
                                </p>
                            </div>
                            <div class="mb-2">
                                <h5 class="mb-1">Type: </h5>
                                <p class="card-text fw-bolder">
                                    {{ $project->type->name}}
                                </p>
                            </div>
                            <div class="mb-2">
                                <h5 class="mb-1">Description:</h5>
                                <p class="card-text fw-bolder">
                                    {{ $project->description}}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mt-1">
                        <a href="{{ route('admin.projects.show', $project )}}" class="btn btn-primary w-100">Show more...</a>
                    </div>
                    <div class="d-flex justify-content-center mt-1">
                        <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-warning w-100">Edit</a>
                    </div>
                    <form action="{{ route("admin.projects.delete", $project)}}" method="POST" class="w-100 mt-1 mb-5" >
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger w-100">Delete</button>
                    </form>
                </li>
                @empty
                <h1>There are not projects in your collection database! </h1>
                @endforelse
            </ul>
            <div class="my-4">
                {{ $projects->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
{{--
@section('additional-scripts')
    @vite("resources/js/sneakers/delete-sneaker.js")
@endsection --}}
