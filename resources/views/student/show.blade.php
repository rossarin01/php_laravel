@extends('layouts.Adminapp')

        @section('content')
        <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card">
        <div class="card-header">{{ __('ข้อมูลนักศึกษา :') }}</div>
        @if($message = Session::get('success'))
        <div class="alert alert-success">
        <p> {{$message}} </p>
        </div>
        @endif
        <div class="card-header"> <a href="{{ route('student.create')
        }}"> </a> </div>

        <div class="card-body">
        <div class="col-md-12">

        <h2>รายละเอียดข้อมูลสถานศึกษา</h2>
        <a href="{{ route('student.index') }}" class="btn btn-primary">Back</a>
        </div>
        </div>

        <div class="col-md-12">
        <div class="card p-3">
        <div class="card-title">
        <strong>รหัสนักศึกษา:</strong>
        {{ $student->st_id }}
        </div>

        <div class="card-title">
        <strong>ชื่อนักศึกษา:</strong>
        {{ $student->st_name }}
        </div>

        <div class="card-title">
        <strong>ภาคเรียน:</strong>
        {{ $student->st_program }}
        </div>

        <div class="card-title">
        <strong>ที่อยู่:</strong>
        {{ $student->st_address }}
        </div>

        <div class="card-title">

        <strong>ตำบล:</strong>
        {{ $student->st_tambon }}
        </div>

        <div class="card-title">
        <strong>อำเภอ:</strong>
        {{ $student->st_amp }}
        </div>

        

        <div class="card-title">
        <strong>รหัสไปรษณีย์:</strong>
        {{ $student->st_zipcode }}
        </div>

        <div class="card-title">
        <strong>เบอร์โทรศัพท์:</strong>
        {{ $student->st_tel }}
        </div>

        </div>

        </div>
        </div>
        </div>
        </div>
        </div>
        @endsection