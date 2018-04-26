@extends('layouts.department')

@section('maincontent')

<div class="row">
    <div class="col-md-2  bkg-gold extra-padding-25">
            
        <div class="text-center">
                <img src="{{asset('img/ibulogo.png')}}" class="img img-fluid" alt="ibu logo" width="70px" />
        </div>
    </div>


    <div class="col-md-8 bkg-gold extra-padding-25">
        <h5 class="font-italic">Department: {{$department->name}}</h5>
    </div>

    <div class="col-md-2  bkg-gold extra-padding-25">
            
        <div class="text-center">
            <h5 class="font-italic">Currently updating: {{$year}} year/{{$semester}} semester</h5>
        </div>
    </div>
</div>

<div class="row"> <!-- row start -->

    <div class="col-md-2 bkg-gold extra-padding-25"> <!-- main col -->
        
        <div class="year-box extra-padding-25 active"> <!-- first year -->
            
            <h3 class="text-center">I</h3>
            <br/>
            <hr/>
            <p class="font-italic text-center">(first year)</p>

        </div> <!-- first year end -->

        <div class="year-box extra-padding-25"> <!-- second year -->
            
            <h3 class="text-center">II</h3>
            <br/>
            <hr/>
            <p class="font-italic text-center">(second year)</p>

        </div> <!-- second year end -->

        <div class="year-box extra-padding-25"> <!-- third year -->
            
            <h3 class="text-center">III</h3>
            <br/>
            <hr/>
            <p class="font-italic text-center">(third year)</p>

        </div> <!--third year end -->

        <div class="year-box extra-padding-25"> <!-- fourth year -->
            
            <h3 class="text-center">IV</h3>
            <br/>
            <hr/>
            <p class="font-italic text-center">(fourth year)</p>

        </div> <!--fourth year end -->

    </div> <!-- main col end -->

    <div class="col-md-10 bkg-white"> <!-- courses selection col -->
        
        <div class="row" id="course-row-fall"> <!-- sub row -->
            
            <div class="col-md-12"> <!-- sub col -->
                <p class="text-center font-italic text-capitalize">{{$semester}} Semester</p>
                
                <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="http://via.placeholder.com/286x180" alt="Card image cap">
                        <div class="card-body text-center">
        
                            <p class="font-italic">Add a course</p>
                            <button type="button" id="add-course"><i class="fas fa-plus"></i></button>
                        </div>
                </div>
            </div> <!-- sub col end -->


        </div><!-- sub row end -->

    </div> <!-- courses selection col end -->

</div> <!-- row end -->
@endsection

@section('customscripts')
<script src="{{asset('js/tableControl.js')}}"></script>
@endsection