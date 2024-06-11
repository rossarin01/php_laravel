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
        <div class="card-header"> <a href="{{ route('system.create')
        }}"> เพิ่มข้อมูล</a> </div>

        <div class="card-body">
        <div class="col-md-12">
        <form action="{{ route('system.update', $system->id) }}"
        method="post">
        @csrf
        @method('PUT')
        <div class="row">
        <div class="col-md-5">
        <div class="form-group">
        <strong>รหัสนักศึกษา</strong>
        <input type="text" value="{{ $system->ss_id }}" name="ss_id"
        class="form-control" placeholder="">
        <strong>ชื่อนักศึกษา</strong>
        <input type="text" value="{{ $system->ss_name }}" name="ss_name"
        class="form-control" placeholder="">
        <strong>รหัสวิชาลงทะเบียน</strong>
        <input type="text" value="{{ $system->ss_codecourse }}" name="ss_codecourse"
        class="form-control" placeholder="">
        <strong>วิชาลงทะเบียน</strong>
        <input type="text" value="{{ $system->ss_course }}"name="ss_course"
        class="form-control" placeholder="">
        <strong>หน่วยกิจ</strong>
        <input type="text" value="{{ $system->ss_credit }}"name="ss_credit" 
        class="form-control" placeholder="">
        <strong>อาจารย์ผู้สอน</strong>
        <input type="text" value="{{ $system->ss_namethec }}" name="ss_namethec"
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