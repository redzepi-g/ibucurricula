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
        
        <div class="year-box extra-padding-25 "> <!-- first year -->
            
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

        <div class="year-box extra-padding-25 active"> <!-- third year -->
            
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
        
        <div class="row"> <!-- sub row -->
            
            <div class="col-md-12" id="course-col"> <!-- sub col -->
                <p class="text-center font-italic text-capitalize">{{$semester}} Semester</p>
                
                <form action="{{route('third-spring')}}" method="post" id="course-form">
                    @csrf
                <input type="hidden" name="year" value="{{$year}}" />
                <input type="hidden" name="semester" value="{{$semester}}" />
                <input type="hidden" name="department" value="{{$department->id}}" />

                <div class="form-row" id="course-row">
                
                <div class="card" id="dummy-course" style="width: 18rem;">
                        
                        <div class="card-body text-center">
        
                            <p class="font-italic">Controls</p>
                            <button type="button" id="add-course"><i class="fas fa-plus"></i></button>
                            <button type="button" id="remove-course"><i class="fas fa-minus"></i></button>
                        </div>
                </div>
                </div>

                <div class="form-row">
                    <div class="col-md-12 text-center">
                        <br/>
                        <hr/>
                        <button type="submit" class="btn btn-warning">Save</button>
                    </div>  
                </div>

                </form>
            </div> <!-- sub col end -->


        </div><!-- sub row end -->

    </div> <!-- courses selection col end -->

</div> <!-- row end -->
@endsection

@section('customscripts')
<script src="{{asset('js/tableControl-third-fall.js')}}"></script>
@endsection