@extends('members.layout')
@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h4 style="color: #DAA520;">𝙈𝙞𝙚𝙢𝙗𝙧𝙤𝙨 𝘼𝙘𝙩𝙞𝙫𝙤𝙨 </h4>
            </div>
            <div class="pull-right">
                <a style="margin: 4%;" class="btn btn-warning" href="{{ route('members.create') }}"> Add new Member</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-stripped">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th width="280px">OPERATION</th>
        </tr>
        @foreach ($members as $member)
        <tr>
            <td>{{ $member->id }}</td>
            <td>{{ $member->name }}</td>
            <td>{{ $member->Age }}</td>
            <td>
                <form action="{{ route('members.destroy',$member->id) }}" method="POST">
   
                    <a class="btn btn-success" href="{{ route('members.show',$member->id) }}">Info</a>
    
                    <a class="btn btn-warning" href="{{ route('members.edit',$member->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $members->links() !!}


@endsection
