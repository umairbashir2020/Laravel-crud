@extends('templete.public')
@section('content')

@isset($message)
<div class="alert alert-success">{{$message}}</div>


@endisset
 <h2 class="my-3">Edit Registered students</h2>
    <a href="" class="btn btn-primary  " data-toggle="modal" data-target="#myModal">Edit Here</a>
    <a href="{{ URL::to('/student') }}" class="btn btn-secondary">Go Back</a>

    {{-- bootstrap model  --}}
    <!-- Trigger the modal with a button -->

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <h4 class="modal-title">Edit Student</h4>
                </div>
                {{-- cmodel body  --}}
                <div class="modal-body">
                    <form method="post" action="{{ URL::to('/update') }}/{{$EditStudent->id}}">
                            @csrf
                        <label for="">
                            student Name:
                            <input type="text" name="name" id="name" value={{$EditStudent->name}} class="form-control">
                        </label>
                        <label for="">
                            DOB:
                            <input type="date" name="dob" value={{$EditStudent->dob}} id="dob" class="form-control">
                        </label>
                        <label for="">
                            Gender :
                            <input type="radio" name="gender" value="1"  {{$EditStudent->gender==1 ? 'checked' : ''}}>Male
                            <input type="radio" name="gender" value="2" {{$EditStudent->gender==2 ? 'checked' : ''}} >female
                        </label>
                        <input type="submit" value="Update Student" class="btn btn-primary btn-block">
                        <a href="{{ URL::to('/student') }}">Go Back</a>
                    </form>
                </div>
                <style>
                    label {
                        width: 100%;
                    }
                </style>
            </div>

        </div>
    </div>


@endsection
