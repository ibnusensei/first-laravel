@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <p class="mb-0">{{ $title ?? 'Project Management' }}</p>
                        <div>
                            <a href="{{ route('project.index') }}" class="btn btn-warning btn-sm">Kembali</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ $url }}" method="POST">
                        @csrf
                        @if (@$project)
                            @method('PUT')
                        @endif
                        
                        <div class="form-group mb-3">
                            <label for="">Leader</label>
                            <input type="text" name="leader_id" id="" value="{{ @$project->leader_id ?? old('leader_id') }}" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Project</label>
                            <input type="text" name="name" id="" value="{{ @$project->name ?? old('name') }}" class="form-control" placeholder="Project Name" aria-describedby="helpId">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Owner</label>
                            <input type="text" name="owner" id="" value="{{ @$project->owner ?? old('owner') }}" class="form-control" placeholder="Project Owner" aria-describedby="helpId">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Deadline</label>
                            <input type="date" name="deadline" value="{{ @$project->deadline ?? old('deadline') }}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Progress (%)</label>
                            <input type="number" min="0" max="100" value="{{ @$project->progress ?? old('progress') }}" name="progress" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>

                        <div class="form-group mb-3">
                          <label for="">Description</label>
                          <textarea class="form-control" name="description" id="" rows="3">{{ @$project->description ?? old('description') }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
