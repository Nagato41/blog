<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mofood extends Model
{
    protected $table ='food';
    public $timestamps = false;
    protected $fillable = ['id', 'Name', 'Brand', 'unit', 'amount', 'Calories', 'Sodium', 'TotalFat', 'Potassium', 'Saturated', 'TotalCarbs', 'Polyunsaturated', 'DietaryFiber', 'Monounsaturated', 'Sugars', 'Trans', 'Protein', 'Cholesterol', 'Vitamin_A', 'Calcium', 'Vitamin_C', 'Iron' ];
}