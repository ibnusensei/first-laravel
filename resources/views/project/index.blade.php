@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <p class="mb-0">
                            {{ $title }}
                        </p>
                        <div>
                        <a name="" id="" class="btn btn-primary btn-sm" href="{{ route('project.create') }}" role="button">Tambah</a>
                        </div>
                    </div>
                    {{-- <p class="mb-0">{{ $subtitle }}</p> --}}
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Task</th>
                                <th>Leader</th>
                                <th>Owner</th>
                                <th>Deadline</th>
                                <th>Progress</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $project->name }}</td>
                                <td>{{ $project->tasks_count }}</td>
                                <td>{{ $project->leader->name }}</td>
                                <td>{{ $project->owner }}</td>
                                <td>{{ $project->deadline }}</td>
                                <td>{{ $project->progress }} %</td>
                                <td width="100px">
                                    <a class="btn btn-warning btn-sm" href="{{ route('project.edit', $project) }}" role="button">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="btn btn-primary btn-sm" href="{{ route('project.show', $project) }}" role="button">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <form action="{{ route('project.destroy', $project) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </button>
                                    </form>
                                </td>
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
