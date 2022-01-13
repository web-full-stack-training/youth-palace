@extends('app')
@section('content')
<link rel = "stylesheet" href = "{{asset('css/volunteering.css')}}">
<div class = "volunteer-body">
    <h1 class = "volunteer-header text-center">Volunteering</h1>
<div class="row d-flex">
    @foreach($volunteerings as $vol)
        <div class="col-lg-3 col col-md-4 col-sm-6 d-flex flex-column justify-content-center align-items-center">
            <img src="{{ $vol['image_path'] }}"
                 alt = "volunteer"
                 class="image--cover rounded-circle"
                 width="140px"
                 height="140px">
            <h5 class = " caption  text-center ">{{ $vol['full_name'] }}</h5>
        </div>
@endforeach
</div>
</div>
@endsection
