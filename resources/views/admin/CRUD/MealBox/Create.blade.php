
@include('admin.components.header')
@include('admin.components.sidebar')
<div class="overlay" id="addMealBoxOvelay">
        <form action="{{ route('meal-boxes.store') }}" method="POST" name="add_meal_box" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <strong>Name</strong>
                <input type="text" name="name" class="form-control" placeholder="Enter Name">
                <span class="text-danger">{{ $errors->first('name') }}</span>
            </div>
           
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                <span class="text-danger">{{ $errors->first('description') }}</span>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Price</label>
                <input type="text" class="form-control" name="price" id="exampleFormControlInput1" placeholder="Enter Price">
                <span class="text-danger">{{ $errors->first('price') }}</span>
            </div>

            <!-- <div class="form-group">
                <label for="exampleFormControlInput1">Image</label>
                <input type="text" class="form-control" name="image" id="exampleFormControlInput2" placeholder="Enter Image">
                <span class="text-danger">{{ $errors->first('image') }}</span>
            </div> -->

            <div class="form-group">
                <label for="exampleFormControlFile1">Image</label>
                <input type="file" class="form-control-file" name="image"  id="exampleFormControlFile1">
                <span class="text-danger">{{ $errors->first('image') }}</span>
            </div>
            <button class="button" id="btnAddMealBox" type="submit">Add Meal Box</button>
            <a href="{{ route('meal-boxes.index') }}" class="btn btn-danger">Cancel</a> 
        </form>

        <textarea class="description" name="description"></textarea>
<textarea class="tiny"></textarea>
    </div>

    @include('admin.components.footer')