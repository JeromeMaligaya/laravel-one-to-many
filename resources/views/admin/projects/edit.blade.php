@extends("admin.projects.layouts.create-or-edit")

@section("form-action")
    {{ route("admin.projects.update", $project) }}
@endsection

@section("form-method")
    @method("PUT")
@endsection

@section("form-title")
    Update this project {{ $project->name }}
@endsection
