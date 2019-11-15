<?php

namespace App\Http\Controllers\Admin;
// use File;

use App\MealBox;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MealBoxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mealBoxes = MealBox::all();
        return view('admin.layouts.meal-boxes', ['mealBoxes' => $mealBoxes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.CRUD.MealBox.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            // 'image' => 'required'
        ]);
        $article = new MealBox();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = str_slug($request->name).'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/boxes');
            $imagePath = $destinationPath. "/".  $name;
            $image->move($destinationPath, $name);
            $article->image = $name;
          }

          $article->name = $request->get('name');
            $article->description = $request->get('description');
            // $article->image = str_slug($request->get('image'));
            $article->price = $request->get('price');

            $article->save();
   
        // MealBox::create($request->all());
        // Session::flash('error', 'Some thing is wrong. Please try again');
        // return view('admin.meal-boxes');
        // return Redirect::to('admin/meal-boxes')
        return redirect()->route("meal-boxes.index")->with('message','Great! MealBox created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MealBox  $mealBox
     * @return \Illuminate\Http\Response
     */
    public function show(MealBox $mealBox)
    {
        //
        return view('admin.CRUD.MealBox.Edit',['mealBox'  => $mealBox]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MealBox  $mealBox
     * @return \Illuminate\Http\Response
     */
    public function edit(MealBox $mealBox)
    {
        return view('admin.CRUD.MealBox.Edit',['mealBox'  => $mealBox]);
    }

    // public function edit($id)
    // {
    //     $mealBox = MealBox::where('id', $id )->first();
    //     //
    //     // $where = array('id' => $id);
    //     // $meal_boxes['meal_boxes'] = MealBox::where($where)->first();
 
    //     // return view('meal-boxes.edit', $data);
    //     // return view('meal-boxes.edit',compact('mealBox'));
    //     return view('admin.CRUD.MealBox.Edit', ['mealBox'  => $mealBox]);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MealBox  $mealBox
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MealBox $mealBox )
    {
        //
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        // $data=MealBox::find($id);  
        // $data->update($request->all());
        // dd($request->all());
        // $article = new MealBox();

       if ($request->hasFile('image'))
        {
            // $boxImage = public_path("uploads/images/{$mealBox->image}"); // get previous image from folder
            // if (File::exists($boxImage)) { // unlink or remove previous image from folder
            //     unlink($boxImage);
            // }

            $image = $request->file('image');
            $name = str_slug($request->name).'.'.$image->getClientOriginalName();
            $destinationPath = public_path('/uploads/boxes');
            $imagePath = $destinationPath. "/".  $name;
            $image->move($destinationPath, $name);

        

            $mealBox->image = $name;
            
            // if(File::exists($destinationPath)) {
            //     File::delete($destinationPath);
            //    }
                        
        }   
        $mealBox->save();
        
        //   $article->name = $request->get('name');
        //     $article->description = $request->get('description');
        //     // $article->image = str_slug($request->get('image'));
        //     $article->price = $request->get('price');

        //     $article->save();
  
        return redirect()->route('meal-boxes.index')
                        ->with('success','Meal Box updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MealBox  $mealBox
     * @return \Illuminate\Http\Response
     */
    public function destroy(MealBox $mealBox)
    {
        //
        $mealBox->delete();
  
        return redirect()->route('meal-boxes.index')
                        ->with('success','Meal Box deleted successfully');
    }
}
