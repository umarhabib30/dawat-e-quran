@extends('admin.layouts.app')
@section('content')
<div class="card">
    <h5 class="card-header">Add Lesson</h5>
    <div class="card-body">
        <form action="{{ route('chapter.lesson.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="lesson_id" id="" value="{{ $lesson->id }}">

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="inputText3" class="col-form-label">Name</label>
                    <input id="inputText3" type="text" class="form-control" name="name" style="padding: 8px" value="{{ $lesson->name }}"
                        placeholder="Enter Lesson title">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputText3" class="col-form-label">Select Content Type</label>
                    <select name="content_type" id="content_select" class="form-control">
                        <option value="">--- Select Cotent Type ---</option>
                        <option value="link" @if ($lesson->content_type == 'link') selected

                        @endif>Video Link</option>
                        <option value="pdf" @if ($lesson->content_type == 'pdf') selected

                        @endif>Pdf file</option>
                    </select>
                </div>
                <div class="form-group col-md-6" id="video_div" style="display: none;">
                    <label for="inputText3" class="col-form-label">Video Link</label>
                    <input id="inputText3" type="text" class="form-control" name="video_link"
                        placeholder="Enter video link">
                </div>
                <div class="form-group col-md-6" id="pdf_div" style="display: none;">
                    <label for="inputText3" class="col-form-label">Upload PDF</label>
                    <input id="inputText3" type="file" class="form-control" name="pdf">
                </div>
            </div>

            <input type="submit" class="btn btn-primary">
        </form>
    </div>
</div>

@endsection
@section('script')
    <script>
        $(document).on('change', '#content_select', function(e) {
            e.preventDefault();
            let value = this.value;
            if (value == 'link') {
                $('#video_div').css('display', 'block');
                $('#pdf_div').css('display', 'none');
            } else if (value == 'pdf') {
                $('#video_div').css('display', 'none');
                $('#pdf_div').css('display', 'block');
            } else {
                $('#video_div').css('display', 'none');
                $('#pdf_div').css('display', 'none');
            }
        });
    </script>
@endsection
