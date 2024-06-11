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
                        <div class="card-header"> <a href="{{ route('system.create') }}"> เพิ่มข้อมูลลงทะเบียน</a> </div>

                        
                        
                         <div class="card-body">
                         <div class="col-md-12">
                 <table class="table table-borderd">
                 <tr>
                 <th>No.</th>
                 <th>รหัสนักศึกษา</th>
                 <th>ชื่อนักศึกษา</th>
                 <th>รหัสวิชาลงทะเบียน</th>
                 <th>วิชาลงทะเบียน</th>
                 <th>หน่วยกิจ</th>
                 <th>อาจารย์ผู้สอน</th>

                 </tr>
                 @foreach ($data as $key =>$value)
                 <tr>
                 <td>{{ ++$i }}</td>
                 <td>{{ $value->ss_id}}</td>
                 <td>{{ $value->ss_name}}</td>
                 <td>{{ $value->ss_codecourse}}</td>
                 <td>{{ $value->ss_course}}</td>
                 <td>{{ $value->ss_credit}}</td>
                 <td>{{ $value->ss_namethec}}</td>

                 <td>
                                    <form action="{{ route('system.destroy', $value->id)}}" method="post">
                     <a href="{{ route('system.show', $value->id) }}" class="btn btn-primary">Show</a>
                     <a href="{{ route('system.edit', $value->id) }}" class="btn btn-secondary">Edit</a>
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