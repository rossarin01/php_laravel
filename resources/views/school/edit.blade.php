@extends('layouts.adminapp')

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
        <div class="card-header"> <a href="{{ route('school.create')
        }}"> เพิ่มข้อมูล</a> </div>

        <div class="card-body">
        <div class="col-md-12">
        <form action="{{ route('school.update', $school->id) }}"
        method="post">
        @csrf
        @method('PUT')
        <div class="row">
        <div class="col-md-5">
        <div class="form-group">
        <strong>รหัสสถานศึกษา</strong>
        <input type="text" value="{{ $school->sc_id }}" name="sc_id"
        class="form-control" placeholder="">
        <strong>ชื่อสถานศึกษา</strong>
        <input type="text" value="{{ $school->sc_name }}" name="sc_name"
        class="form-control" placeholder="">
        <strong>ที่อยู่</strong>
        <input type="text" value="{{ $school->sc_address }}"
        name="sc_address" class="form-control" placeholder="">
        <strong>ตำบล</strong>
        <input type="text" value="{{ $school->sc_tambon }}"
        name="sc_tambon" class="form-control" placeholder="">
        <strong>อำเภอ</strong>
        <input type="text" value="{{ $school->sc_amp }}" name="sc_amp"
        class="form-control" placeholder="">
        <strong>จังหวัด</strong>

        <input type="text" value="{{ $school->sc_prove }}"
        name="sc_prove" class="form-control" placeholder="">
        <strong>รหัสไปรษณีย์</strong>
        <input type="text" value="{{ $school->sc_zipcode }}"
        name="sc_zipcode" class="form-control" placeholder="">
        <strong>โทรศัพท์</strong>
        <input type="text" value="{{ $school->sc_tel }}" name="sc_tel"
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