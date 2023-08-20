<div class="col-md-1">
  <a style="" href="{{route('todo_add')}}"><button type="button" class="btn btn-block btn-primary">Add</button></a>
</div> 
<br />
<div class="container-fluid">
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">TO DO List</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
            
            <?php
            if(!empty($todos)){
              foreach ($todos as $todo) { ?>
                
            
                <tr>
                  <td>{{$todo->id}}</td>
                  <td>{{$todo->name}}</td>
                  <td>{{$todo->email}}</td>
                  <td>
                    <a href="{{route('todo_view',$todo->id)}}"><button type="button" class="btn  btn-sm btn-primary">View</button></a>
                    <a href="{{route('todo_edit',$todo->id)}}"><button type="button" class="btn  btn-sm btn-success">Edit</button></a>
                    <a href="{{route('todo_delete',$todo->id)}}"><button type="button" class="btn  btn-sm btn-danger">Delete</button></a>
                  </td>
                </tr>

            <?php 
              }
            }
            ?>  
          
          </tfoot>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

   
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
</div>