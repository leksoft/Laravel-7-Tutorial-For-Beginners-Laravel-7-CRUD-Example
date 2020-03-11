@extends('members.layouts')

@section('content')
<div class = "row">
    <div class= "col-lg-12 margin-tb">
      <div class = "pull-left"><h2>Laravel 7 CRUD</h2></div>
      <div class = "float-right">
      <a href="{{ route('members.index')}}" class = "btn btn-danger"> กลับหน้าหลัก</a>
      </div>
    </div>
</div>

<div class="card">
  <div class="card-header">
    รายละเอียด
  </div>
  <div class="card-body">
    <h5 class="card-title">ชื่อ : {{ $member->name }}</h5>
    <p class="card-text">เบอร์โทรติดต่อ : {{ $member->tel }}</p>
    
  </div>
</div>


@endsection