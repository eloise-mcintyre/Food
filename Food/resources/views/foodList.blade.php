@extends('layout')

@section('content')
<div>

    <h1 style="padding: 20px">HOME PAGE</h1>
    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Provider Name</th>
                <th scope="col">Food Types available</th>
                <th scope="col">Delivery areas</th>
                <th scope="col">Delete?</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($allProviders as $provider)
                    <tr>
                        <th scope="row">{{ $provider->name }}</th>
                        <td style="text-align: center">🍎 🥩 🍰</td>
                        <td>TBC</td>
                        <td>
                            <form method="POST", action="{{ route('foodProviders.destroy', ['foodProvider' => $provider->id ]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>
          
    {{-- <ul class="list-group">
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
    </ul> --}}

</div>


@endsection