@extends('members.layout')
  
@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>𝘼𝙙𝙙 𝙉𝙚𝙬 𝙈𝙚𝙢𝙗𝙚𝙧</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-danger" href="{{ route('members.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>ALERTA </strong>Hay algunos problemas con tu formulario<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form  style="margin-top: 5%;" action="{{ route('members.store') }}" method="POST">
    @csrf
  
    <!-- Formulario agregando los old values para que en caso de error recuerde el value previo -->
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name</strong>
                <input value="{{old('name')}}" type="text" name="name" class="form-control" placeholder="Insert your name here ...">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
            <div class="form-group">
                <strong>Age</strong>
               <input value="{{old('Age')}}" style="width: 10%;" type="number" class="form-control" name="Age" placeholder="How old are u ?">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pet</strong><br>

                <select class="form-control" aria-label="Default select example" name="pet" id="pets">
                    <option value="Dogo">Dogo</option>
                    <option value="Cat">Cat</option>
                    <option value="Reptile/Bird">Snake/Bird</option>
                    <option value="Other">Other</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Birth Date</strong>
                <input value="{{old('birthdate')}}" type="string" name="birthdate" class="form-control" placeholder="YY-MM-DD" >
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alive</strong><br>
                <input  @if(old('alive')=='true')) checked @endif type="checkbox" name="alive" class="form-check" value='true'>YES
                <input @if(old('alive')=='false')) checked @endif type="checkbox" name="alive" class="form-check" value='false'>NO

            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-warning">Submit</button>
        </div>
    </div>
   
</form>
@endsection