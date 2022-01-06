<link rel="stylesheet" href="{{ asset('css/admin/volunteering.css') }}">
<form class="form-v " action="{{ $action_url }}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="full_name" class="form-volunteer">Full Name</label>
                    <input type="text" class="form-control" id="full_name" placeholder=" ">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="exampleFormControlInput1" class="form-volunteer">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="form-volunteer">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                    <label for="choose" class="form-volunteer">Choose file</label>
                    <input type="file" class="form-control" id="choose">
                </div>
                <button class="btn btn-outline-success button-volunteer" type="submit">Submit</button>
            </div>
        </div>
        </div>
    </form>
