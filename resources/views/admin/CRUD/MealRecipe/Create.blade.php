@include('admin.components.header')
@include('admin.components.sidebar')
@include('admin.components.top')

<div id="contents">
    <div class="overlay" id="addMealBoxOvelay">
        <form action="{{ route('meal-recipes.store') }}" method="POST" name="add_recipe" id="frmAddRecipe" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="row sp-btwn">
                        <div class="form-group col-md-4 selectBox">
                            <label for="exampleFormControlSelect1">Meal Box</label>
                            <select class="meal-box-select" id="meal-select">
                                <?php foreach ($mealBoxes as $mealBox) : ?>
                                    <option name="meal_box_id" value="<?= $mealBox['id'] ?>"><?= $mealBox['name'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <strong>Name</strong>
                            <input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{ old('name') }}">
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>
                    </div>
                    <input type="hidden" id="mealBoxID" name="meal_boxes_fk" value="1" class="form-control" placeholder="">

                    <div class="form-group">
                        <label>Accompaniment</label>
                        <input type="text" class="form-control" name="accompaniment" placeholder="Enter accompaniment" value="{{ old('accompaniment') }}">
                        <span class="text-danger">{{ $errors->first('accompaniment') }}</span>
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description" rows="3">{{ old('description') }}</textarea>
                        <span class="text-danger">{{ $errors->first('description') }}</span>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Recipe Image</label>
                            <input type="file" class="form-control-file" name="image">
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Cooking Time</label>
                            <input type="text" class="form-control" name="time" placeholder="Enter Time" value="{{ old('time') }}">
                            <span class="text-danger">{{ $errors->first('time') }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row recipe-ingredients">
                        <div class="form-group col-md-6">
                            <label>Ingredient 1:</label>
                            <input type="text" class="form-control" name="ingredient_name_1" placeholder="Enter Name" <span class="text-danger">{{ $errors->first('ingredient_name_1') }}</span>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Ingredient Image</label>
                            <input type="file" class="form-control-file" name="ingredient_image_1">
                            <span class="text-danger">{{ $errors->first('ingredient_image_1') }}</span>
                        </div>
                    </div>

                    <div class="row recipe-ingredients">
                        <div class="form-group col-md-6">
                            <label>Ingredient 2:</label>
                            <input type="text" class="form-control" name="ingredient_name_2" placeholder="Enter Name" value="{{ old('ingredient_name_2') }}">
                            <span class="text-danger">{{ $errors->first('ingredient_name_2') }}</span>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Ingredient Image</label>
                            <input type="file" class="form-control-file" name="ingredient_image_2">
                            <span class="text-danger">{{ $errors->first('ingredient_image_2') }}</span>
                        </div>
                    </div>

                    <div class="row recipe-ingredients">
                        <div class="form-group col-md-6">
                            <label>Ingredient 3:</label>
                            <input type="text" class="form-control" name="ingredient_name_3" placeholder="Enter Name">
                            <span class="text-danger">{{ $errors->first('ingredient_name_3') }}</span>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Ingredient Image</label>
                            <input type="file" class="form-control-file" name="ingredient_image_3">
                            <span class="text-danger">{{ $errors->first('ingredient_image_3') }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <h4>Nutrition</h4>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group selectBox">
                                <label for="exampleFormControlSelect1">Fat</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="fat_amount" placeholder="Enter Value" value="{{ old('fat_amount') }}">
                        </div>
                    </div>

                </div>
                <div class="col-md-6">

                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group selectBox">
                                <label for="exampleFormControlSelect1">Protein</label>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="protein_amount" placeholder="Enter Value" value="{{ old('protein_amount') }}">
                        </div>
                    </div>

                </div>
                <div class="col-md-6">

                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group selectBox">
                                <label for="exampleFormControlSelect1">Carbohydrates</label>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="carb_amount" placeholder="Enter Value" value="{{ old('carb_amount') }}">
                        </div>
                    </div>

                </div>
                <div class="col-md-6">

                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group selectBox">
                                <label for="exampleFormControlSelect1">Calories</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="calorie_amount" placeholder="Enter Value" value="{{ old('calorie_amount') }}">
                        </div>
                    </div>

                </div>
                <div class="col-md-6">

                </div>
            </div>

            <button class="button" id="btnAddMealBox" type="submit">Add Meal Recipe</button>
            <a href="{{ route('meal-recipes.index') }}" class="button btn-danger">Cancel</a>
        </form>
    </div>

</div>

@include('admin.components.footer')