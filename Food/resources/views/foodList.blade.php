@extends('layout')

@section('content')
<div>

    <h1 style="padding: 20px">HOME PAGE</h1>

    <ul class="list-group">
    @forelse ($allProviders as $provider)
        <li 
            class="list-group-item">

            {{ $provider->name }}
            <form method="POST", action="{{ route('foodProviders.destroy', ['foodProvider' => $provider->id ]) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>

        </li>
        @empty
        <li class="list-group-item">No Items Yet!</li>

    @endforelse
    </ul>

</div>


@endsection