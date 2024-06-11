@extends('layouts.Adminapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('เพิ่มข้อมูลลงทะเบียน') }}</div>

                <div class="card-body">
                    
<form action="{{ route('system.store') }}" method="post">
 @csrf
<div class="container">
<div class="col-md-8">
        <div class="form-group">
            <strong>รหัสนักศึกษา</strong>
            <input type="text" name="ss_id" class="form-control"
placeholder="">
            <strong>ชื่อนักศึกษา</strong>
            <input type="text" name="ss_name" class="form-control"
placeholder="">
            <strong>รหัสวิชาลงทะเบียน</strong>
            <input type="text" name="ss_codecourse" class="form-control"
placeholder="">
            <strong>วิชาลงทะเบียน</strong>
            <input type="text" name="ss_course" class="form-control"
placeholder="">
            <strong>หน่วยกิจ</strong>
            <input type="text" name="ss_credit" class="form-control"
placeholder="">
            <strong>อาจารย์ผู้สอน</strong>
            <input type="text" name="ss_namethec" class="form-control"
placeholder="">

             </div>
         </div>
    </div>
    <div class="container">         
         <button type="submit" class="btn btn-primary">submit</button>
        </div>


    </form>
        
         



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
