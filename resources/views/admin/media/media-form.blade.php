<link rel="stylesheet" href="{{ asset('css/admin/media.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<div class="media-info-form-card">
    <form action="{{ $action_url }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="description">Description</label>
            <textarea id="description" name="description" class="form-control" rows="7"></textarea>
        </div>
        <input type="file" class="form-control mt-3" name="video">
        <button type="submit" class="btn btn-primary rounded-3 mt-3">Create</button>
    </form>
</div>
