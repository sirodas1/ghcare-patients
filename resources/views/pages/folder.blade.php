<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GhCare | Patient Dashboard</title>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>
  <div class="row justify-content-between mx-0 my-3 px-3">
    <div class="col-4">
      <a href="{{route('dashboard')}}" class="text-success h5"><i class="fa fa-chevron-left"></i>&emsp;{{$folder->hospital->name}} Folder</a>
    </div>
    <div class="col-4 col-md-2">
      <form id="" action="{{route('logout')}}" method="post">
        @csrf
        <button type="submit" class="btn btn-danger w-75"><i class="fas fa-sign-out-alt"></i>&emsp;Logout</button>
      </form>
    </div>
  </div>
  <div class="row mx-4">
    <div class="col-md-12 my-2">
        <div class="card p-0 w-100">
            <div class="card-header bg-success text-light">Patient Profile</div>
            <div class="card-body">
              @if (isset($folder) && $folder->files->isNotEmpty())
              <div class="row p-2 my-3">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead class="bg-success text-light">
                      <th scope="col" nowrap="nowrap">Assigned Doctor</th>
                      <th scope="col" nowrap="nowrap">Symptoms</th>
                      <th scope="col" nowrap="nowrap">Body Temperature (°C)</th>
                      <th scope="col" nowrap="nowrap">Heart Rate (BPM)</th>
                      <th scope="col" nowrap="nowrap">Nurse's Prognosis</th>
                      <th scope="col" nowrap="nowrap">Doctor's Diagnosis</th>
                      <th scope="col" nowrap="nowrap">Health Status</th>
                      <th scope="col" nowrap="nowrap">Contagious</th>
                    </thead>
                    <tbody class="my-2">
                      @foreach ($folder->files as $file)
                        <tr class="cursor-pointer">
                          <td>{{$file->doctor->lastname.' '.$file->doctor->firstname}}</td>
                          <td>{{$file->symptoms}}</td>
                          <td>{{$file->temperature}}</td>
                          <td>{{$file->bpm}}</td>
                          <td>{{$file->prognosis}}</td>
                          <td>{{$file->diagnosis}}</td>
                          <td>{{$file->health_status}}</td>
                          <td>{{$file->contagious ? 'Yes' : 'No'}}</td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            @else
              <br><br><br>
              <div class="row justify-content-center h4 text-secondary mt-5">
                There are no Files in This Folder.
              </div>
            @endif
            </div>  
        </div>
    </div>
  </div>
</body>
</html>