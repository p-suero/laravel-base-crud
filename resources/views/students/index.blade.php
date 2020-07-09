@extends('layouts.app')
@section('page-title',"Lista studenti")
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="mt-4 mb-3">Lista studenti</h1>
                    <a href="{{route("students.create")}}" class="btn btn-success">Crea nuovo prodotto</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($students as $student)
                            <tr>
                                <td>
                                    {{$student->id}}
                                </td>
                                <td>
                                    {{$student->name}}
                                </td>
                                <td>
                                    {{$student->lastname}}
                                </td>
                                <td>
                                    {{$student->email}}
                                </td>
                                <td>
                                    <a href="{{route("students.show", ["student" => $student->id])}}" class="btn btn-primary">Dettaglio studente</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">
                                    Il database non include alcun studente
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
