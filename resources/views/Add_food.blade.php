@extends('master')

@section('title', 'Page Title')
@section('topbar')
@section('sidebar')
@section('content3')
@stop
@section('content1')

<div id="wrap">

<div id="content">

  <div class="ads" style="">

<p class="ad">
</p><div id="ad_diaries_728x90" data-network="google" class="ad-wrapper" style="width: 728px !important; height: 90px !important;">
<div id="google_ads_iframe_/17729925/UACF_W/MFP/Other_0__container__" style="border: 0pt none; width: 728px; height: 90px;"></div></div>

<p></p>

</div>

<div id="main">

<h1 class="main-title">Add Food</h1>
<br>

<form class="form" Method="Post" id="createFoodForm" action="add" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="W6O+J7hWM5+9bAAZGYcDuYds6v/c5YGldyCQ1xneZBEFipGRnFX6uHewNpv6/NYT6ndUmfjztE3wwNCm+Unk+w==">
@csrf
    <li class="field">
        <label>Food Name:</label>
    <input name="foodname" id="food_description" autocomplete="on" tabindex="2" class="text" type="text" value="">
    </li>

    <li class="field">
        <label>Brand / Restaurant:</label>
        <input  tabindex="" class="text" type="text" value="" name="foodbrand" id="food_brand">
    </li>




    <h4 class="title">Nutrition Facts</h4>

    <div id="nutritionWrap">

        <li class="field">
            <label>Amount:</label>
    <input tabindex="4" class="text" type="text" value="" name="Amount" id="weight_serving_size">
        </li>

        <li class="field">
            <label>Unit: <span class="aclaration-3"></span>
    </label>
    <input type="text" name="unit" id="servingspercontainer" value="" tabindex="5" class="text alt">
        </li>


    <table style="width: 800px">

        <colgroup>
            <col class="col-1">
            <col class="col-2">
        </colgroup>

        <thead>
            <tr>
                <th colspan="6">Amount Per Serving</th>
            </tr>
        </thead>

        <td >
            <tr class="first">
                <td class="col-1" >Calories</td>
                <td class="col-2"><input value="" class="text" autocomplete="on" tabindex="6" type="text" name="calories" id="nutritional_content_calories"></td>
                <td>  </td>
                <td class="col-1">Sodium</td>
                <td  class="col-2"><input value="" class="text" autocomplete="on" tabindex="13" type="text" name="sodium" id="nutritional_content_sodium"></td>
                <td>mg</td>
            </tr>
            <tr>
                <td class="col-1">Total Fat</td>
                <td class="col-2"><input class="text" autocomplete="on" tabindex="7" type="text" name="fat" id="nutritional_content_fat"></td>
                <td>mg</td>
                <td class="col-1">Potassium</td>
                <td class="col-2"><input class="text" autocomplete="on" tabindex="14" type="text" name="potassium" id="nutritional_content_potassium"></td>
                <td>mg</td>
            </tr>

            <tr>
                <td class="col-1">Saturated</td>
                <td class="col-2"><input class="text" autocomplete="on" tabindex="8" type="text" name="saturated_fat" id="nutritional_content_saturated_fat"></td>
                <td>g</td>
                <td class="col-1">TotalCarbs</td>
                <td class="col-2"><input class="text" autocomplete="on" tabindex="1" type="text" name="carbs" id="nutritional_content_carbs"></td>
                <td>g</td>
            </tr>


            <tr>
                <td class="col-1">Polyunsaturated</td>
                <td class="col-2"><input class="text" autocomplete="on" tabindex="9" type="text" name="polyunsaturated_fat" id="nutritional_content_polyunsaturated_fat"></td>
                <td>g</td>
                <td class="col-1">DietaryFiber</td>
                <td class="col-2"><input class="text" autocomplete="on" tabindex="16" type="text" name="fiber" id="nutritional_content_fiber"></td>
                <td>g</td>
            </tr>

            <tr>
                <td class="col-1">Monounsaturated</td>
                <td class="col-2"><input class="text" autocomplete="on" tabindex="10" type="text" name="monounsaturated_fat" id="nutritional_content_monounsaturated_fat"></td>
                <td>g</td>
                <td class="col-1">Sugars</td>
                <td class="col-2"><input class="text" autocomplete="on" tabindex="17" type="text" name="sugar" id="nutritional_content_sugar"></td>
                <td>g</td>
            </tr>

            <tr>
                <td class="col-1">Trans</td>
                <td class="col-2"><input class="text" autocomplete="on" tabindex="11" type="text" name="trans_fat" id="nutritional_content_trans_fat"></td>
                <td>g</td>
                <td class="col-1">Protein</td>
                <td class="col-2"><input value="" class="text" autocomplete="on" tabindex="18" type="text" name="protein" id="nutritional_content_protein"></td>
                <td>g</td>
            </tr>

            <tr class="last">
                <td class="col-1">Cholesterol</td>
                <td class="col-2"><input class="text" autocomplete="on" tabindex="12" type="text" name="cholesterol" id="nutritional_content_cholesterol"></td>
                <td>mg</td>
                <td class="col-1">&nbsp;</td>
                <td class="col-2">&nbsp;</td>
            </tr>

            <tr class="alt first">
                <td class="col-1">Vitamin A</td>
                <td class="col-2"><input class="text" autocomplete="on" tabindex="19" type="text" name="vitamin_a" id="nutritional_content_vitamin_a"></td>
                <td>%</td>
                <td class="col-1">Calcium</td>
                <td class="col-2"><input class="text" autocomplete="on" tabindex="21" type="text" name="calcium" id="nutritional_content_calcium"></td>
                <td>%</td>
            </tr>

            <tr class="last">
                <td class="col-1">Vitamin C</td>
                <td class="col-2"><input class="text" autocomplete="on" tabindex="20" type="text" name="vitamin_c" id="nutritional_content_vitamin_c"></td>
                <td>%</td>
                <td class="col-1">Iron</td>
                <td class="col-2"><input class="text" autocomplete="on" tabindex="22" type="text" name="iron" id="nutritional_content_iron"></td>
                <td>%</td>
            </tr>

        </tbody>

    </table> <!-- / #nutrition-facts -->
    <br><br>
    <button  type="add" class="btn btn-primary col-md-1">Save</button>
    <a href="food" type="submit" class="btn btn-danger col-md-1">Cancle</a>
    </div> <!-- / #nutrition-wrap -->

  
</form>
</div><!-- / #main -->

<!-- / #sidebar -->


</div><!-- / #content -->

</div>

@stop
@section('content2')
@stop
