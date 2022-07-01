@extends('admin.master')
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card card-body">
                        @if(Session::has('message'))
                            <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                        @endif
                        <form action="{{ route('student.update',['id'=>$student->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-3">
                                <label for="name" class="col-md-4">Name</label>
                                <div class="col-md-8">
                                    <input type="text" id="name" name="name" value="{{ $student->name }}" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="email" class="col-md-4">Email</label>
                                <div class="col-md-8">
                                    <input type="email" id="email" name="email" value="{{ $student->email }}" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="mobile" class="col-md-4">Mobile</label>
                                <div class="col-md-8">
                                    <input type="number" id="mobile" name="phone" value="{{ $student->phone }}" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="address" class="col-md-4">Address</label>
                                <div class="col-md-8">
                                    <textarea name="address" id="address" class="form-control" cols="30" rows="10">{{ $student->address }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">District</label>
                                <div class="col-md-8">
                                    <select name="district" id="" class="form-control" required>
                                        <option value="" disabled><--Select a district-->></option>
                                        <option value="dhaka" {{ $student->district == 'dhaka'?'selected':''}}>Dhaka</option>
                                        <option value="mymensigh" {{ $student->district == 'mymensigh'?'selected':''}}>Mymensigh</option>
                                        <option value="khulna" {{ $student->district == 'khulna'?'selected':''}}>Khulna</option>
                                        <option value="sylhet" {{ $student->district == 'sylhet'?'selected':''}}>Sylhet</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Gender</label>
                                <div class="col-md-6">
                                    <label for=""><input type="radio" name="gender" value="male" {{ $student->gender == 'male'?'checked':''}} checked>Male</label>
                                    <label for=""><input type="radio" name="gender" value="female" {{ $student->gender == 'female'?'checked':''}}>Female</label>
                                    <label for=""><input type="radio" name="gender" value="other" {{ $student->gender == 'other'?'checked':''}}>Other</label>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Date of Birth</label>
                                <div class="col-md-8">
                                    <input type="date" name="dob" class="form-control" value="{{$student->dob}}" />
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="image" class="" />
                                    <img src="{{ asset($student->image) }}" alt="" height="100" width="100">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Subjects</label>
                                <div class="col-md-8">
                                    <label for=""><input type="checkbox" name="subjects[]" value="Bangla" {{ in_array('Bangla',$subjects)?'checked':'' }}>Bangla</label>
                                    <label for=""><input type="checkbox" name="subjects[]" value="English" {{ in_array('English',$subjects)?'checked':'' }}>English</label>
                                    <label for=""><input type="checkbox" name="subjects[]" value="Math" {{ in_array('Math',$subjects)?'checked':'' }}>Math</label>
                                    <label for=""><input type="checkbox" name="subjects[]" value="Physics" {{ in_array('Physics',$subjects)?'checked':'' }}>Physics</label>
                                    <label for=""><input type="checkbox" name="subjects[]" value="Chemistry" {{ in_array('Chemistry',$subjects)?'checked':'' }}>Chemistry</label>
                                    <label for=""><input type="checkbox" name="subjects[]" value="Biology" {{ in_array('Biology',$subjects)?'checked':'' }}>Biology</label>
                                    <label for=""><input type="checkbox" name="subjects[]" value="History" {{ array_search('History',$subjects)?'checked':'' }}>History</label>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-success">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
