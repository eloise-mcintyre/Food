@extends('layout')

@section('content')

<div style="padding: 20px">
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Name of new provider</label>
            <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name of food provider">
            
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Contact Number</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contact">
            <small id="emailHelp" class="form-text text-muted">We'll never share your contact details with anyone else.</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endSection