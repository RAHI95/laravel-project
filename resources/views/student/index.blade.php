@extends('welcome')
@section('content')
 <div class="container">
   <div class="row">
     <div class="col-lg-8 col-md-10 mx-auto">

       	<a href="{{ route('student') }}" class="btn btn-danger">Add student</a>

      <hr>
     	<table class="table table-responsive">
     		<tr>
     			<th>SL</th>
     			<th>student Name</th>
     			<th>phone</th>
     			<th>email</th>
     			<th>Action</th>
     		</tr>
     		@foreach($student as $row)
     		<tr>
     			<td>{{ $row->id }}</td>
     			<td>{{ $row->name }}</td>
     			<td>{{ $row->phone }}</td>
     			<td>{{ $row->email }}</td>
     			<td>
     				<a href="{{ URL::to('delete/student/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
     				<a href="{{ URL::to('view/student/'.$row->id) }}" class="btn btn-sm btn-success">View</a>
                    <a href="{{ URL::to('edit/student/'.$row->id) }}" class="btn btn-sm btn-info">Edit</a>


     			</td>
     		</tr>
     		@endforeach
     	</table>

     </div>
   </div>
</div>
@endsection
