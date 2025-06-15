{{-- Extende o html que for chamado --}}
@extends('layout')

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
@endsection

@section('styled')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
@endsection

{{-- Chama o yield "Lugar onde serar renderizado pelo nome dado a ele" --}}
@section('content')
    <h2>Home</h2>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti suscipit autem iste minus? Voluptate minima itaque
        voluptatum sapiente natus. Repudiandae quo, sed ut eaque enim dolorem nostrum quibusdam inventore rerum.</p>
    <button class="btn btn-warning btn-sm">Clicar</button>
    <div class="alert alert-primary" role="alert">
        A simple primary alert—check it out!
    </div>
@endsection
