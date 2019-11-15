
@include('admin.components.header')
@include('admin.components.sidebar')

<div id="contents">
  @include('admin.components.top')
<div class="overlay" id="addMealBoxOvelay">
        <form action="{{ route('meal-recipes.store') }}" method="POST" name="add_recipe" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <strong>Name</strong>
                <input type="text" name="name" class="form-control" placeholder="Enter Name">
                <span class="text-danger">{{ $errors->first('name') }}</span>
            </div>
            
            <input type="hidden" id="mealBoxID" name="meal_boxes_fk" value="1" class="form-control" placeholder="">

            <div class="form-group">
                <label for="exampleFormControlSelect1">Example select</label>
                <select class="meal-box-select" id="exampleFormControlSelect1">
                    <?php foreach($mealBoxes as $mealBox): ?>
                        <option name="meal_box_id" value="<?= $mealBox['id'] ?>"><?= $mealBox['name'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Accompaniment</label>
                <input type="text" class="form-control" name="accompaniment" id="exampleFormControlInput1" placeholder="Enter accompaniment">
                <span class="text-danger">{{ $errors->first('accompaniment') }}</span>
            </div>
           
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                <span class="text-danger">{{ $errors->first('description') }}</span>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Cooking Time</label>
                <input type="text" class="form-control" name="time" id="exampleFormControlInput1" placeholder="Enter Time">
                <span class="text-danger">{{ $errors->first('time') }}</span>
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Image</label>
                <input type="file" class="form-control-file" name="image"  id="exampleFormControlFile1">
                <span class="text-danger">{{ $errors->first('image') }}</span>
            </div>
            <button class="button" id="btnAddMealBox" type="submit">Add Meal Box</button>
            <a href="{{ route('meal-recipes.index') }}" class="btn btn-danger">Cancel</a> 
        </form>
    </div>

    </div>

@include('admin.components.footer')
