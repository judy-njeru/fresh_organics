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

    @if(session('message'))
    <p>{{session('message')}}</p>
    @endif

    <form action="/admin/meal-recipes/<?= $mealRecipe['id'] ?>" method="POST" name="update_recipe" class="frm-edit-box" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Recipe Name</strong>
                    <input type="text" name="name" class="form-control" placeholder="Enter Name" value="<?= $mealRecipe['name'] ?>">
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>
            </div>

            <input type="hidden" name="meal_box_fk" value="<?= $mealRecipe['meal_boxes_fk'] ?>">

            <div class="col-md-12">
                <div class="form-group">
                    <strong>Accompaniment</strong>
                    <input type="text" name="accompaniment" class="form-control" placeholder="Enter Accompaniment" value="<?= $mealRecipe['accompaniment'] ?>">
                    <span class="text-danger">{{ $errors->first('accompaniment') }}</span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Description</strong>
                    <textarea class="form-control" col="4" name="description" value<?= $mealRecipe['description'] ?>placeholder="Enter Description"><?= $mealRecipe['description'] ?></textarea>
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <strong>Cooking Time</strong>
                    <input type="text" name="time" class="form-control" placeholder="Enter Time" value="<?= $mealRecipe['time'] ?>">
                    <span class="text-danger">{{ $errors->first('time') }}</span>
                </div>
            </div>
            <div class="col-md-12">
                <img src="/uploads/recipes/<?= $mealRecipe['image'] ?>">
                <div class="form-group">
                    <label for="exampleFormControlFile1">Replace Image</label>
                    <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
                    <span class="text-danger">{{ $errors->first('image') }}</span>
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="button btn-primary">Update</button>
                <a href="{{ route('meal-recipes.index') }}" class="button btn-danger">Cancel</a>
            </div>
        </div>

    </form>
</div>
@include('admin.components.footer')