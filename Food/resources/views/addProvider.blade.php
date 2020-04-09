@extends('layout')

@section('content')

<div style="padding: 20px">
    <form method="POST" action="{{ route('foodProviders.store') }}">
        @csrf
        <div class="form-group">
            <label>Name of new provider</label>
            <input class="form-control" placeholder="Enter name of food provider" type="text" name="name">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endSection