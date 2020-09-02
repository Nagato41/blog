@extends('Master')

@section('title', 'Page Title')
@section('topbar')
@section('sidebar')

@section('content1')
<form action="" Method="post">
  <br>
  <H1>Food</H1>
  <div class="row">
    <div class="col-md-12">
        <br>
        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Food ID</th>
      <th scope="col">Food Name</th>
      <th scope="col">Brand/Restaurant</th>
      <th scope="col">Calories</th>
      <th scope="col">Carbs</th>
      <th scope="col">Fat</th>
      <th scope="col">Protein</th>
      <th scope="col">Sugar</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
    @foreach($foods as $food)
      <tr>
        <td> {{ $food->id }} </td>
        <td> {{ $food->Name }} </td>
        <td> {{ $food->Brand }} </td>
        <td> {{ $food->Calories }} </td>
        <td> {{ $food->TotalCarbs }} </td>
        <td> {{ $food->TotalFat }} </td>
        <td> {{ $food->Protein }} </td>
        <td> {{ $food->Sugars }} </td>
        <td> 
              <button class="btn btn-warning" type="submit">Edit</button>
        </td>  
        <td>
            <form method="POST" action="{{ route('food.destroy', [$food->id]) }}">
              {{ csrf_field() }}
              {{ method_field('DELETE') }}
              <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </td>
      </tr>
    @endforeach


</table>

    </div>
    
  </div>


@stop
@section('content2')
<br>
<br>
<br>
<a href="addfood" class="btn btn-primary">Add</a>
@stop


<!-- Calories
Carbs
Fat
Protein
Sodium
Sugar -->


