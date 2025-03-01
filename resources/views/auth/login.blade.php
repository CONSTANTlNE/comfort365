@extends('site.components.layout')

@section('login')

    <div class="rts-contact-wrapper-form-area rts-section-gapBottom">
        <div class="container">
            <div class="d-flex justify-content-center">

                <div class="col-lg-6 col-md-12 col-sm-12 col-6">
                    <div class="form--area">
                        <form action="{{route('login')}}" method="post" class="contact-page-form mt--30">
                            @csrf
                            <input class="mb-3 " name="email" type="email" placeholder="მეილი">
                             @error('email')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input type="text" name="password" placeholder="პაროლი">
                            @error('password')
                            <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <button class="rts-btn btn-primary mt-3">ავტორიზაცია</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection