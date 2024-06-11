@extends('layouts.adminapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                <div class="card-header"> <a href="{{ route('school.create')
}}"> เพิ่มข้อมูล</a> </div>

 <div class="card-body">
 <div class="col-md-12">
 <table class="table table-borderd">
 <tr>
 <th>No.</th>
 <th>ชื่อสถานศึกษา</th>
 <th>อำเภอ</th>
 <th>จังหวัด</th>
 <th>รหัสไปรษณีย์</th>
 <th>โทรศัพท์</th>
 <th>Action</th>
 </tr>
 @foreach ($data as $key =>$value)
 <tr>
 <td>{{ ++$i }}</td>
 <td>{{ $value->sc_name}}</td>
 <td>{{ $value->sc_amp}}</td>
 <td>{{ $value->sc_prove}}</td>
 <td>{{ $value->sc_zipcode}}</td>
 <td>{{ $value->sc_tel}}</td>
 <td>
    <form action="{{ route('school.destroy', $value->id)}}" method="post">
        <a href="{{ route('school.show', $value->id) }}" class="btn btn-primary">Show</a>
         <a href="{{ route('school.edit', $value->id) }}" class="btn btn-secondary">Edit</a>
        @csrf
        @method('DELETE')
        <button type ="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?');">Delete</button>
        </form>

 </td>


 </tr>
 @endforeach
 </table>

 </div>
                   



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
