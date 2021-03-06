<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GhCare | Patients Portal</title>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-around">
            <div class="col-md-7">
                <div class="row justify-content-center my-5">
                    <img src="/img/ghcare.png" class="img img-fluid" width="90%">
                </div>
                <div class="row justify-content-start gh-service-row">
                    <img src="/img/ghana-health-service.png" class="img img-fluid" width="180px">
                </div>
            </div>
            <div class="col-md-5 d-flex align-items-center" style="height: 70vh;">
                
                <div>
                    <p class="h5 text-success">
                        This is a Free Portal For All Ghanaian Citizens.
                        Anyone Can Access Their Medical Information Using Their Ghana National Card ID.
                        Or Register Onto The GhCare Platform to Centralize Your Medical Records. 
                    </p>
                    <br><br><br><br>
                    <a href="{{route('login')}}" class="btn btn-danger w-50" style="border-radius: 25px;">
                        Next to Access Info &emsp;<i class="fa fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>