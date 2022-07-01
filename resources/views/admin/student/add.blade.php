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
                        <form action="{{route('new-student')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-3">
                                <label for="name" class="col-md-4">Name</label>
                                <div class="col-md-8">
                                    <input type="text" id="name" name="name" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="email" class="col-md-4">Email</label>
                                <div class="col-md-8">
                                    <input type="email" id="email" name="email" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="mobile" class="col-md-4">Mobile</label>
                                <div class="col-md-8">
                                    <input type="number" id="mobile" name="phone" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="address" class="col-md-4">Address</label>
                                <div class="col-md-8">
                                    <textarea name="address" id="address" class="form-control" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">District</label>
                                <div class="col-md-8">
                                    <select name="district" id="" class="form-control" required>
                                        <option value="" disabled><--Select a district-->></option>
                                        <option value="dhaka">Dhaka</option>
                                        <option value="mymensigh">Mymensigh</option>
                                        <option value="khulna">Khulna</option>
                                        <option value="sylhet">Sylhet</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Gender</label>
                                <div class="col-md-6">
                                    <label for=""><input type="radio" name="gender" value="male" checked>Male</label>
                                    <label for=""><input type="radio" name="gender" value="female">Female</label>
                                    <label for=""><input type="radio" name="gender" value="other">Other</label>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Date of Birth</label>
                                <div class="col-md-8">
                                    <input type="date" name="dob" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="image" class="" />
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Subjects</label>
                                <div class="col-md-8">
                                    <label for=""><input type="checkbox" name="subjects[]" value="Bangla">Bangla</label>
                                    <label for=""><input type="checkbox" name="subjects[]" value="English">English</label>
                                    <label for=""><input type="checkbox" name="subjects[]" value="Math">Math</label>
                                    <label for=""><input type="checkbox" name="subjects[]" value="Physics">Physics</label>
                                    <label for=""><input type="checkbox" name="subjects[]" value="Chemistry">Chemistry</label>
                                    <label for=""><input type="checkbox" name="subjects[]" value="Biology">Biology</label>
                                    <label for=""><input type="checkbox" name="subjects[]" value="History">History</label>
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
