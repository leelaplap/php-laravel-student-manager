@extends('home')

@section('content')

<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Phone</th>
        <th scope="col"></th>
        <th><a href="{{route('student.getAdd')}}">Add</a></th>
    </tr>
    </thead>
    <tbody>
    @foreach($student as $key => $value)
    <tr>
        <th scope="row">{{++$key}}</th>
        <td>{{$value->name}}</td>
        <td>{{$value->phone}}</td>
        <td><a href="{{route('student.delete',$value->id)}}">delete</a></td>
        <td><a href="{{route('student.getEdit',$value->id)}}">edit</a></td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection
