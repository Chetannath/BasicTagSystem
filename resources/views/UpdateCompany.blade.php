@extends('layouts.app')

@section('content')

@foreach ($company as $compan)
  <label for="title">{{$compan->name}}</label>
  <label>{{$compan->email}}</label>
  <label>{{$compan->logo}}</label>
  <label>{{$compan->website}}</label>
  <a href="{{route('Cget')}}" class="btn btn-success">Create</a>
  <a href="{{ route('Cupdate',$compan->id)}}" class="btn btn-success">Update</a>
  <button type="submit" class="btn btn-primary">Delete</button></br></br>
@endforeach;


<div class="container">
    <div class="row">
    <form method="post" action="{{route('Ccreate')}}">
      <input type="hidden" value="{{csrf_token()}}" name="_token" />
      @foreach ($company as $compan)
        <div class="form-group">
            <label for="title">Company Name : </label>
            @if
              <input type="text" class="form-control" name="name"/>
            @endif
            <input type="text" class="form-control" name="name"/>
        </div>
        <div class="form-group">
            <label for="description">Company Email : </label>
            <input type="text" class="form-control" name="Email"></textarea>
        </div>
        <div class="form-group">
            <label for="description">Company Logo : </label>
            <input type="file" class="form-control" name="logo"></textarea>
        </div>
        <div class="form-group">
            <label for="description">Company Website : </label>
            <input type="text" class="form-control" name="web"></textarea>
        </div>
      @endforeach
        <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
@endsection
