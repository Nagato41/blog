@extends('Master')

@section('title', 'Page Title')
@section('topbar')
@section('sidebar')

@section('content1')
<form action="editeStudents" Method="post">
<form action="submitss" Method="post">
    <br>
    <H1>Patients</H1>
    <div class="row">
        <div class="col-md-12">
            <br>
            <table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">Patients ID</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Age</th>
        <th scope="col">Address</th>
        <th scope="col">Phone</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
        </tr>
    </thead>
        @foreach($patient as $patients)
        <tr>
            <td> {{ $patients->id }} </td>
            <td> {{ $patients->First_Name }} </td>
            <td> {{ $patients->Last_Name }} </td>
            <td> {{ $patients->Age }} </td>
            <td> {{ $patients->Address }} </td>
            <td> {{ $patients->Phone }} </td>
            <td><a class="btn btn-warning">Edit</a></td>  
            <td>     
                <form method="POST" action="{{ route('patients.destroy', [$patients->id]) }}">
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
</from>


@stop
@section('content2')
<br>
<br>
<br>
<a href="addpatients" class="btn btn-primary">Add</a>
@stop
