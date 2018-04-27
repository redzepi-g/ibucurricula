@extends('layouts.cpanel')

@section('maincontent')
<div class="row">

    <div class="col-md-12 bkg-gold extra-padding-25">
        <div class="row">
            <div class="col-md-6 mx-auto text-center">
                <img src="{{asset('img/ibulogo.png')}}" class="img img-fluid" alt="ibulogo" width="200px"/>
            </div>
        </div>
        <div class="extra-padding-25">
        <h5 class="text-center">Welcome to curriculum for {{$department->name}}</h5>
        </div>

        <div class="row">
            <div class="col-md-12 extra-padding-25 text-center">

                <a href="#" class="btn btn-danger">Print the curriculum to PDF file.</a>
                <a href="#" class="btn btn-danger">Print the curriculum to Excel file.</a>
            </div>
        </div>

        <div class="row"> <!-- sub row -->
            <div class="col-md-12"> <!-- sub col -->
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <td>#</td>
                            <td>Code</td>
                            <td>Course</td>
                            <td>Weekly Hours</td>
                            <td>ECTS</td>
                            <td>Professor</td>
                            <td>Assistant</td>
                            <td>Students</td>
                            <td>Comments</td>
                        </tr>
            
                        <!-- first fall -->
                        <tr>
                            <td colspan="9" class="text-center">First - Fall semester</td>
                        </tr>
                        @if($first_fall != NULL)
                        
                            @foreach($first_fall as $ff_row)
                             <tr>
                                <td>{{$ff_row->id}}</td>
                                <td>{{$ff_row->code}}</td>
                                <td>{{$ff_row->course}}</td>
                                <td>{{$ff_row->weeklyhours}}</td>
                                <td>{{$ff_row->ects}}</td>
                                <td>{{$ff_row->professor}}</td>
                                <td>{{$ff_row->assistant}}</td>
                                <td>{{$ff_row->students}}</td>
                                <td>{{$ff_row->comment}}</td>
                             </tr>
                            @endforeach
                        @else
                        <tr>
                            <td colspan="9">Not found...</td>
                        </tr>
                        @endif
                        <!-- first spring -->
                        <tr>
                            <td colspan="9" class="text-center">First - Spring semester</td>
                        </tr>
                        @if($first_spring != NULL)
                        
                            @foreach($first_spring as $ff_row)
                             <tr>
                                <td>{{$ff_row->id}}</td>
                                <td>{{$ff_row->code}}</td>
                                <td>{{$ff_row->course}}</td>
                                <td>{{$ff_row->weeklyhours}}</td>
                                <td>{{$ff_row->ects}}</td>
                                <td>{{$ff_row->professor}}</td>
                                <td>{{$ff_row->assistant}}</td>
                                <td>{{$ff_row->students}}</td>
                                <td>{{$ff_row->comment}}</td>
                             </tr>
                            @endforeach
                        @else
                        <tr>
                            <td colspan="9">Not found...</td>
                        </tr>
                        @endif
                        <!-- second fall -->
                        <tr>
                            <td colspan="9" class="text-center">Second - Fall semester</td>
                        </tr>
                        @if($second_fall != NULL)
                        
                            @foreach($second_fall as $ff_row)
                             <tr>
                                <td>{{$ff_row->id}}</td>
                                <td>{{$ff_row->code}}</td>
                                <td>{{$ff_row->course}}</td>
                                <td>{{$ff_row->weeklyhours}}</td>
                                <td>{{$ff_row->ects}}</td>
                                <td>{{$ff_row->professor}}</td>
                                <td>{{$ff_row->assistant}}</td>
                                <td>{{$ff_row->students}}</td>
                                <td>{{$ff_row->comment}}</td>
                             </tr>
                            @endforeach
                        @else
                        <tr>
                            <td colspan="9">Not found...</td>
                        </tr>
                        @endif
                        <!-- second spring -->
                        <tr>
                            <td colspan="9" class="text-center">Second - Spring semester</td>
                        </tr>
                        @if($second_spring != NULL)
                        
                            @foreach($second_spring as $ff_row)
                             <tr>
                                <td>{{$ff_row->id}}</td>
                                <td>{{$ff_row->code}}</td>
                                <td>{{$ff_row->course}}</td>
                                <td>{{$ff_row->weeklyhours}}</td>
                                <td>{{$ff_row->ects}}</td>
                                <td>{{$ff_row->professor}}</td>
                                <td>{{$ff_row->assistant}}</td>
                                <td>{{$ff_row->students}}</td>
                                <td>{{$ff_row->comment}}</td>
                             </tr>
                            @endforeach
                        @else
                        <tr>
                            <td colspan="9">Not found...</td>
                        </tr>
                        @endif
                        <!-- third fall -->
                        <tr>
                            <td colspan="9" class="text-center">Third - Fall semester</td>
                        </tr>
                        @if($third_fall != NULL)
                        
                            @foreach($third_fall as $ff_row)
                             <tr>
                                <td>{{$ff_row->id}}</td>
                                <td>{{$ff_row->code}}</td>
                                <td>{{$ff_row->course}}</td>
                                <td>{{$ff_row->weeklyhours}}</td>
                                <td>{{$ff_row->ects}}</td>
                                <td>{{$ff_row->professor}}</td>
                                <td>{{$ff_row->assistant}}</td>
                                <td>{{$ff_row->students}}</td>
                                <td>{{$ff_row->comment}}</td>
                             </tr>
                            @endforeach
                        @else
                        <tr>
                            <td colspan="9">Not found...</td>
                        </tr>
                        @endif
                        <!-- third spring -->
                        <tr>
                            <td colspan="9" class="text-center">Third - Spring semester</td>
                        </tr>
                        @if($third_spring != NULL)
                        
                            @foreach($third_spring as $ff_row)
                             <tr>
                                <td>{{$ff_row->id}}</td>
                                <td>{{$ff_row->code}}</td>
                                <td>{{$ff_row->course}}</td>
                                <td>{{$ff_row->weeklyhours}}</td>
                                <td>{{$ff_row->ects}}</td>
                                <td>{{$ff_row->professor}}</td>
                                <td>{{$ff_row->assistant}}</td>
                                <td>{{$ff_row->students}}</td>
                                <td>{{$ff_row->comment}}</td>
                             </tr>
                            @endforeach
                        @else
                        <tr>
                            <td colspan="9">Not found...</td>
                        </tr>
                        @endif
                        <!-- fourth fall -->
                        <tr>
                            <td colspan="9" class="text-center">Fourth - Fall semester</td>
                        </tr>
                        @if($fourth_fall != NULL)
                        
                            @foreach($fourth_fall as $ff_row)
                             <tr>
                                <td>{{$ff_row->id}}</td>
                                <td>{{$ff_row->code}}</td>
                                <td>{{$ff_row->course}}</td>
                                <td>{{$ff_row->weeklyhours}}</td>
                                <td>{{$ff_row->ects}}</td>
                                <td>{{$ff_row->professor}}</td>
                                <td>{{$ff_row->assistant}}</td>
                                <td>{{$ff_row->students}}</td>
                                <td>{{$ff_row->comment}}</td>
                             </tr>
                            @endforeach
                        @else
                        <tr>
                            <td colspan="9">Not found...</td>
                        </tr>
                        @endif
                        <!-- fourth spring -->
                        <tr>
                            <td colspan="9" class="text-center">Fourth - Spring semester</td>
                        </tr>
                        @if($fourth_spring != NULL)
                        
                            @foreach($fourth_spring as $ff_row)
                             <tr>
                                <td>{{$ff_row->id}}</td>
                                <td>{{$ff_row->code}}</td>
                                <td>{{$ff_row->course}}</td>
                                <td>{{$ff_row->weeklyhours}}</td>
                                <td>{{$ff_row->ects}}</td>
                                <td>{{$ff_row->professor}}</td>
                                <td>{{$ff_row->assistant}}</td>
                                <td>{{$ff_row->students}}</td>
                                <td>{{$ff_row->comment}}</td>
                             </tr>
                            @endforeach
                        @else
                        <tr>
                            <td colspan="9">Not found...</td>
                        </tr>
                        @endif
                    </table>
                </div>
            </div><!-- sub col end -->
        </div> <!-- sub row end -->
    </div>

</div>
@endsection