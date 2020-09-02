<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mofood;

class UsersController extends Controller
{
    public function index()
    {
        $food = mofood::all();
        return view('food')->with('foods',$food);
    }

    public function create(Request $req)
    {
        $food= new mofood;
        $food->Name=$req->foodname;
        $food->Brand=$req->foodbrand;
        $food->unit=$req->unit;
        $food->amount=$req->Amount;
        $food->Calories=$req->calories;
        $food->Sodium=$req->sodium;
        $food->TotalFat=$req->fat;
        $food->Potassium=$req->potassium;
        $food->Saturated=$req->saturated_fat;
        $food->TotalCarbs=$req->carbs;
        $food->Polyunsaturated=$req->polyunsaturated_fat;
        $food->DietaryFiber=$req->fiber;
        $food->Monounsaturated=$req->monounsaturated_fat;
        $food->Sugars=$req->sugar;
        $food->Trans=$req->trans_fat;
        $food->Protein=$req->protein;
        $food->Cholesterol=$req->cholesterol;
        $food->Vitamin_A=$req->vitamin_a;
        $food->Calcium=$req->calcium;
        $food->Vitamin_C=$req->vitamin_c;
        $food->Iron=$req->iron;
        $food->save();
        return view('foodhome');
        //print_r($req->input());

    }
    public function destroy($id)
    {
        $blog = mofood::findOrFail($id);
        $blog->delete();
        return redirect('food');
    }
}
