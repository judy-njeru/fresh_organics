
@include('admin.components.header')
@include('admin.components.sidebar')

<div id="contents">
  @include('admin.components.top')
<div class="overlay" id="addMealBoxOvelay">
        <form action="{{ route('meal-recipes.store') }}" method="POST" name="add_recipe" id="frmAddRecipe" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="row sp-btwn">
                        <div class="form-group col-md-4 selectBox">
                            <label for="exampleFormControlSelect1">Meal Box</label>
                            <select class="meal-box-select" id="exampleFormControlSelect1">
                                <?php foreach($mealBoxes as $mealBox): ?>
                                    <option name="meal_box_id" value="<?= $mealBox['id'] ?>"><?= $mealBox['name'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <strong>Name</strong>
                            <input type="text" name="name" class="form-control" placeholder="Enter Name">
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>
                    </div>
                    <input type="hidden" id="mealBoxID" name="meal_boxes_fk" value="1" class="form-control" placeholder="">

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

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlFile1">Recipe Image</label>
                            <input type="file" class="form-control-file" name="image"  id="exampleFormControlFile1">
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlInput1">Cooking Time</label>
                            <input type="text" class="form-control" name="time" id="exampleFormControlInput1" placeholder="Enter Time">
                            <span class="text-danger">{{ $errors->first('time') }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row recipe-ingredients">
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlInput1">Ingredient 1:</label>
                            <input type="text" class="form-control" name="ingredient_name_1"  placeholder="Enter Name">
                            <span class="text-danger">{{ $errors->first('ingredient_name_1') }}</span>
                        </div>
        
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlFile1">Ingredient Image</label>
                            <input type="file" class="form-control-file" name="ingredient_image_1" >
                            <span class="text-danger">{{ $errors->first('ingredient_image_1') }}</span>
                        </div>
                    </div>

                    <div class="row recipe-ingredients">
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlInput1">Ingredient 2:</label>
                            <input type="text" class="form-control" name="ingredient_name_2"  placeholder="Enter Name">
                            <span class="text-danger">{{ $errors->first('ingredient_name_2') }}</span>
                        </div>
            
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlFile1">Ingredient Image</label>
                            <input type="file" class="form-control-file" name="ingredient_image_2" >
                            <span class="text-danger">{{ $errors->first('ingredient_image_2') }}</span>
                        </div>
                    </div>

                    <div class="row recipe-ingredients">
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlInput1">Ingredient 3:</label>
                            <input type="text" class="form-control" name="ingredient_name_3"  placeholder="Enter Name">
                            <span class="text-danger">{{ $errors->first('ingredient_name_3') }}</span>
                        </div>
            
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlFile1">Ingredient Image</label>
                            <input type="file" class="form-control-file" name="ingredient_image_3" >
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
                            <input type="text" class="form-control" name="fat_amount"  placeholder="Enter Value">
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
                            <input type="text" class="form-control" name="protein_amount"  placeholder="Enter Value">
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
                            <input type="text" class="form-control" name="carb_amount"  placeholder="Enter Value">
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
                            <input type="text" class="form-control" name="calorie_amount"  placeholder="Enter Value">
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-6">
                        
                </div>
            </div>

           
            
            

         

            
            <button class="button" id="btnAddMealBox" type="submit">Add Meal Box</button>
            <a href="{{ route('meal-recipes.index') }}" class="btn btn-danger">Cancel</a> 
        </form>
    </div>

    </div>

@include('admin.components.footer')
