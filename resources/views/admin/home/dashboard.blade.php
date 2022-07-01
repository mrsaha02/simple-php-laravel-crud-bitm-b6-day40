@extends('admin.master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if( Session::has('message') )
                        <h4 class="text-center text-danger">{{ Session::get('message') }}</h4>
                    @endif
                    <table class="table table-responsive table-bordered">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Address</th>
                            <th>Subjects</th>
                            <th>District</th>
                            <th>Date of Birth</th>
                            <th>Gender</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        @foreach($students as $student)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->phone }}</td>
                                <td>{{ $student->address }}</td>
                                <td>{{ $student->subjects }}</td>
                                <td>{{ $student->district }}</td>
                                <td>{{ $student->dob }}</td>
                                <td>{{ $student->gender }}</td>
                                <td>
                                    <img src="{{asset($student->image)}}" alt="" style="height: 100px; width: 100px">
                                </td>
                                <td>
                                    <a href="{{ route('student.edit',['id'=>$student->id]) }}" class="btn btn-sm btn-primary">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{ route('student.delete',['id'=>$student->id]) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to Delete this Student?')">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>

@endsection
