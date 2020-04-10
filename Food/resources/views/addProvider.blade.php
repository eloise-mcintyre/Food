@extends('layout')

@section('content')
<div>
    <div class="container" style="width: 50%; padding-top: 20px">
        <form method="POST" action="{{ route('foodProviders.store') }}">
            @csrf
            <div class="form-group">
                <label>Name of new provider</label>
                <input class="form-control" placeholder="Enter name of food provider" type="text" name="name">
            </div>

            <div class="form-group">
                <label>Food types available</label>
                <select class="form-control">
                    <option>Fruit and Vegetables</option>
                    <option>Meat</option>
                    <option>Alcohol</option>
                    <option>Pantry</option>
                    <option>Dried foods</option>
                </select>
            </div>

            <div class="form-group">
                <label>Delivery Areas Available</label>
                <select class="form-control">
                    <option>Nationally</option>
                    <option>All North Island</option>
                    <option>All South Island</option>
                    <option>Auckland</option>
                    <option>Manukau</option>
                </select>
            </div>

            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li style="color: red">{{ $error }}</li>
                    @endforeach
                </ul>    
            @endif
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>


@endSection