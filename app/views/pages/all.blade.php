<!DOCTYPE html>
<html lang="en">

@include('pages.blank')


<body>

  <div id="wrapper">


    <!-- Page Content -->
    <div id="page-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">

              <h4 >Register Team Owners</h4>
              <div class="pull-right">
                {{ Form::open(['route'=>'dropdown']) }}
                <li> <select name="parent_cat" id="parent_cat">
                  <li>  @foreach($users as $team)</li>
                  <li> <option value="{{ $team->id }}">{{ $team->team }}</option></li>
                  <li> @endforeach</li>
                </select></li>
                {{Form::close()}}

              </div>
            </div>

            <div class="">

              <table class="table">
                <thead>
                  <tr>
                    <th>Names</th>
                    <th>Phone</th>
                    <th>Email</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($users as $user)
                  <tr>
                    <td>{{ $user->ownername }}</td>
                    <td>{{ $user->ownerphone }}</td>
                    <td>{{ $user->owneremail }}</td>
                    <td> 
                     <a class="btn btn-small btn-success" href="{{ route('users.edit', 
                     array($user->id)) }}">Edit</a>
                     <td> <!-- DELETE HTTP REQUEST -->
                       {{ Form::open(array('route' => array('users.destroy', $user->id), 'method' => 'delete')) }}
                       <button type="submit" class="btn btn-danger btn-mini">Delete</button>
                       {{ Form::close() }}
                     </td>
                   </tr>
                   @endforeach
                 </tbody>
               </table>

             </div>
           </div>
           <!-- /.col-lg-12 -->

         </div>
         <!-- /.row -->
       </div>
       <!-- /.container-fluid -->
     </div>
     <!-- /#page-wrapper -->

   </div>
   <!-- /#wrapper -->

   <!-- jQuery -->
   <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>

   <!-- Bootstrap Core JavaScript -->
   <script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

   <!-- Metis Menu Plugin JavaScript -->
   <script src="assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>

   <!-- Morris Charts JavaScript -->
   <script src="assets/bower_components/raphael/raphael-min.js"></script>
   <script src="assets/bower_components/morrisjs/morris.min.js"></script>
   <script src="assets/js/morris-data.js"></script>

   <!-- Custom Theme JavaScript -->
   <script src="assets/dist/js/sb-admin-2.js"></script>

   <script> $(document).ready(function() {
    $("#parent_cat").change(function() {
      $.get('loadsubcat/' + $(this).val(), function(data) {
        $("#sub_cat").html(data);
      }); 
    });

  });
 </script>

</body>


</html>
