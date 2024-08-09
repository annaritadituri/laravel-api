@extends('layouts.app')

@section('content')

<div class="d-flex flex-row">

    <!--SIDEBAR-->
    @include('shared.sidebar')

    <div class="container m-5">

        @if (session('status'))
            <div class="alert alert-success mt-3">
                {{ session('status') }}
            </div>
        @endif

        <div class="container d-flex justify-content-between align-items-center p-0">
            <h1 class="my-4">Projects backarea</h1>
            <a class="btn my-4" href="{{ route('admin.projects.create') }}" as="button">New Project</a>
        </div>

        <div class="projects-table">

            <table class="w-100">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col" class="col-9">Project name</th>
                        <th scope="col">Action buttons</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <th scope="row">{{ $project['id'] }}</th>
                            <td><a href="{{ route('admin.projects.show', $project) }}" class="link-underline link-offset-2">{{ $project['title'] }}</a></td>
                            <td>
                                <li class="list-unstyled">
                                    <a class="btn" href="{{ route('admin.projects.edit', $project) }}" as="button"><i class="fas fa-pen-to-square"></i></a>
                                    <a class="btn button-blue" href="{{ route('admin.projects.show', $project) }}" as="button"><i class="fas fa-magnifying-glass"></i></a>
                                    <a class="btn button-red" href="{{ route('admin.projects.edit', $project) }}" as="button"><i class="fas fa-delete-left"></i></a>
                                </li>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

    </div>

</div>



    
    
@endsection