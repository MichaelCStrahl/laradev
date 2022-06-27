@extends('template.master.master')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <form action="{{ route('course.store') }}" method="post" autocomplete="off">
                    @csrf
                    <div class="form-group">
                        <label for="name">Curso:</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Insira o nome do curso">
                    </div>
                    <div class="form-group">
                        <label for="tutor">Tutor:</label>
                        <input type="text" id="tutor" name="tutor" class="form-control" placeholder="Insira o nome do tutor do curso">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="text" id="email" name="email" class="form-control" placeholder="Insira o seu e-mail">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
