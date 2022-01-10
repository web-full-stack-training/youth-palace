<link rel="stylesheet" href="{{ asset('css/admin/about.css') }}">
<link rel="stylesheet" href="{{ asset('css/admin/special-programs.css') }}">

<div class="special-form about-info-form-card">

    <form action="{{ $action_url }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="specialPrograms-id" value="{{ (parse_url($action_url)['path'] === '/admin/special-programs/edit') ? $specialProgramData->id : '' }}">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ (parse_url($action_url)['path'] === '/admin/special-programs/edit') ? $specialProgramData->title : '' }}">
        </div>
        <div class="form-group mt-3">
            <label for="description">Description</label>
            <textarea id="description" name="description" class="form-control special-description " rows="7" >{{ (parse_url($action_url)['path'] === '/admin/special-programs/edit') ? $specialProgramData->description : '' }}</textarea>
        </div>

{{--$action_url i dzevy poxel--}}

        @if($action_url === 'http://youth-palace.loc/admin/special-programs/edit')
           <div class="data-photos d-flex w-25 mt-3">
                @if($specialProgramData['specialProgramImages'])
                    @foreach($specialProgramData['specialProgramImages'] as $dataImage)
                       <div class="rollover">
                           <img
                            src="{{ $dataImage['image_path'] }}"
                            class=" shadow-1-strong rounded special-images "
                            alt="Special Programs"
                        />
                           <i
                               class="far fa-times fa-5x delete-special-program-image-icon"
                               data-image-id="{{ $dataImage['id'] }}"
                           ></i>
                       </div>
                    @endforeach
                @endif
            </div>

        @endif


        <input type="file" class="form-control mt-3" name="images[]" multiple>
        <button type="submit" class="btn btn-primary rounded-3 mt-3">{{ (parse_url($action_url)['path'] === '/admin/special-programs/edit') ? 'edit' : 'creat' }}</button>
    </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('js/helpers.js') }}"></script>
<script src="{{ asset('js/special-program.js') }}"></script>


