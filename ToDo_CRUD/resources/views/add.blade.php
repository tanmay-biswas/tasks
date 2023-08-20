<div class="container-fluid">
   
    <div class="row">
        <!-- left column -->
  <div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Add Confirm Attendance</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form method="post" action="{{route('todo_action')}}" >
        @csrf
        <div class="card-body">

        <div class="form-group">
            <label for="name">Id</label>
            <input type="text" autocomplete="off" class="form-control" id="id" name="id" placeholder="Id">
          </div>  

          <div class="form-group">
            <label for="code">Name</label>
            <input type="text" autocomplete="off" class="form-control" id="name" name="name" placeholder="Name">
          </div>  

        <div class="form-group">
            <label for="address">Email</label>
            <input type="text" autocomplete="off" class="form-control" id="email" name="email" placeholder="Email">
          </div>  
     

    <!--
          <div class="form-group">
            <label for="exampleInputFile">Company Logo</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text">Upload</span>
              </div>
            </div>
          </div>
    -->      
         
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
           <a href="{{ route('todo_list') }}">  <button type="button" class="btn btn-primary">Go Back</button> </a>
          
        </div>
      </form>
    </div>
    <!-- /.card -->

       

  </div>
  <!--/.col (left) -->
    </div>


</div>
<!-- /.row -->


<!-- /.row -->
</div>