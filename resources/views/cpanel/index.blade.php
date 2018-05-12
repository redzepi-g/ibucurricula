@extends('layouts.cpanel')

@section('maincontent')
<div class="row"><!-- row start -->
    <div class="col-md-12 bkg-gold extra-padding-25"> <!-- main col -->
    <a href="{{route('index')}}" class="btn btn-danger"> &lt;Go back</a>
        <div class="row extra-padding-25"><!-- sub row -->
            <div class="col-md-6 mx-auto text-center">
                <img src="{{asset('img/ibulogo.png')}}" class="img img-fluid" alt="ibu logo" />
            </div>
        </div><!-- sub row end -->

        <div class="row extra-padding-25"><!--sub row -->
            <div class="col-md-6 mx-auto text-center">
                <h5>Select Department</h5>
                <hr/>
                <form action="{{route('curriculum')}}" method="post" id="index-form">
                @csrf
                <div class="form-row">
                    <div class="col-md-6 mx-auto text-center">
                        <select name="department" class="form-control">
                            @foreach($departments as $department)
                            <option value="{{$department->id}}">{{$department->name}}</option>
                            @endforeach
                        </select>
                        <br/>
                        
                        

                    </div>
                        
                </div>
                
                <div class="form-row">
                
                        <div class="col-md-12">
                        <p class="text-center">Select operation</p>
                        <p class="font-italic text-center" id="selected-p">Currently selected: </p>
                <hr/>
                            <button type="button" id="btn-manage-staff" class="btn btn-danger">Staff</button>
                            <button type="button" id="btn-manage-courses" class="btn btn-danger">Courses</button>
                            <button type="button" id="btn-manage-curriculum" class="btn btn-danger">Curriculum</button>
                        </div>
                </div>
                
                <br/>
                <div class="form-row">
                    <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-danger">Continue</button>
                    </div>
                </div>

            </form>

            
            </div>
        </div><!-- sub row end-->
    </div> <!-- main col end -->
</div><!-- row end -->
@endsection

@section('customscripts')
<script src="{{asset('js/cpanelControl.js')}}"></script>
@endsection