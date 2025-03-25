{{--Extende o html que for chamado--}}
@extends('layout')

@section('styled')
<link rel="stylesheet" href="home.css">
@endsection

{{--Chama o yield "Lugar onde serar renderizado pelo nome dado a ele"--}}
@section('content')
<h2>Home</h2>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti suscipit autem iste minus? Voluptate minima itaque voluptatum sapiente natus. Repudiandae quo, sed ut eaque enim dolorem nostrum quibusdam inventore rerum.</p>
@endsection