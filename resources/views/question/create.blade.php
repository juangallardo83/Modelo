@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">Crea una pregunta</div>

                <div class="card-body">
                    <form action="/questionnaires/{{ $questionnaire->id }}/questions" method="post">

                        @csrf

                        <div class="form-group">
                            <label for="question">Pregunta</label>
                            <input name="question[question]" type="text" class="form-control"
                                   value="{{ old('question.question') }}"
                                   id="question" aria-describedby="questionHelp" placeholder="Ingresa pregunta de seguridad">
                            <small id="questionHelp" class="form-text text-muted">Pregunta</small>

                            @error('question.question')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <fieldset>
                                <legend>Alternativas</legend>
                                <small id="choicesHelp" class="form-text text-muted">Ingrese alternativas a la pregunta.</small>

                                <div>
                                    <div class="form-group">
                                        <label for="answer1">Respuesta 1</label>
                                        <input name="answers[][answer]" type="text"
                                               value="{{ old('answers.0.answer') }}"
                                               class="form-control" id="answer1" aria-describedby="choicesHelp" placeholder="Alternativa 1">

                                        @error('answers.0.answer')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div>
                                    <div class="form-group">
                                        <label for="answer2">Respuesta 2</label>
                                        <input name="answers[][answer]" type="text"
                                               value="{{ old('answers.1.answer') }}"
                                               class="form-control" id="answer2" aria-describedby="choicesHelp" placeholder="Alternativa 2">

                                        @error('answers.1.answer')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div>
                                    <div class="form-group">
                                        <label for="answer3">Respuesta 3</label>
                                        <input name="answers[][answer]" type="text"
                                               value="{{ old('answers.2.answer') }}"
                                               class="form-control" id="answer3" aria-describedby="choicesHelp" placeholder="Alternativa 3">

                                        @error('answers.2.answer')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div>
                                    <div class="form-group">
                                        <label for="answer4">Respuesta 4</label>
                                        <input name="answers[][answer]" type="text"
                                               value="{{ old('answers.3.answer') }}"
                                               class="form-control" id="answer4" aria-describedby="choicesHelp" placeholder="Alternativa 4">

                                        @error('answers.3.answer')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                            </fieldset>
                        </div>
                      
 
                        <button type="submit" class="btn btn-primary">Agregar</button>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection