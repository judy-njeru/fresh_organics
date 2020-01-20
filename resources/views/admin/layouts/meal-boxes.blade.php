@include('admin.components.header')
@include('admin.components.sidebar')
@include('admin.components.top')

<div id="contents">
  <a href="{{ route('meal-boxes.create') }}" class="button" id="AddMealBox">Add Meal Box</a>
  @if(session('message'))
  <p class="message">{{session('message')}}</p>
  @endif

  <section class="statistics">
    <div class="container-fluid">
      <div class="row">
        <?php foreach ($mealBoxes as $mealBox) : ?>
          <div class="col-md-4 meal-view">
            <div class="box" style="background-image:url('/uploads/boxes/<?= $mealBox['image'] ?>')">
              <div class="overlay"></div>
              <h4><?= $mealBox['name'] ?></h4>
              <div class="buttons">
                <a class="button" href="/admin/meal-boxes/<?= $mealBox['id'] ?>/edit ">Edit Box</a>

                <!-- <a class="button">Delete Box</a> -->
                <form action="/admin/meal-boxes/<?= $mealBox['id'] ?>')}}" method="post" id="frmDeleteMealBox">
                  @csrf
                  @method('DELETE')
                  <button class="button  btn-danger" type="submit">Delete</button>
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