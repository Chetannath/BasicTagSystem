@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <?php
        //dd($company);
      ?>
      @foreach ($company as $compan)
        <label for="title">{{$compan->name}}</label>
        <label>{{$compan->email}}</label>
        <label>{{$compan->logo}}</label>
        <label>{{$compan->website}}</label>
        <a href="{{route('Cget')}}" class="btn btn-success">Create</a>
        <a href="{{ route('Cupdate',$compan->id)}}" class="btn btn-success">Update</a>
        <button type="submit" class="btn btn-primary">Delete</button></br></br>
      @endforeach;
    </div>
</div>
@endsection
