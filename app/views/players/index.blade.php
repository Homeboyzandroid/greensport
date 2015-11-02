
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
                        <table class="table">
                            <thead>
                                <tr>
                                  <th>Names</th>
                                  <th>Age</th>
                                  <th>Location</th>
                                  <th>Photo</th>
                                </tr>
                              </thead>


                              <tbody>
                               @foreach ($players as $player)
                                <tr>
                                  <td>{{ $player->playername }}</td>
                                  <td>{{ $player->location }}</td>
                                  <td>{{ $player->age }}</td>
                                  <td>
                                      <a class="pull-left" href="#">
                                        <img class="media-object thumbnail" height="100" width="100" src="/photo/{{$player->photo}}">
                                      </a>
                                    </td>
                                    <td>
                                     <a class="btn btn-small btn-success" href="{{ route('players.edit', 
                                      array($player->id)) }}">Edit</a></td>
                                  <td> <!-- DELETE HTTP REQUEST -->
                                     {{ Form::open(array('route' => array('players.destroy', $player->id), 'method' => 'delete')) }}
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

    

</body>

</html>
