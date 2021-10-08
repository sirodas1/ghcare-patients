@extends('layouts.logins')

@section('content')
<div class="col">
    <div class="row justify-content-center">
        <span class="form-header">PATIENTS PORTAL</span>
    </div>
    <br><br>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <div class="col-md-12">
                <div class="row login-input" style="">
                    <div class="col-md-1 py-2 px-1">
                        <img src="/img/id-card@2x.png" class="img img-fluid form-icons" width="50px">
                    </div>
                    <div class="col-md-11 pt-1 px-0">
                        <input id="national_card_id" type="text" class="form-control input-green" name="national_card_id" value="{{ old('national_card_id') }}" required autocomplete="national_card_id" maxlength="15" autofocus placeholder="Enter Ghana National Card ID" onclick="addHash(this)" pattern="GHA-[0-9]{9}-[0-9]" title="must be in this format GHA-XXXXXXXXX-X" >
                    </div>
                </div>
                @error('national_card_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <br><br>
        <div class="form-group mb-0">
            <div class="col-md-8 offset-md-2">
                <button type="submit" class="btn btn-danger w-100" style="border-radius: 25px;">
                    {{ __('Continue') }}
                </button>
            </div>
        </div>
    </form>
</div>

@endsection
