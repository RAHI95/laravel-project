@extends('welcome')
@section('content')
 <div class="container">
   <div class="row">
     <div class="col-lg-8 col-md-10 mx-auto">


       	<a href="{{ route('all.student') }}" class="btn btn-info">All student</a>

      <hr>
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
       @endif
       <form action="{{ route('store.student') }}" method="post">
       	@csrf
         <div class="control-group">
           <div class="form-group floating-label-form-group controls">
             <label>student Name</label>
             <input type="text" class="form-control" placeholder="student Name" name="name"  >
           </div>
         </div>
         <div class="control-group">
           <div class="form-group floating-label-form-group controls">
             <label>email</label>
             <input type="email" class="form-control" placeholder="email" name="email"  >
           </div>
         </div>
         <div class="control-group">
           <div class="form-group floating-label-form-group controls">
             <label>phone</label>
             <input type="number" class="form-control" placeholder="phone" name="phone"  >
           </div>
         </div>
         <br>
         <div class="form-group">
           <button type="submit" class="btn btn-primary" >Submit</button>
         </div>
       </form>
     </div>
   </div>
</div>
@endsection
