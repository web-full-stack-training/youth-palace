@extends('app')
@section('content')
<link rel = "stylesheet" href = "{{asset('css/volunteering.css')}}">
<div class = "volunteer-body">
    <h1 class = "volunteer-header text-center">Volunteering</h1>
<div class="row d-flex">
    @foreach($volunteerings as $vol)
        <div class="col-lg-3 col col-md-4 col-sm-6 d-flex flex-column justify-content-center align-items-center">
          {{--  <img src="{{ $vol->image}}" alt="volunteer" >--}}
           {{-- <img src="{{ $vol['image_path'] }}" alt="">
            <img src="{{ url('storage/volunteering/'.$article->volunteering) }}" alt="" title="" />--}}
            <img src="{{(asset('images/volunteering/img.png'))}}"
                 alt = "volunteer" class="image--cover">
            <h5 class = " caption  text-center ">{{ $vol['full_name'] }}</h5>
        </div>
@endforeach
</div>
</div>
{{--<div class = "volunteer-body">
    <div class ="volunteering">
        <h1 class = "volunteer-header">Volunteering</h1>
        <div class = "row row-cols-4 ">
        @foreach($volunteerings as $vol)
                <div class = "col-lg-3 col col-md-4 col-sm-6 d-flex flex-column justify-content-center align-items-center">
                    <img src="{{(asset('images/volunteering/img.png'))}}"
                         alt = "volunteer" class="image--cover">
                    <div class = "caption">{{$vol['full_name']   }}</div>
                </div>
        @endforeach
        </div>
    </div>
</div>--}}
{{--<div class = "volunteer-body">
    <h1 class = "volunteer-header">Volunteering</h1>
    <div class ="volunteering">
    <div class = "row row-cols-4">
        <div class = "col">
        <img src="{{(asset('images/volunteering/img.png'))}}"
             alt = "volunteer" class="image--cover">
            <div class = "caption">J.Martin</div>
        </div>
        <div class = "col">
            <img src="{{(asset('images/volunteering/img.png'))}}"
                 alt = "volunteer" class="image--cover">
            <div class = "caption">J.Martin</div>
        </div>
        <div class = "col">
            <img src="{{(asset('images/volunteering/img.png'))}}"
                 alt = "volunteer" class="image--cover">
            <div class = "caption">J.Martin</div>
        </div>
        <div class = "col">
            <img src="{{(asset('images/volunteering/img.png'))}}"
                 alt = "volunteer" class="image--cover">
            <div class = "caption">J.Martin</div>
        </div>
    </div>
        //
        <div class = "row row-cols-4">
            <div class = "col">
                <img src="{{(asset('images/volunteering/img.png'))}}"
                     alt = "volunteer" class="image--cover">
                <div class = "caption">J.Martin</div>
            </div>
            <div class = "col">
                <img src="{{(asset('images/volunteering/img.png'))}}"
                     alt = "volunteer" class="image--cover">
                <div class = "caption">J.Martin</div>
            </div>
            <div class = "col">
                <img src="{{(asset('images/volunteering/img.png'))}}"
                     alt = "volunteer" class="image--cover">
                <div class = "caption">J.Martin</div>
            </div>
            <div class = "col">
                <img src="{{(asset('images/volunteering/img.png'))}}"
                     alt = "volunteer" class="image--cover">
                <div class = "caption">J.Martin</div>
            </div>
        </div>
        //
        <div class = "row row-cols-4">
            <div class = "col">
                <img src="{{(asset('images/volunteering/img.png'))}}"
                     alt = "volunteer" class="image--cover">
                <div class = "caption">J.Martin</div>
            </div>
            <div class = "col">
                <img src="{{(asset('images/volunteering/img.png'))}}"
                     alt = "volunteer" class="image--cover">
                <div class = "caption">J.Martin</div>
            </div>
            <div class = "col">
                <img src="{{(asset('images/volunteering/img.png'))}}"
                     alt = "volunteer" class="image--cover">
                <div class = "caption">J.Martin</div>
            </div>
            <div class = "col">
                <img src="{{(asset('images/volunteering/img.png'))}}"
                     alt = "volunteer" class="image--cover">
                <div class = "caption">J.Martin</div>
            </div>
        </div>
        //
    </div>
</div>--}}
@endsection
