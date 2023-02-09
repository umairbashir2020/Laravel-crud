@extends('templete.public')
@section('title', 'Welcome Page')
@section('content')


    <h2 class="my-3">All Registered students</h2>
    <a href="" class="btn btn-primary mb-2 btn-em " data-toggle="modal" data-target="#myModal">Add new Student</a>
    <br>
    {{-- bootstrap model  --}}
    <!-- Trigger the modal with a button -->
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Now Student</h4>
                </div>
                {{-- cmodel body  --}}
                <div class="modal-body">
                    <form method="post" action="{{ URL::to('/add-student') }}">
                            @csrf
                        <label for="">
                            student Name:
                            <input type="text" name="name" id="name" class="form-control">
                        </label>
                        <label for="">
                            DOB:
                            <input type="date" name="dob" id="dob" class="form-control">
                        </label>
                        {{-- <label for="">
                            Addres:
                            <textarea name="address" class="form-control"></textarea>
                        </label> --}}

                        <label for="">
                            Gender
                            <input type="radio" name="gender" value="1">Male
                            <input type="radio" name="gender" value="2">female
                        </label>
                        <input type="submit" value="Register Student" class="btn btn-primary btn-block">
                    </form>
                </div>
                <style>
                    label {
                        width: 100%;
                    }
                </style>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    {{-- <Table class="lable lable-bordered lable-striped lable-hover lable-sm" ></Table> --}}


    {{-- Display db data --}}

    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>DOb</th>
                {{-- <td>Father Name</td> --}}
                {{-- <th>Address</th> --}}
                <th>Gender</th>
                <td>Operations</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    {{-- <td>{{ $student->fatherName }}</td> --}}
                    <td>{{ $student->dob }}</td>
                    {{-- <td>{{ $student->address }}</td> --}}

                    <td>{{ $student->gender == 1 ? 'male' : 'female' }}</td>
                    <td>
                        <a href="{{ URL::to('/edit/') }}/{{$student->id}}" class="btn btn-primary">Edit</a>
                        <a href="{{ URL::to('/remove/' . $student->id) }}" class="btn btn-danger">Delete</a>
                        {{-- {{ URL::to('/remove/' . $student->id)  }} --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection


















































<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel-Crud</title>
</head>
<style>
    body{
        text-align:"center";
    }
</style>
<body>

    <h2>Laravel Crud</h2>
<form action="post">
    <label for="">Name</label>
    <input type="text">
    <Label>Address</Label>
    <input type="text">
    <label for="">DoB</label>
    <input type="number" name="" id="">
<button type="submit">Submit</button>
</form>
</body>
</html> -->
