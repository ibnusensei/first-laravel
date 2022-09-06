@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <p class="mb-0">
                            {{ $project->name }}
                        </p>
                        <div>
                        <a name="" id="" class="btn btn-warning btn-sm" href="{{ route('project.index') }}" role="button">Kembali</a>
                        </div>
                    </div>
                    {{-- <p class="mb-0">{{ $subtitle }}</p> --}}
                </div>

                <div class="card-body">
                    <p class="">
                        {{ $project->owner }}
                    </p>
                    <p>
                        {{ $project->description }}
                    </p>
                </div>  
            </div>

            <div class="card mt-3">
                <div class="card-body">
                    <h4 class="card-title">List Task</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Task</th>
                                <th>Description</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($project->tasks as $task)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $task->name }}</td>
                                <td>{{ $task->description }}</td>
                                <td>{{ $task->status }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
