@extends('layouts.app')
@section('page-title', "Modifica dati studente")
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 m-auto">
                <h1 class="mt-4 mb-3 text-center">Modifica dati studente</h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="" action="{{route("students.update",[ "student" => $student->id])}}" method="post">
                    @method("PUT")
                    @csrf
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="name" class="form-control" value="{{old("name", $student->name)}}" id="nome">
                        @error('name')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="cognome">Cognome</label>
                        <input type="text" name="lastname" class="form-control" value="{{old("lastname", $student->lastname)}}" id="cognome">
                        @error('lastname')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="matricola">Matricola</label>
                        <input type="number" name="code" class="form-control" value="{{old("code", $student->code)}}" id="Matricola">
                        @error('code')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" value="{{old("email", $student->email)}}" id="email">
                        @error('email')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                     <button type="submit" class="btn btn-primary">Salva</button>
                </form>
            </div>
        </div>
    </div>
@endsection
