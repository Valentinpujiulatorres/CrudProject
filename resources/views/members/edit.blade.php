@extends('members.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Member</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('members.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('members.update',$member->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name</strong>
                <input type="text" name="name" class="form-control" placeholder="Insert your name here ...">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
            <div class="form-group">
                <strong>Age</strong>
               <input style="width: 10%;" type="number" class="form-control" name="Age" placeholder="How old are u ?">
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
                <input type="string" name="birthdate" class="form-control" placeholder="YY-MM-DD" >
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alive</strong><br>
                <input  type="checkbox" name="alive" class="form-check" value='1'>YES
                <input type="checkbox" name="alive" class="form-check" value='0'>NO

            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-warning">Submit</button>
        </div>
    </div>
   
    </form>
@endsection