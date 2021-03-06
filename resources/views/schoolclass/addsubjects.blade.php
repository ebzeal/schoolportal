@extends('layouts.app')


<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
@section('content')
    <div class="row pt-3">
        <div class="col-md-10">

        <form>
        <div class="row">
        <div class="col-md-6">
        <input type="text" id="name" placeholder="Subject" class="form-control">
        </div>
        {{--  <input type="text" id="staff" placeholder="Email Address" name="staff">  --}}
        
        <div class="col-md-6">
        <select class="form-control" id="staff">
                <option value=""selected>Choose Staff</option>
                    @foreach($staff as $staff)
                <option value="{{$staff->id}}">{{$staff->fullName}}</option>
                @endforeach
                </select>
        </div>
        </div>
    </form>
    <form action="{{route('subjects.store')}}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" class="form-control" placeholder="class" name="schoolclass_id" value="{{$schoolclass->id}}">
        <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Select </br>(to remove)</th>
                <th>Subject</th>
                <th>Teacher</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                {{--  <td><input type="checkbox" name="record"></td>
                <td>Peter Parker</td>
                <td>peterparker@mail.com</td>  --}}
            </tr>
        </tbody>
    </table>
    
        <div class="row">
            <div class="col-md-6">
                <a class="btn btn-danger btn-xs" id="delete-row">Remove Row</a>        
            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-info" >Add Subjects</button>
            </div>
        </div>
    </form>
    {{--  <button type="button" class="delete-row">Delete Row</button>  --}}
    

    </div>
    <div class="col-md-2">
    
    	{{--  <input type="button" class="add-row" value="Add Row">  --}}
        <a class="btn btn-info btn-xs" id="add-row">Add Row</a>
    </div>
@endsection


@section('page-title')
    Add subjects to {{$schoolclass->session->session}} - {{$schoolclass->name}}
@endsection



    
@section('scripts')
    <script type="text/javascript">
    $(document).ready(function(){
        $("#add-row").click(function(){
            var name = $("#name").val();
            var staff = $("#staff :selected").text();
            var staff_id = $("#staff :selected").val();
            var markup = "<tr><td><input type='checkbox' name='record'></td><td><input name='subjects[]' class='form-control' readonly value='" + name + "'></td><td><input class='form-control' disabled value='" + staff + "'></td><td><input type='hidden' name='staffs[]' class='form-control' value='" + staff_id + "'></td></tr>";
            $("table tbody").append(markup);
        });
        
        // Find and remove selected table rows
        $("#delete-row").click(function(){
            $("table tbody").find('input[name="record"]').each(function(){
            	if($(this).is(":checked")){
                    $(this).parents("tr").remove();
                }
            });
        });
    });    
    </script>
@endsection