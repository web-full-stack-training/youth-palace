@extends('app')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="row d-flex">
    @foreach($collaboration as $data)
        <div class="col-3 d-flex flex-column justify-content-center align-items-center">
            <img src="{{ $data['path'] }}" alt="">
            <h3>{{ $data['name'] }}</h3>
        </div>
    @endforeach
</div>
@endsection
