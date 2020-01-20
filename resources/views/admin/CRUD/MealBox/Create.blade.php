@include('admin.components.header')
@include('admin.components.sidebar')
@include('admin.components.top')

<div id="contents">
    <div class="overlay" id="addMealBoxOvelay">
        <form action="{{ route('meal-boxes.store') }}" method="POST" name="add_meal_box" enctype="multipart/form-data" id="frmAddMealBox">
            <!-- enctypee="multipart/form-data":-- allow  files to be sent through POST method e.g upload -->
            @csrf
            <div class="form-group">
                <strong>Name</strong>
                <input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{ old('name') }}">
                <span class="text-danger">{{ $errors->first('name') }}</span>
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control tiny" name="description" value="{{ old('description') }}"></textarea>
                <span class="text-danger">{{ $errors->first('description') }}</span>
            </div>

            <div class="form-group">
                <label>Price</label>
                <input type="number" class="form-control" name="price" placeholder="Enter Price" value="{{ old('price') }}" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" required autocomplete="zip">
                <span class="text-danger">{{ $errors->first('price') }}</span>
            </div>

            <div class="form-group">
                <label>Image</label>
                <input type="file" class="form-control-file" name="image" value="{{ old('image') }}">
                <span class="text-danger">{{ $errors->first('image') }}</span>
            </div>
            <div class="col-md-12 buttons">
                <button class="button" id="btnAddMealBox" type="submit">Add Meal Box</button>
                <a href="{{ route('meal-boxes.index') }}" class="button btn-danger">Cancel</a>
            </div>
        </form>


    </div>
</div>

@include('admin.components.footer')