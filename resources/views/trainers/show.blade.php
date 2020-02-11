@extends('layout.app')

@section('titulo', 'Trainer')

@section('content')
<img style="height: 250px; width: 250px; background-color: #EFEFEF; margin: 20px"
class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$trainer->avatar}}" alt="">
<div class="text-center">
    <h5 class="card-title">{{$trainer->name}}</h5>
    <p>Locas tu mama esse vaot sloc amslmadsñlmasdlmsalñmas Locas tu mama esse vaot sloc amslmadsñlmasdlmsalñmasLocas tu
        mama esse vaot sloc amslmadsñlmasdlmsalñmasLocas tu mama esse vaot sloc amslmadsñlmasdlmsalñmasLocas tu mama
        esse vaot sloc amslmadsñlmasdlmsalñmasLocas tu mama esse vaot sloc amslmadsñlmasdlmsalñmas</p>
</div>
@endsection