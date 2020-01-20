@include('admin.components.header')
@include('admin.components.sidebar')
@include('admin.components.top')

<div id="contents">



    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <form action="/admin/meal-boxes/<?= $mealBox['id'] ?>" method="POST" name="update_box" class="frm-edit-box" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Title</strong>
                    <input type="text" name="name" class="form-control" placeholder="Enter Name" value="<?= $mealBox['name'] ?>">
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Meal Box Price</strong>
                    <input type="text" name="price" class="form-control" placeholder="Enter Price" value="<?= $mealBox['price'] ?>">
                    <span class="text-danger">{{ $errors->first('price') }}</span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Description</strong>
                    <textarea class="form-control" col="4" name="description" value<?= $mealBox['description'] ?>placeholder="Enter Description"><?= $mealBox['description'] ?></textarea>
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                </div>
            </div>
            <div class="col-md-12">
                <img src="/uploads/boxes/<?= $mealBox['image'] ?>">
                <div class="form-group">
                    <label for="replaceFile">Replace Image</label>
                    <input type="file" class="form-control-file" name="image" id="replaceFile">
                    <span class="text-danger">{{ $errors->first('image') }}</span>
                </div>
            </div>
            <div class="col-md-12 buttons">
                <button type="submit" class="button btn-primary">Update</button>
                <a href="{{ route('meal-boxes.index') }}" class="button btn-danger">Cancel</a>
            </div>
        </div>

    </form>
</div>
@include('admin.components.footer')