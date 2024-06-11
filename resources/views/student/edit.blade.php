@extends('layouts.Adminapp')

        @section('content')
        <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card">
        <div class="card-header">{{ __('MENU :') }}</div>
        @if($message = Session::get('success'))
        <div class="alert alert-success">
        <p> {{$message}} </p>
        </div>
        @endif
        <div class="card-header"> <a href="{{ route('student.create')
        }}"> เพิ่มข้อมูล</a> </div>

        <div class="card-body">
        <div class="col-md-12">
        <form action="{{ route('student.update', $student->id) }}"
        method="post">
        @csrf
        @method('PUT')
        <div class="row">
        <div class="col-md-5">
        <div class="form-group">
        <strong>รหัสนักศึกษา</strong>
        <input type="text" value="{{ $student->st_id }}" name="st_id"
        class="form-control" placeholder="">
        <strong>ชื่อนักศึกษา</strong>
        <input type="text" value="{{ $student->st_name }}" name="st_name"
        class="form-control" placeholder="">
        <strong>ภาคเรียน</strong>
        <input type="text" value="{{ $student->st_program }}" name="st_program"
        class="form-control" placeholder="">
        <strong>ที่อยู่</strong>
        <input type="text" value="{{ $student->st_address }}"
        name="st_address" class="form-control" placeholder="">
        <strong>ตำบล</strong>
        <input type="text" value="{{ $student->st_tambon }}"
        name="st_tambon" class="form-control" placeholder="">
        <strong>อำเภอ</strong>
        <input type="text" value="{{ $student->st_amp }}" name="st_amp"
        class="form-control" placeholder="">
        <strong>จังหวัด</strong>

        <input type="text" value="{{ $student->st_prove }}"
        name="st_prove" class="form-control" placeholder="">
        <strong>รหัสไปรษณีย์</strong>
        <input type="text" value="{{ $student->st_zipcode }}"
        name="st_zipcode" class="form-control" placeholder="">
        <strong>โทรศัพท์</strong>
        <input type="text" value="{{ $student->st_tel }}" name="st_tel"
        class="form-control" placeholder="">
        </div>

        </div>
        <div class="col-md-12">
        <button type="submit" class="btn btn-primary">submit</button>
        </div>
        </div>
        </form>

        </div>

        </div>
        </div>
        </div>
        </div>
        </div>
        @endsection