<link rel="stylesheet" href="{{ asset('css/admin/about.css') }}">
<link rel="stylesheet" href="{{ asset('css/admin/special-programs.css') }}">

<div class="special-form about-info-form-card">

    <form action="{{ $action_url }}" method="post" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="special_programs_id" value="{{ (parse_url($action_url)['path'] === '/admin/special-programs/edit') ? $specialProgramData->id : '' }}">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ (parse_url($action_url)['path'] === '/admin/special-programs/edit') ? $specialProgramData->title : '' }}" >
            <small class="text-danger">{{ $errors->first('title') }}</small >
        </div>

        <div class="form-group mt-3">
            <label for="description">Description</label>
            <textarea id="description" name="description" class="form-control special-description " rows="7" >{{ (parse_url($action_url)['path'] === '/admin/special-programs/edit') ? $specialProgramData->description : '' }}</textarea>
            <small class="text-danger">{{ $errors->first('description') }}</small >
        </div>
                @if($action_url === env('APP_URL').'/admin/special-programs/edit')
                   <div class="data-photos d-flex w-25 mt-3">
                        @if($specialProgramData['specialProgramImages'])
                            @foreach($specialProgramData['specialProgramImages'] as $dataImage)
                               <div class="rollover">
                                   <img
                                    src="{{ $dataImage['image_path'] }}"
                                    class=" shadow-1-strong rounded special-images "
                                    alt="Special Programs"
                                   />
                                   <img src="{{asset('images/icons/close-modal.png')}}" alt="icon-for-delete"
                                        class="delete-special-program-image-icon icon-for-delete"
                                        data-image-id = {{ $dataImage['id'] }}
                                   >
                               </div>
                            @endforeach
                        @endif
                    </div>
        {{--modal for delet photo in edit--}}
            <div class="modal modal-delete-image" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Delete</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p class="you-sure-to-delete">Are You Sure You Want To Delete This Photo.</p>
                            <p class="deleted-message"> Photo Is Deleted.</p>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary delete-button-for-image">Delete</button>
                            <button type="button" class="btn btn-secondary close-delete-image-button" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
 {{--end modal for delet photo in edit--}}
        @endif


        <input type="file" class="form-control mt-3" name="images[]" multiple>
        <small class="text-danger">{{ $errors->first('images') }}</small ><br>
        <button type="submit" class="btn btn-primary rounded-3 mt-3">{{ (parse_url($action_url)['path'] === '/admin/special-programs/edit') ? 'edit' : 'creat' }}</button>
    </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('js/helpers.js') }}"></script>
<script src="{{ asset('js/special-program.js') }}"></script>
<script src="{{asset('js/admin/special-programs/edit-special-program.js')}}"></script>


