@extends('layouts.cpanel')

@section('maincontent')
<div class="row">
    <div class="col-sm-12 bkg-gold">
            <a href="{{route('cpanel')}}" class="btn btn-danger"> &lt;Go back</a>
        <div class="text-center">
                
            <img src="{{asset('img/ibulogo.png')}}" class="img img-fluid" width="150px"/>
        
        </div>
        <br/>
        <h3 class="text-center">Courses for {{$department->name}}</h3>
        <hr/>

        <div class="row">
            
            <div class="col-sm-3">
                <h5 class="text-center">1st year</h5>
                <ul>
                @foreach($courses as $course)
                    @if($course->year == '1')
                    <li>{{$course->name}} - <form action="{{route('edit-course')}}" method="post">@csrf <input type="hidden" name="courseId" value="{{$course->id}}"> <input type="hidden" name="departmentId" value="{{$department->id}}"><button type="submit" class="btnLink"><i class="far fa-edit"></i></button> <a href="{{route('delete-course',['courseId' => $course->id, 'departmentId' => $department->id])}}" class="text-danger"><i class="fas fa-trash-alt"></i></a></form> </li>
                    @endif
                @endforeach
                </ul>
            </div><!-- first year col end -->

            <div class="col-sm-3">
                <h5 class="text-center">2nd year</h5>
                <ul>
                @foreach($courses as $course)
                    @if($course->year == '2')
                    <li>{{$course->name}} - <form action="{{route('edit-course')}}" method="post">@csrf <input type="hidden" name="courseId" value="{{$course->id}}"> <input type="hidden" name="departmentId" value="{{$department->id}}"><button type="submit" class="btnLink"><i class="far fa-edit"></i></button> <a href="{{route('delete-course',['courseId' => $course->id, 'departmentId' => $department->id])}}" class="text-danger"><i class="fas fa-trash-alt"></i></a></form> </li>
                    @endif
                @endforeach
                </ul>
            </div><!-- second year col end -->

            <div class="col-sm-3">
                <h5 class="text-center">3rd year</h5>
                <ul>
                @foreach($courses as $course)
                    @if($course->year == '3')
                    <li>{{$course->name}} - <form action="{{route('edit-course')}}" method="post">@csrf <input type="hidden" name="courseId" value="{{$course->id}}"> <input type="hidden" name="departmentId" value="{{$department->id}}"><button type="submit" class="btnLink"><i class="far fa-edit"></i></button> <a href="{{route('delete-course',['courseId' => $course->id, 'departmentId' => $department->id])}}" class="text-danger"><i class="fas fa-trash-alt"></i></a></form> </li>
                    @endif
                @endforeach
                </ul>
            </div><!-- third year col end -->

            <div class="col-sm-3">
                <h5 class="text-center">4th year</h5>
                <ul>
                @foreach($courses as $course)
                    @if($course->year == '4')
                    <li>{{$course->name}} - <form action="{{route('edit-course')}}" method="post">@csrf <input type="hidden" name="courseId" value="{{$course->id}}"> <input type="hidden" name="departmentId" value="{{$department->id}}"><button type="submit" class="btnLink"><i class="far fa-edit"></i></button> <a href="{{route('delete-course',['courseId' => $course->id, 'departmentId' => $department->id])}}" class="text-danger"><i class="fas fa-trash-alt"></i></a></form> </li>
                    @endif
                @endforeach
                </ul>
            </div><!-- fourth year col end -->

           

        </div><!-- sub row end --> 
        <hr/>

        @if(Session::has('editCourse'))
        <div class="row">
            <div class="col-sm-12 extra-padding-25">
                <h5 class="text-center">Editing course</h5>
                <br/>
                
                <div class="col-sm-6 mx-auto">
                <form action="{{route('update-course')}}" method="post">
                @csrf
                <input type="hidden" name="courseId" value="{{$editcourse->id}}" />
                <input type="hidden" name="departmentId" value="{{$department->id}}" />
                
                <div class="form-group">
                    <select class="form-control" name="year">
                        <option value="{{$editcourse->year}}"> {{$editcourse->year}}</option>
                        <option value="1">First year</option>
                        <option value="2">Second year</option>
                        <option value="3">Third year</option>
                        <option value="4">Fourth year</option>
                    </select>
                    <p class="font-italic">leave this field untouched if you dont want to change courses year.</p>
                </div>
                <div class="form-group ml-1">
                    Code: <input type="text" class="form-control" name="code" value="{{$editcourse->code}}"/>
                </div>
                <div class="form-group ml-1">
                    Name: <input type="text" class="form-control" name="name" value="{{$editcourse->name}}"/>
                </div>
                <div class="form-group ml-1">
                    Weekly hrs: <input type="text" class="form-control" name="weeklyhours" value="{{$editcourse->weeklyhours}}" />
                </div>
                <div class="form-group ml-1">
                    ECTS: <input type="number" class="form-control" name="ects" value="{{$editcourse->ects}}"/>
                </div>
                <div class="form-group ml-1">
                    Students: <input type="number" class="form-control" name="students" value="{{$editcourse->students}}"/>
                </div>
                <div class="form-group ml-1">
                    Comment: <input type="text" class="form-control" name="comment" value="{{$editcourse->comment}}"/>
                </div>
                <div class="form-group ml-1">
                    Semester: <select class="form-control" name="semester">
                        <option value="{{$editcourse->semester}}">{{$editcourse->semester}}</option>
                        <option value="fall">Fall</option>
                        <option value="spring">Spring</option>
                    </select>
                    <p class="font-italic">leave this field untouched if you dont want to change courses semester.</p>
                </div>
                <div class="form-group ml-1">
                    Professor: <select class="form-control" name="professorId">
                        <option value="{{$editcourse->professor_id}}"> {{$editcourse->professor_id}}</option>
                    @foreach($professors as $professor)
                        <option value="{{$professor->id}}">{{$professor->name}}</option>
                    @endforeach
                    </select>
                    <p class="font-italic">leave this field untouched if you dont want to change courses professor.</p>
                </div>
                <div class="form-group ml-1">
                    Assistant: <select class="form-control" name="assistantId">
                            <option value="{{$editcourse->assistant_id}}"> {{$editcourse->assistant_id}}</option>
                    @foreach($assistants as $assistant)
                        <option value="{{$assistant->id}}">{{$assistant->name}}</option>
                    @endforeach
                    </select>
                    <p class="font-italic">leave this field untouched if you dont want to change courses assistant.</p>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-danger">Save changes!</button>
                </div>
                </form>
                </div> <!-- form col end -->
            </div>
        </div><!-- sub row end -->
        @else
        <div class="row">
            <div class="col-sm-12 extra-padding-25">
                <h5 class="text-center">Add a new course</h5>
                <br/>
                
                <div class="col-sm-6 mx-auto">
                <form action="{{route('add-course')}}" method="post">
                @csrf
                <input type="hidden" name="departmentId" value="{{$department->id}}" />
                
                <div class="form-group">
                    <select class="form-control" name="year">
                        <option value="1">First year</option>
                        <option value="2">Second year</option>
                        <option value="3">Third year</option>
                        <option value="4">Fourth year</option>
                    </select>
                </div>
                <div class="form-group ml-1">
                    Code: <input type="text" class="form-control" name="code" />
                </div>
                <div class="form-group ml-1">
                    Name: <input type="text" class="form-control" name="name" />
                </div>
                <div class="form-group ml-1">
                    Weekly hrs: <input type="text" class="form-control" name="weeklyhours" />
                </div>
                <div class="form-group ml-1">
                    ECTS: <input type="number" class="form-control" name="ects" />
                </div>
                <div class="form-group ml-1">
                    Students: <input type="number" class="form-control" name="students" value="0"/>
                </div>
                <div class="form-group ml-1">
                    Comment: <input type="text" class="form-control" name="comment" value="No comment given yet."/>
                </div>
                <div class="form-group ml-1">
                    Semester: <select class="form-control" name="semester">
                        <option value="fall">Fall</option>
                        <option value="spring">Spring</option>
                    </select>
                </div>
                <div class="form-group ml-1">
                    Professor: <select class="form-control" name="professorId">
                    @foreach($professors as $professor)
                        <option value="{{$professor->id}}">{{$professor->name}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group ml-1">
                    Assistant: <select class="form-control" name="assistantId">
                    @foreach($assistants as $assistant)
                        <option value="{{$assistant->id}}">{{$assistant->name}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-danger">Add course!</button>
                </div>
                </form>
                </div> <!-- form col end -->
            </div>
        </div><!-- sub row end -->
        @endif
    </div><!-- main col end -->
</div><!-- main row end -->
@endsection

