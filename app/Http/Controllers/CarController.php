<?php

namespace App\Http\Controllers;

use App\Car;


use Illuminate\Http\Request;

class CarController extends Controller
{
    public function allcars(){
    	$car = Car::all();
    	return view('car', ['cars =>$cars']);


    }

    public function particularcar($id){
        $car = Car::find($id);
        return view('particularcar',['cars'=>$car]);


    }

    public function newcar(){
        $this->validate(request(), [
            'make'=>'required',
            'model'=>'required|unique:cars',
            'produced_on'=>'required',
            'image'=>'required',

        ]);

        //$car->new car;
        $car->make=request('make');
        $car->model=request('model');
        $car->produced_on=request('produced_on');
        $car->image_url = request()->file('image')->store('cars/public/images');
        $car->save();

        request()->session()->flash("form-status", "Car creation successful");

        return view('newcar');
    	
    	
    }

    public function newCarForm(){
        return view('newcar');

    }

    public function carreviews($id){
        $car =Car::find($id);
        $reviews = $car->reviews;
        return $reviews;
    }
}
