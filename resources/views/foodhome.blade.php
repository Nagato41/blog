@extends('master')

@section('title', 'Page Title')
@section('topbar')
@section('sidebar')

@section('content1')
    <form class="form-inline">
        <input class="form-control" style=" width:700px;margin-top: 5px;"   type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success"style="margin-top: 5px;" type="submit">Search</button>
    </form>
@stop
@section('content2')
@stop