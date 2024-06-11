@extends('layouts.Adminapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-12">
                         <div class="card">
                         <div class="card-header">{{ __('MENU') }}</div>
                         @if($message = Session::get('success'))
                        <div class="alert alert-success">
                        <p> {{$message}} </p>
                        </div>
                        @endif
                        <div class="card-header"> <a href="{{ route('student.create') }}"> เพิ่มข้อมูลนักศึกษา</a> </div>

                        
                        
                         <div class="card-body">
                         <div class="col-md-12">
                 <table class="table table-borderd">
                 <tr>
                 <th>No.</th>
                 <th>รหัสนักศึกษา</th>
                 <th>ชื่อนักศึกษา</th>
                 <th>ภาคเรียน</th>
                 <th>ที่อยู่</th>
                 <th>ตำบล</th>
                 <th>อำเภอ</th>
                 <th>จังหวัด</th>
                 <th>รหัสไปรษณีย์</th>
                 <th>โทรศัพท์</th>
                 <th>Action</th>
                 </tr>
                 @foreach ($data as $key =>$value)
                 <tr>
                 <td>{{ ++$i }}</td>
                 <td>{{ $value->st_id}}</td>
                 <td>{{ $value->st_name}}</td>
                 <td>{{ $value->st_program}}</td>
                 <td>{{ $value->st_address}}</td>
                 <td>{{ $value->st_tambon}}</td>
                 <td>{{ $value->st_amp}}</td>
                 <td>{{ $value->st_prove}}</td>
                 <td>{{ $value->st_zipcode}}</td>
                 <td>{{ $value->st_tel}}</td>
                 <td>
                                    <form action="{{ route('student.destroy', $value->id)}}" method="post">
                     <a href="{{ route('student.show', $value->id) }}" class="btn btn-primary">Show</a>
                     <a href="{{ route('student.edit', $value->id) }}" class="btn btn-secondary">Edit</a>
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