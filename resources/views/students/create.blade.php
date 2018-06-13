@extends('layouts.app')

@section('content')

            <form action="{{route('students.store')}}" method="post" enctype="multipart/form-data">
                                  {{ csrf_field() }}
            <div class="form-row">
                <div class="form-group col-md-8">
                
                <label for="fullname">Full Names</label>
                <input type="text" class="form-control" id="fullname" placeholder="Full Names" name="fullName" required>
                </div>

                <div class="form-group col-md-4">
                    <label for="gender">Gender</label>
                    <select id="gender" class="form-control" name="gender">
                        <option selected>Choose...</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-8">
                <label for="parents">Sponsor</label>
                <select id="parents" class="form-control" name="parents">
                    <option selected value="0">Select Parent...</option>
                </select>
                </div>

                
                <div class="form-group col-md-4">
                <label for="parentRelationship">Relationship with Sponsor</label>
                 <select id="parentRelationship" class="form-control" name="parentRelationship">
                    <option selected value="parents">Parents</option>
                    <option value="guardians">Gaurdians</option>
                </select>
                
                </div>
            </div>    
            
            <div class="form-row">
                

                <div class="form-group col-md-4">
                <label for="dateOfBirth">Date of Birth</label>
                <input type="date" class="form-control" id="dateOfBirth" placeholder="Date of Birth" name="dateOfBirth">
                </div>
                
               
                <div class="form-group col-md-4">
                <label for="image">Picture</label>
                <input type="file" class="form-control" id="image" placeholder="picture" name='image'>
                </div>
                
                  
                <div class="form-group col-md-4">
                <label for="admissionDate">Admission Date</label>
                <input type="date" class="form-control" id="admissionDate" placeholder="Date of Admission" name="admissionDate">
                </div>
            </div>
            <div class="form-row">
              
                
                <div class="col-md-4">
                    <div class="row">
                        <div class="form-group col-md-12">
                           
                @include('includes.input.section')
                        </div>
                     </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="schoolClass">Class</label>
                            <select id="schoolClass" class="form-control" name="schoolClass">
                                <option selected>Choose ...</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="status">Status</label>
                            <select id="status" class="form-control" name="status">
                                <option selected value="Active">Active</option>
                                <option value="graduated">Graduated</option>
                                <option value="left">Left</option>
                            </select>
                        </div>
                    </div>

                </div>
                
                <div class="form-group col-md-8">
                    <label for="peculiarities">Special Needs</label>
                    <textarea class="form-control" name="peculiarities" id="" cols="4" rows="10"></textarea>
                </div>
            </div>
            
            <div class="form-row">
            <div class="col-md-12 form-control">
            <button type="submit" class="btn btn-primary btn-block">Add Student</button>
            </div>
            </div>
            </form>


@endsection

@section('page-title')
    Add New Profile
@endsection