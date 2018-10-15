@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <form method="post" action="{{route('Ccreate')}}">
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">Company Name : </label>
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
        <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
@endsection
