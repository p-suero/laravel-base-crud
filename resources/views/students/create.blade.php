@extends('layouts.app')
@section('page-title', "Creazione studente")
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 m-auto">
                <h1 class="mt-4 mb-3 text-center">Inserisci un nuovo studente</h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="" action="{{route("students.store")}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="name" class="form-control" value="{{old("name")}}" id="nome">
                        @error('name')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="cognome">Cognome</label>
                        <input type="text" name="lastname" class="form-control" value="{{old("lastname")}}" id="cognome">
                        @error('lastname')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="matricola">Matricola</label>
                        <input type="number" name="code" class="form-control" value="{{old("code")}}" id="Matricola">
                        @error('code')
                            <small class='text-danger'>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" value="{{old("email")}}" id="email">
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
