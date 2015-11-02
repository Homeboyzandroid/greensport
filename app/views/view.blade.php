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

							<h4 >All the Teams</h4>

							<div class="">
		                        <table class="table">
					                <thead>
					                  <tr>
					                    <th>Names</th>
					                    </tr>
					                </thead>
					                <tbody>
					                	@foreach($teams as $team)
						                  <tr>
						                    <td>{{ $team->teamname }}</td>
						                    <td> <!-- View HTTP REQUEST -->
						                       {{ Form::open(array('route' => array('players.show', $team->id), 'method' => 'get')) }}
						                       <button type="submit" class="btn btn-success btn-mini">View</button>
						                       {{ Form::close() }}
						                    </td>
						                   
						                   <td> <!-- DELETE HTTP REQUEST -->
						                       {{ Form::open(array('route' => array('teams.destroy', $team->id), 'method' => 'delete')) }}
						                       <button type="submit" class="btn btn-danger btn-mini">Delete</button>
						                       {{ Form::close() }}
						                    </td>
						                    </tr>
						                @endforeach
					                </tbody>
					             </table>   
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>        