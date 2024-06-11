@extends('layouts.adminapp')

        @section('content')
        <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card">
        <div class="card-header">{{ __('รายละเอียดข้อมูลสถานศึกษา :') }}</div>
        @if($message = Session::get('success'))
        <div class="alert alert-success">
        <p> {{$message}} </p>
        </div>
        @endif
        <div class="card-header"> <a href="{{ route('school.create')
        }}"> </a> </div>

        <div class="card-body">
        <div class="col-md-12">

        <h2>รายละเอียดข้อมูลสถานศึกษา</h2>
        <a href="{{ route('school.index') }}" class="btn btn-primary">Back</a>
        </div>
        </div>

        <div class="col-md-12">
        <div class="card p-3">
        <div class="card-title">
        <strong>รหัสสถานศึกษา:</strong>
        {{ $school->sc_id }}
        </div>

        <div class="card-title">
        <strong>ชื่อสถานศึกษา:</strong>
        {{ $school->sc_name }}
        </div>

        <div class="card-title">
        <strong>ที่อยู่:</strong>
        {{ $school->sc_address }}
        </div>

        <div class="card-title">

        <strong>ตำบล:</strong>
        {{ $school->sc_tambon }}
        </div>

        <div class="card-title">
        <strong>อำเภอ:</strong>
        {{ $school->sc_amp }}
        </div>

        

        <div class="card-title">
        <strong>รหัสไปรษณีย์:</strong>
        {{ $school->sc_zipcode }}
        </div>

        <div class="card-title">
        <strong>เบอร์โทรศัพท์:</strong>
        {{ $school->sc_tel }}
        </div>

        </div>

        </div>
        </div>
        </div>
        </div>
        </div>
        @endsection