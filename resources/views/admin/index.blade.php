@extends('layouts.admin')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Titolo</th>
                <th scope="col">ReadME</th>
                <th scope="col">Linguaggi</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <th scope="row">{{ $project->title }}</th>
                    <td>{{ $project->readme }}</td>
                    <td>{{ $project->languages }}</td>
                    <td>
                        <a href="{{ route('admin.projects.show', ['project' => $project->slug]) }}" class="btn btn-info">Più dettagli</a>
                        <a href="{{ route('admin.projects.edit', ['project' => $project->slug]) }}" class="btn btn-warning">Modifica</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
