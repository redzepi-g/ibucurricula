@extends('layouts.default')

@section('maincontent')

<div class="row">
    <div class="col-md-12 bkg-gold text-center extra-padding-25">
            <h3>IBU Study Curricula</h3>
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