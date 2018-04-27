@extends('layouts.default')

@section('maincontent')

<div class="row">
    <div class="col-md-12 bkg-gold text-center extra-padding-25">
        @if(Session::has('completed'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                <p>Task completed successfully!</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
        @endif
            <div class="row">
                    <div class="col-md-10 mx-auto">
                            <h3 class="float-left">IBU Study Curricula</h3>
                    </div>
                    <div class="col-md-2">
                            <a href="{{route('cpanel')}}" class="btn btn-outline-danger">Control Panel</a>
                        </div>


            </div>
            <hr/>
            <h4>Choose a department to begin</h4>
            <form action="{{route('next')}}" method="post">
                @csrf
                <div class="form-row">
                    <div class="col-md-6 mx-auto text-center">
                        <select name="department" class="form-control">
                            @foreach($departments as $department)
                            <option value="{{$department->id}}">{{$department->name}}</option>
                            @endforeach
                        </select>
                        <br/>
                        <button type="submit" class="btn btn-danger">Continue</button>
                    </div>
                </div>

            </form>
    </div>
</div>

@endsection