@extends('user.layouts.app')
@section('content')
    <div class="container-fluid contact py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <p class="fs-5 text-uppercase text-primary">Get In Touch</p>
                <h1 class="display-3">Contact For Any Queries</h1>
            </div>
            <form action="{{route('message.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="col-sm-6">
                        <input type="text" class="form-control bg-transparent p-3" name="name"
                            placeholder="Your Name">
                    </div>
                    <div class="col-sm-6">
                        <input type="email" class="form-control bg-transparent p-3" name="email"
                            placeholder="Your Email">
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control bg-transparent p-3" name="subject" placeholder="Subject">
                    </div>
                    <div class="col-12">
                        <textarea class="w-100 form-control bg-transparent p-3" name="message" rows="6" cols="10"
                            placeholder="Your Message"></textarea>
                    </div>
                    <div class="col-12 text-center">
                        <button class="btn btn-primary border-0 py-3 px-5" type="submit">Send Message</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
