@extends('layouts.app')

@section('page-title', 'project create')

@section('content')
<main>
    <section class="container my-4" id="form-project">
        <div class="row justify-content-center">
            <div class="col-8">
                @if($errors->any())
                <div class="alert alert-warning">
                    <ul>
                    @foreach($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                    </ul>
                </div>
                @endif
            </div>
            <div class="col-5">
                <form action="@yield("form-action")" method="POST">
                    @yield("form-method")
                    @csrf
                    <div class="mb-3">
                        <h1 class="text-center fw-bold">
                            @yield("form-title")
                        </h1>
                    </div>
                    <div class="mb-3">
                      <label for="name" class="form-label">Name project:</label>
                      <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $project->name) }}">
                    </div>
                    @error('name')
                       <div class="alert alert-warning">
                            {{ $message }}
                       </div>
                    @enderror
                    <div class="mb-3">
                      <label for="date" class="form-label">Date started: (yyyy-mm-dd)</label>
                      <input type="text" class="form-control" id="date" name="date" value="{{ old('date', $project->date) }}">
                    </div>
                    @error('date')
                    <div class="alert alert-warning">
                         {{ $message }}
                    </div>
                    @enderror
                    <div class="mb-3">
                        <label for="type" class="form-label">Type:</label>
                        <select name="type_id" id="type" class="form-control">
                            <option disabled>choose a type here</option>
                            @foreach ($types as $type)
                                <option value="{{ $type->id}}">
                                    {{ $type->name }}
                                    @if($type->id == old("type_id", $project->type_id))
                                    selected
                                @endif
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description:</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ old('description', $project->description) }}</textarea>
                    </div>
                    @error('description')
                    <div class="alert alert-warning">
                         {{ $message }}
                    </div>
                    @enderror

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <a href="{{ route('admin.projects.index') }}" class="btn btn-success">Back to home</a>
                </form>
            </div>
        </div>
    </section>
</main>
@endsection
