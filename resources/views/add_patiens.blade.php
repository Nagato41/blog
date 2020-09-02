@extends('master')

@section('title', 'Page Title')
@section('topbar')
@section('sidebar')
@section('content3')
@stop
@section('content1')
<bR>
<h1>Add Patiens</h1>
  <form action="addpt" Method="post">
@csrf
    <div class="form-row">
    </div>
    <div class="form-group col-md-6">
      <label for="inputAddress">First Name</label>
      <input type="text" name="firstname" class="form-control" id="inputAddress">
    </div>
    <div class="form-group col-md-6">
      <label for="inputAddress">Last Name</label>
      <input type="text" name="lastname"class="form-control" id="inputAddress">
    </div>
    <div class="form-group col-md-6">
      <label for="inputAddress">Age</label>
      <input type="text" name="age"class="form-control" id="inputAddress">
    </div>
    <div class="form-group col-md-6">
      <label for="inputAddress">Address</label>
      <textarea type="text" name="address"class="form-control" id="inputAddress"></textarea>    
    </div>
    <div class="form-group col-md-6">
      <label for="inputAddress">Phone</label>
      <input type="text" name="phone" class="form-control" id="inputAddress">
    </div>
    <button  href="patients" type="addpt" class="btn btn-primary col-md-1">Save</button>
    <a href="patients" type="submit" class="btn btn-danger col-md-1">Cancle</a>
  </form>
@stop
@section('content2')
@stop
