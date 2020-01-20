@include('admin.components.header')
@include('admin.components.sidebar')
@include('admin.components.top')

<div id="contents">

  <a href="{{ route('meal-recipes.create') }}" class="button" id="AddMealBox">Add New Recipe</a>
  @if(session('message'))
  <p class="message">{{session('message')}}</p>
  @endif

  <section class="statistics">
    <div class="container-fluid">
      <div class="row">
        <?php foreach ($mealRecipes as $mealBox) : ?>
          <div class="col-md-4 meal-view">
            <div class="box" data-attr="<?= $mealBox['id'] ?>" style="background-image:url('/uploads/recipes/<?= $mealBox['image'] ?>')">
              <div class="overlay"></div>
              <h4><?= $mealBox['name'] ?></h4>
              <div class="buttons">
                <a class="button" href="/admin/meal-recipes/<?= $mealBox['id'] ?>/edit ">Edit Recipe</a>

                <!-- <a class="button">Delete Box</a> -->
                <form action="/admin/meal-recipes/<?= $mealBox['id'] ?>" method="post" id="frmDeleteRecipe">
                  @csrf
                  @method('DELETE')
                  <button class="button btn-danger" type="submit">Delete</button>
                </form>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </section>
</div>
@include('admin.components.footer')