@extends('master')

@section('title', 'Page Title')
@section('topbar')
@section('sidebar')

@section('content1')
      <bR>
            <h1>Add Food</h1>
            <form>
      <div class="form-row">
      </div>
      <div class="form-group col-md-6">
        <label for="inputAddress">Food Name.</label>
        <input type="text" class="form-control" id="inputAddress">
      </div>
      <div class="form-group col-md-6">
        <label for="inputAddress">Proteints</label>
        <input type="text" class="form-control" id="inputAddress">
      </div>
      <div class="form-group col-md-6">
        <label for="inputAddress">Carbohydrates</label>
        <input type="text" class="form-control" id="inputAddress">
      </div>
      <div class="form-group col-md-6">
        <label for="inputAddress">Fat</label>
        <input type="text" class="form-control" id="inputAddress">
      </div>
      <div class="form-group col-md-6">
        <label for="inputAddress">Calorie</label>
        <input type="text" class="form-control" id="inputAddress">
      </div>
      <button  type="submit" class="btn btn-primary col-md-1">Save</button>
      <a href="/" type="submit" class="btn btn-danger col-md-1">Cancle</a>
    </form>
        </div>   
@stop