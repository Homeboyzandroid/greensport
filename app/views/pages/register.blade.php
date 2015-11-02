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
                        <h4 class="page-header">Register Team Owners</h4>

                        <div class="">
                    	<div class="form-group">
                    	 @include('errors')
                    	{{Form::open(['route' => 'register'])}}
                    	<label>Name</label>
						  {{Form::text('ownername', null, ['class' => 'form-control'])}}
						</div>
						<div class="form-group">
						<label>ID No</label>
						  {{Form::text('id_no', null, ['class' => 'form-control'])}}
						</div>
						<div class="form-group">
						<label>Location</label>
						  {{Form::text('ownerlocation', null, ['class' => 'form-control'])}}
						</div>
						<div class="form-group">
						<label>Phone Number</label>
						  {{Form::text('ownerphone', null, ['class' => 'form-control'])}}
						</div>
						<div class="form-group">
						<label>Email</label>
						  {{Form::text('owneremail', null, ['class' => 'form-control'])}}
						</div>
						<div class="form-group">
						<label>Age</label>
						  {{Form::text('ownerage', null, ['class' => 'form-control'])}}
						</div>
                        <!-- the teams dropdown -->
                        <div class="form-group">
                        <label>Select Team Name</label>
                         <select name="team_id" id="parent_cat">
                           @foreach($teams as $team)
                           <option value="{{ $team->id }}">{{ $team->teamname }}</option>
                           @endforeach
                        </select>
                        </div>
						<div class="form-group">
						  {{Form::submit('Submit', ['class' => 'btn btn-success'])}}
						</div>
						{{Form::close()}}
                    </div>
                    </div>
                    <!-- /.col-lg-12
                    
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

   

</body>

</html>
