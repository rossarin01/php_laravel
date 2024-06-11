@extends('layouts.Adminapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('เพิ่มข้อมูลนักศึกษา') }}</div>

                <div class="card-body">
                    
<form action="{{ route('student.store') }}" method="post">
 @csrf
<div class="container">
<div class="col-md-8">
        <div class="form-group">
            <strong>รหัสนักศึกษา</strong>
            <input type="text" name="st_id" class="form-control"
placeholder="">
            <strong>ชื่อนักศึกษา</strong>
            <input type="text" name="st_name" class="form-control"
placeholder="">
            <strong>ภาคเรียน</strong>
            <input type="text" name="st_program" class="form-control"
placeholder="">
            <strong>ที่อยู่</strong>
            <input type="text" name="st_address" class="form-control"
placeholder="">
            <strong>ตำบล</strong>
            <input type="text" name="st_tambon" class="form-control"
placeholder="">
            <strong>อำเภอ</strong>
            <input type="text" name="st_amp" class="form-control"
placeholder="">
            <strong>จังหวัด</strong>
            <input type="text" name="st_prove" class="form-control"
placeholder="">
            <strong>รหัสไปรษณีย์</strong>
            <input type="text" name="st_zipcode" class="form-control"
placeholder="">
            <strong>โทรศัพท์</strong>
            <input type="text" name="st_tel" class="form-control"
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
