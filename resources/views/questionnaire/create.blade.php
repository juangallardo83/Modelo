@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear nuevo cuestionario</div>

                <div class="card-body">
                    <form action="/questionnaires" method="post">

                        @csrf

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input name="title" type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Tipo de cuestionario">
                            <small id="titleHelp" class="form-text text-muted">Ingresa el cuestionario asociado al tipo de empresa.</small>

                            @error('title')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="purpose">Proposito</label>
                            <input name="purpose" type="text" class="form-control" id="purpose" aria-describedby="purposeHelp" placeholder="Cual es el propósito">
                            <small id="purposeHelp" class="form-text text-muted">Ingresa el propósito</small>

                            @error('purpose')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div> 

                        <button type="submit" class="btn btn-primary">Crear Cuestionario</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection