@extends('user.layouts.app')
@section('content')
       <!-- Sermon Start -->
       <div class="container-fluid sermon py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <p class="fs-5 text-uppercase text-primary">Instructor Details</p>

            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset($instructor->image) }}" class="img-fluid w-100" alt="">
                            </div>
                            <div class="col-md-8">
                                <a href="" class="d-inline-block h4 lh-sm">{{ $instructor->name }}</a>  <small>({{ $instructor->role }}) </small>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Experience</th>
                                            <td>{{ $instructor->experience }}</td>
                                            <th>Subject</th>
                                            <td>{{ $instructor->subject }}</td>
                                        </tr>
                                    </thead>
                                </table>
                                <h4 class="mt-3 mb-3">Introduction</h4>
                                <p class="mb-0">{{ $instructor->intro }}</p>

                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
