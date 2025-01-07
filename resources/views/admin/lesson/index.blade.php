@extends('admin.layouts.app')
@section('content')
    <div class="card">
        <h5 class="card-header">Add Lesson</h5>
        <div class="card-body">
            <form action="{{ route('chapter.lesson.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="chapter_id" id="" value="{{ $chapter_id }}">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="inputText3" class="col-form-label">Name</label>
                        <input id="inputText3" type="text" class="form-control" name="name" style="padding: 8px"
                            placeholder="Enter Lesson title">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputText3" class="col-form-label">Select Content Type</label>
                        <select name="content_type" id="content_select" class="form-control">
                            <option value="">--- Select Cotent Type ---</option>
                            <option value="link">Video Link</option>
                            <option value="pdf">Pdf file</option>
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


    <div class="row">
        <!-- ============================================================== -->
        <!-- data table  -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">
                        Lessons of : <b>{{ $chapter->name }}</b>
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered second" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>Sr#</th>
                                    <th>Lesson Name</th>
                                    <th>Content Type</th>
                                    <th>Content</th>
                                    <th>Action</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($lessons as $index => $lesson)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $lesson->name }}</td>
                                        <td>{{ $lesson->content_type }}</td>
                                        @if ($lesson->content_type == 'pdf')
                                         <td><a href="{{ asset($lesson->content)  }}" class="btn btn-primary" target="__blank">Read</a></td>
                                        @else
                                        <td><a href="{{ $lesson->content  }}"  class="btn btn-primary" target="__blank">Watch</a></td>
                                        @endif
                                        <td> <a href="{{route('chapter.lesson.edit',$lesson->id) }}" class="btn btn-primary">Edit</a> </td>
                                        <td> <a href="{{ route('chapter.lesson.delete',$lesson->id) }}" class="btn btn-danger">Delete</a> </td>
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
