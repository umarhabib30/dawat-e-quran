@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <!-- ============================================================== -->
        <!-- data table  -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">
                        Contact Us Messages
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered second" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>Sr#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($messages as $index => $message)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $message->name }}</td>
                                    <td>{{ $message->email }}</td>
                                  
                                    <td>{{ \Illuminate\Support\Str::limit($message->subject, 5, '...') }}</td>
                                    <td>{{ \Illuminate\Support\Str::limit($message->message, 5, '...') }}</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm view-details"
                                            data-subject="{{ $message->subject }}"
                                            data-message="{{ $message->message }}" data-toggle="modal"
                                            data-target="#detailsModal">
                                            View Details
                                        </button>
                                    </td>
                                   
                                </tr>
                            @endforeach

                            </tbody>

                           
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end data table  -->
        <!-- ============================================================== -->
    </div>

    <div class="modal fade" id="detailsModal" tabindex="-1" role="dialog" aria-labelledby="detailsModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailsModalLabel">Message Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><strong>Subject:</strong> <span id="modalSubject"></span></p>
                <p><strong>Message:</strong> <span id="modalMessage"></span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')

<script>
    $(document).ready(function() {
        // Event listener for the "View Details" button
        $('.view-details').on('click', function() {
            // Get the subject and message from the data attributes
            var subject = $(this).data('subject');
            var message = $(this).data('message');

            // Set the subject and message in the modal
            $('#modalSubject').text(subject);
            $('#modalMessage').text(message);
        });
    });
</script>
@endsection