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
                    <form action="{{ route('project.update', $project) }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="">Leader</label>
                            <input type="text" name="leader_id" id="" value="{{ $project->leader_id }}" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>


                        <div class="form-group mb-3">
                            <label for="">Project</label>
                            <input type="text" name="name" id="" value="{{ $project->name }}" class="form-control" placeholder="Project Name" aria-describedby="helpId">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Owner</label>
                            <input type="text" name="owner" id="" class="form-control" value="{{ $project->owner }}" placeholder="Project Owner" aria-describedby="helpId">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Deadline</label>
                            <input type="date" name="deadline" id="" class="form-control" value="{{ $project->deadline }}" placeholder="" aria-describedby="helpId">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Progress (%)</label>
                            <input type="number" min="0" max="100" name="progress" id="" value="{{ $project->progress }}" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>

                        <div class="form-group mb-3">
                          <label for="">Description</label>
                          <textarea class="form-control" name="description" id="" rows="3">{{ $project->description }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
