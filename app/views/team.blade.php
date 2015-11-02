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
				{{Form::open(['route' => 'teams.store', 'method'=>'POST'])}}
				<div class="form-group">
					  {{Form::text('teamname', null, ['class' => 'form-control', 'placeholder' => 'teamname'])}}
					</div>
					
					<div class="form-group">
					  {{Form::submit('Submit', ['class' => 'btn btn-success'])}}
					</div>
				{{Form::close()}}
				</div>
			</div>
		</div>	
	   </div>
    </div>	
  </div>	
  </body>
  </html>