@extends('members.layouts')

@section('content')

<div class = "row">
    
    <div class= "col-lg-12 margin-tb">
      <div class = "pull-left"><h2>Laravel 7 CRUD</h2></div>
      <div class = "float-right">
      <a href="{{ route('members.index')}}" class = "btn btn-danger"> กลับหน้าหลัก</a>
      </div>
   
</div> 
        @if($errors->any())
            <div class= "alert alert-danger">
                <ul>
                        @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                        @endforeach
                </ul>
            </div>
        @endif
</div>
<hr/>
    <form action = "{{ route('members.update',$member->id) }}" method="POST">
    @csrf
    @method('PUT')

  <div class="form-group">
    <label for="exampleInputEmail1">ชื่อ</label>
    <input type="text" class="form-control" name = "name" value="{{ $member->name }}">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">เบอร์โทรติดต่อ</label>
    <input type="text" class="form-control" name = "tel" value = "{{ $member->tel }}">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection