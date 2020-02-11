@extends('layout.app')

@section('titulo','Trainers')

@section('content')
  <form action="/trainers" method="post" class="form-group" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="name">Nombre</label>
      <input type="text" name="name" id="" class="form-control">
    </div>

    <div class="form-group">
      <label for="avatar">Avatar</label>
      <input type="file" name="avatar" id="" >
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
@endsection





<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
      <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</body>
</html>
-->