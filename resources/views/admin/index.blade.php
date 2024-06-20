@extends('layouts.admin')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Titolo</th>
                <th scope="col">ReadME</th>
                <th scope="col">Linguaggi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <th scope="row">{{ $project->title }}</th>
                    <td>{{ $project->readme }}</td>
                    <td>{{ $project->languages }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
