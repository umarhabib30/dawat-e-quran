@extends('user.layouts.app')
@section('content')
    <div class="container-fluid contact py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <p class="fs-5 text-uppercase text-primary">Get In Touch</p>
                <h1 class="display-3">Contact For Any Queries</h1>
            </div>
            <form id="contactForm" enctype="multipart/form-data">
                @csrf
                <div class="row g-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="col-sm-6">
                        <input type="text" class="form-control bg-transparent p-3" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="col-sm-6">
                        <input type="email" class="form-control bg-transparent p-3" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control bg-transparent p-3" name="subject" placeholder="Subject" required>
                    </div>
                    <div class="col-12">
                        <textarea class="w-100 form-control bg-transparent p-3" name="message" rows="6" placeholder="Your Message" required></textarea>
                    </div>
                    <div class="col-12 text-center">
                        <button id="submitButton" class="btn btn-primary border-0 py-3 px-5" type="button">Send Message</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Success and Error Popup Messages -->
    <div id="success-popup" class="alert alert-success text-center" style="position: fixed; top: 20px; right: 20px; z-index: 1050; display: none;">
        Your message has been sent successfully!
    </div>
    <div id="error-popup" class="alert alert-danger text-center" style="position: fixed; top: 20px; right: 20px; z-index: 1050; display: none;">
        An error occurred. Please try again.
    </div>
@endsection

@section('script')
<!-- Add jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        $('#submitButton').on('click', function () {
            const formData = new FormData($('#contactForm')[0]); // Get form data

            $.ajax({
                url: "{{ route('message.store') }}", // Laravel route
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Add CSRF token
                },
                success: function (response) {
                    $('#success-popup').fadeIn();
                    setTimeout(() => {
                        $('#success-popup').fadeOut();
                    }, 3000); // Hide popup after 3 seconds
                    $('#contactForm')[0].reset(); // Reset the form
                },
                error: function (xhr) {
                    $('#error-popup').fadeIn();
                    setTimeout(() => {
                        $('#error-popup').fadeOut();
                    }, 3000); // Hide popup after 3 seconds
                }
            });
        });
    });
</script>
@endsection
