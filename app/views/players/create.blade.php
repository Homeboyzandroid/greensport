<!DOCTYPE html>
<html lang="en">

@include('pages.blank')

<body>

    <div id="wrapper">

        <!-- Navigation -->
       
             <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="page-header">Register Team Owners</h4>

                        <div class="">
                        <div class="form-group">
                         @include('errors')
                        {{Form::open(['route' => 'players.store', 'method'=>'POST', 'files' => True])}}
                        <label>Name</label>
                          {{Form::text('playername', null, ['class' => 'form-control'])}}
                        </div>
                        <div class="form-group">
                        <label>Location</label>
                          {{Form::text('location', null, ['class' => 'form-control'])}}
                        </div>
                        <div class="form-group">
                        <label>Phone Number</label>
                          {{Form::text('phone', null, ['class' => 'form-control'])}}
                        </div>
                        <div class="form-group">
                        <label>Email</label>
                          {{Form::text('email', null, ['class' => 'form-control'])}}
                        </div>
                        <div class="form-group">
                        <label>Age</label>
                          {{Form::text('age', null, ['class' => 'form-control'])}}
                        </div>
                        <div class="form-group">
                        <label>Team Owner Name</label>
                          {{Form::text('teamowner', null, ['class' => 'form-control'])}}
                        </div>
                        <div class="form-group">
                        <label>ID Copy</label>
                          {{Form::file('id_copy', null, ['class' => 'form-control'])}}
                        </div>
                        <div class="form-group">
                        <label>Photo</label>
                          {{Form::file('photo', null, ['class' => 'form-control'])}}
                        </div>
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
    
</body>

</html>
