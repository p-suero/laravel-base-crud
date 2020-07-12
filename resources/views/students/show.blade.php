@extends('layouts.app')
@section('page-title',"Dettaglio studente")
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-4 mb-3">Dettaglio studente</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Matricola</th>
                            <th>Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
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
                                {{$student->code}}
                            </td>
                            <td>
                                <form class="d-inline-block" action="{{route("students.show", ["student" => $student->id])}}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    <button class="btn btn-danger btn-sm" type="submit" name="button">Elimina studente</button>
                                </form>
                            </td>
                        </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
