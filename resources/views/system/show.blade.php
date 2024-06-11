@extends('layouts.Adminapp')

        @section('content')
        <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card">
        <div class="card-header">{{ __('ข้อมูลลงทะเบียน :') }}</div>
        @if($message = Session::get('success'))
        <div class="alert alert-success">
        <p> {{$message}} </p>
        </div>
        @endif
        <div class="card-header"> <a href="{{ route('system.create')
        }}"> </a> </div>

        <div class="card-body">
        <div class="col-md-12">

        <h2>รายละเอียดข้อมูล</h2>
        <a href="{{ route('system.index') }}" class="btn btn-primary">Back</a>
        </div>
        </div>

        <div class="col-md-12">
        <div class="card p-3">
        <div class="card-title">
        <strong>รหัสนักศึกษา:</strong>
        {{ $system->ss_id }}
        </div>

        <div class="card-title">
        <strong>ชื่อนักศึกษา:</strong>
        {{ $system->ss_name }}
        </div>

        <div class="card-title">
        <strong>รหัสวิชาลงทะเบียน:</strong>
        {{ $system->ss_codecourse }}
        </div>

        <div class="card-title">
        <strong>วิชาลงทะเบียน:</strong>
        {{ $system->ss_course }}
        </div>

        <div class="card-title">

        <strong>หน่วยกิจ:</strong>
        {{ $system->ss_credit }}
        </div>

        <div class="card-title">
        <strong>อาจารย์ผู้สอน:</strong>
        {{ $system->ss_namethec }}
        </div>

        </div>

        </div>

        </div>
        </div>
        </div>
        </div>
        </div>
        @endsection