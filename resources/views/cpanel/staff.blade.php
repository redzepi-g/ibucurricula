@extends('layouts.cpanel')

@section('maincontent')
<div class="row">
    <div class="col-sm-12 bkg-gold">
            <a href="{{route('cpanel')}}" class="btn btn-danger"> &lt;Go back</a>
        <div class="text-center">
                
            <img src="{{asset('img/ibulogo.png')}}" class="img img-fluid" width="150px"/>
        
        </div>
        <br/>
        <h3 class="text-center">Staff for {{$department->name}}</h3>
        <hr/>

        <div class="row extra-padding-25">

            <div class="col-sm-4">
                <h5>Professors Staff</h5>
                <ul class="list-group">
                    @foreach($professors as $professor)
                    <li>{{$professor->name}} <form action="{{route('edit-professor')}}" method="post">@csrf <input type="hidden" name="professorId" value="{{$professor->id}}"> <input type="hidden" name="departmentId" value="{{$department->id}}"><button type="submit" class="btnLink"><i class="far fa-edit"></i></button> <a href="{{route('delete-professor', ['professorId' => $professor->id, 'departmentId' => $department->id])}}" class="text-danger"><i class="fas fa-trash-alt"></i></a></form></li>
                    @endforeach
                </ul>
            </div> <!-- professors tab -->

            <div class="col-sm-4">
                <h5>Assistants Staff</h5>
                <ul class="list-group">
                    @foreach($assistants as $assistant)
                    <li>{{$assistant->name}} <form action="{{route('edit-assistant')}}" method="post">@csrf <input type="hidden" name="assistantId" value="{{$assistant->id}}"> <input type="hidden" name="departmentId" value="{{$department->id}}"><button type="submit" class="btnLink"><i class="far fa-edit"></i></button> <a href="{{route('delete-assistant', ['assistantId' => $assistant->id, 'departmentId' => $department->id])}}" class="text-danger"><i class="fas fa-trash-alt"></i></a></form></li>
                    @endforeach
                </ul>
            </div> <!-- assistant tab -->

            @if(Session::has('editProfessor'))
            <div class="col-sm-4">
                    <h5>Editing staff memberr</h5>
                    <hr/>
                    <form action="{{route('update-professor')}}" method="post">
                        @csrf
                        <input type="hidden" name="departmentId" value="{{$department->id}}" />
                        <input type="hidden" name="professorId" value="{{$editprofessor->id}}" />
    
                        <h6>Title,and full name</h6>
                        <input type="text" class="form-control" name="name" value="{{$editprofessor->name}}"/>
                        <br/>
                        <h6>Role</h6>
                        <select class="form-control" name="role">
                            <option value="0"></option>
                            <option value="0">Professor</option>
                            <option value="1">Assistant</option>
                        </select>
                        <p class="font-italic">leave this field untouched if you dont want to change this staff members roles.</p>
                        <br/>
                        <div class="text-center">
                            <button type="submit" class="btn btn-danger">Save changes</button>
                        </div>
                    </form>
                </div> <!-- add staff tab -->
            @elseif(Session::has('editAssistant'))
            <div class="col-sm-4">
                    <h5>Editing staff memberr</h5>
                    <hr/>
                    <form action="{{route('update-assistant')}}" method="post">
                        @csrf
                        <input type="hidden" name="departmentId" value="{{$department->id}}" />
                        <input type="hidden" name="assistantId" value="{{$editassistant->id}}" />
    
                        <h6>Title,and full name</h6>
                        <input type="text" class="form-control" name="name" value="{{$editassistant->name}}"/>
                        <br/>
                        <h6>Role</h6>
                        <select class="form-control" name="role">
                            <option value="1"></option>
                            <option value="0">Professor</option>
                            <option value="1">Assistant</option>
                        </select>
                        <p class="font-italic">leave this field untouched if you dont want to change this staff members roles.</p>
                        <br/>
                        <div class="text-center">
                            <button type="submit" class="btn btn-danger">Save changes</button>
                        </div>
                    </form>
                </div> <!-- add staff tab -->
            @else   
            <div class="col-sm-4">
                    <h5>Add a new staff member</h5>
                    <hr/>
                    <form action="{{route('add-staff')}}" method="post">
                        @csrf
                        <input type="hidden" name="departmentId" value="{{$department->id}}" />
    
                        <h6>Title,and full name</h6>
                        <input type="text" class="form-control" name="name" />
                        <br/>
                        <h6>Role</h6>
                        <select class="form-control" name="role">
                            <option value="0">Professor</option>
                            <option value="1">Assistant</option>
                        </select>
                        <br/>
                        <div class="text-center">
                            <button type="submit" class="btn btn-danger">Add staff member</button>
                        </div>
                    </form>
                </div> <!-- add staff tab -->
            @endif

            
        </div><!-- end of sub row -->

    </div><!-- main col end -->
</div><!-- main row end -->
@endsection

