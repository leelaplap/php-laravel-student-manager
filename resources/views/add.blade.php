@extends('home')
@section('content')
    <form method="post" action="{{route('student.add')}}">
        @csrf
        <div class="form-group">
            <label >Name</label>
            <input type="text" class="form-control" name="name"  placeholder="Enter name">
        </div>
        <div class="form-group">
            <label >Phone</label>
            <input type="text" class="form-control" name="phone" placeholder="Enter Phone">
        </div>

        <button type="submit" class="btn btn-primary">Add</button>
    </form>
@endsection
