@extends('members.layouts')

@section('content')
<div class = "row">
    <div class= "col-lg-12 margin-tb">
      <div class = "pull-left"><h2>Laravel 7 CRUD</h2></div>
      <div class = "float-right">
      <a href="{{ route('members.create')}}" class = "btn btn-danger"> สร้างข้อมูลใหม่</a>
      </div>
    </div>
</div>

   @if($message = Session::get('success'))
     <div class= "alert alert-success">
         <p>{{ $message }}</p>
     </div>

   @endif

  <hr/>
  <table class = "table table-bordered">
    <thead>
      <tr>
        <th>ลำดับที่</th>
        <th>ชื่อ</th>
        <th>เบอร์โทรติดต่อ</th>
        <th>จัดการ</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($members as $member)
        
        <tr>
          <td>{{ ++$i }}</td>
          <td>{{ $member->name }}</td>
          <td>{{ $member->tel }}</td>
          <td>
          <form action = "{{ route('members.destroy',$member->id) }}" method="POST">
          <a href = "{{ route('members.show',$member->id) }}" class = "btn btn-info">ดูข้อมูล</a>
          <a href = "{{ route('members.edit',$member->id) }}" class = "btn btn-primary">แก้ไข</a>

          @csrf
          @method('DELETE')
          <button class = "btn btn-danger" onclick="return confirm('ยืนยันการลบข้อมูลหรือไม่!!!')">ลบ</button>

          </form>
          </td>
        </tr>
      @endforeach
    </tbody>
       
  </table>

  {!! $members->links() !!}
@endsection