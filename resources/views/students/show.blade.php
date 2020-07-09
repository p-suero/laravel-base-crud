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
                        </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
