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
    <div class="row justify-content-end mx-0 my-3 px-3">
        <div class="col-4 col-md-2">
            <form id="" action="{{route('logout')}}" method="post">
                @csrf
                <button type="submit" class="btn btn-danger w-75"><i class="fas fa-sign-out-alt"></i>&emsp;Logout</button>
            </form>
        </div>
    </div>
    <div class="row justify-content-center mx-0">
        <div class="col-10">
            <div class="row">
                <div class="col-md-8 my-2">
                    <div class="card p-0 w-100">
                        <div class="card-header bg-success text-light">Patient Profile</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3">
                                    <img src="{{auth()->user()->profile_pic ?? asset('img/placeholders/profile.png')}}" class="img img-fluid rounded">
                                </div>
                                <div class="col-9">
                                    <div class="row mb-4">
                                        <div class="col">
                                            <span class="h5 text-secondary">National Card ID:</span>&emsp;
                                            <span class="h5 text-success">{{auth()->user()->national_card_id}}</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <span class="text-secondary">Name:</span>&emsp;
                                            <span class="text-success">{{auth()->user()->lastname.' '.auth()->user()->firstname. ' ' . (auth()->user()->othernames ?? '')}}</span>
                                        </div>
                                        <div class="col-6">
                                            <span class="text-secondary">Occupation:</span>&emsp;
                                            <span class="text-success">{{auth()->user()->occupation}}</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <span class="text-secondary">Gender:</span>&emsp;
                                            <span class="text-success">{{auth()->user()->gender}}</span>
                                        </div>
                                        <div class="col-6">
                                            <span class="text-secondary">Age:</span>&emsp;
                                            <span class="text-success">{{auth()->user()->age}}</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <span class="text-secondary">Email:</span>&emsp;
                                            <span class="text-success">{{auth()->user()->email}}</span>
                                        </div>
                                        <div class="col-6">
                                            <span class="text-secondary">Phone No.:</span>&emsp;
                                            <span class="text-success">{{auth()->user()->phone_number}}</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <span class="text-secondary">Region:</span>&emsp;
                                            <span class="text-success">{{auth()->user()->region}}</span>
                                        </div>
                                        <div class="col-6">
                                            <span class="text-secondary">District:</span>&emsp;
                                            <span class="text-success">{{auth()->user()->district}}</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <span class="text-secondary">City / Town:</span>&emsp;
                                            <span class="text-success">{{auth()->user()->town}}</span>
                                        </div>
                                        <div class="col-6">
                                            <span class="text-secondary">Nearest Landmark:</span>&emsp;
                                            <span class="text-success">{{auth()->user()->landmark}}</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <span class="text-secondary">Address:</span>&emsp;
                                            <span class="text-success">{{auth()->user()->address}}</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <span class="text-secondary">Next of Kin:</span>&emsp;
                                            <span class="text-success">{{auth()->user()->next_of_kin}}</span>
                                        </div>
                                        <div class="col-6">
                                            <span class="text-secondary">Phone No.:</span>&emsp;
                                            <span class="text-success">{{auth()->user()->nok_phone_number}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="col-md-4 my-2">
                    <div class="card p-0 w-100">
                        <div class="card-header bg-success text-light">Patient Allergies & Phobia</div>
                        <div class="card-body">
                            <ul class="list-group text-success">
                                <li class="list-group-item py-1">Pollen <span class="text-secondary"> - Allergy</span></li>
                                <li class="list-group-item py-1">Acrophobia <span class="text-secondary"> - Phobia</span></li>
                                <li class="list-group-item py-1">Insect venom <span class="text-secondary"> - Allergy</span></li>
                                <li class="list-group-item py-1">Hemophobia <span class="text-secondary"> - Phobia</span></li>
                                <li class="list-group-item py-1">Milk <span class="text-secondary"> - Allergy</span></li>
                                <li class="list-group-item py-1">Hydrophobia <span class="text-secondary"> - Phobia</span></li>
                            </ul>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mx-0 my-3 mb-5">
        <div class="col-md-5 my-2">
            <div class="card p-0 w-100">
                <div class="card-header bg-success text-light">Patient Existing Conditions</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped table-sm">
                            <thead class="bg-success text-light">
                                <th>Diagnoses</th>
                                <th>Symptoms</th>
                                <th>Health Status</th>
                                <th>Date of Infection</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Covid</td>
                                    <td>Coughing, Tiredness, Headache</td>
                                    <td>Diagnosed</td>
                                    <td>03-09-2021</td>
                                </tr>
                                <tr>
                                    <td>Aluminium Hydroxide</td>
                                    <td>Coughing, Tiredness, Running stool</td>
                                    <td>Cured</td>
                                    <td>03-09-2021</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>  
            </div>
        </div>
        <div class="col-md-5 my-2">
            <div class="card p-0 w-100">
                <div class="card-header bg-success text-light">Patient Medications</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped table-sm">
                            <thead class="bg-success text-light">
                                <th scope="col">Drug</th>
                                <th scope="col">Dosage</th>
                                <th scope="col">Consumption Status</th>
                                <th scope="col">Start Date</th>
                                <th scope="col">End Date</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Paracetamol</td>
                                    <td>3 Times a Day</td>
                                    <td>In-Process</td>
                                    <td>03-09-2021</td>
                                    <td>18-09-2021</td>
                                </tr>
                                <tr>
                                    <td>Aluminium Hydroxide</td>
                                    <td>2 Times a Day</td>
                                    <td>In-Process</td>
                                    <td>03-09-2021</td>
                                    <td>18-09-2021</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</body>
</html>