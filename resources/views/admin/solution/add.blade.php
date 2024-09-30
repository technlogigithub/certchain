@extends('layouts.admin.app')

@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Solution</h1>
                    </div>

                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">

                        <div class="card card-primary">
                            <form action="{{ route('admin.solution.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div  class="col-md-12">
                                            <div class="form-group">
                                                <label>Page Title</label>
                                                <input type="text" name="name"
                                                    class="form-control" placeholder="Enter Name" required>
                                            </div>
                                        </div>
                                    </div>

                                    @foreach ($page as $key => $value)

                                        <div class="row">
                                            <input type="hidden" name="data[{{ $key }}][page]"
                                                value="{{ $value['name'] }}">
                                            <div   @if ($value['media'] == true) class="col-md-6" @else class="col-md-12" @endif>
                                                <div class="form-group">
                                                    <label>{{ $value['name'] }} Title</label>
                                                    <input type="text" name="data[{{ $key }}][title]"
                                                        class="form-control" placeholder="Enter Name">
                                                </div>
                                            </div>
                                            @if ($value['media'] == true)
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>{{ $value['name'] }} Media</label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input"
                                                                name="data[{{ $key }}][media]"
                                                                id="exampleInputFile">
                                                            <label class="custom-file-label" for="exampleInputFile">Choose
                                                                file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>{{ $value['name'] }} Description</label>
                                                    <textarea name="data[{{ $key }}][description]"
                                                        @if ($key == 0) id="summernote" @else id="summernote{{ $key }}" @endif cols="30"
                                                        rows="5" class="form-control">
                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>

            </div>
        </section>

    </div>
@endsection
@section('footer_script')
    <script>
        $('#summernote1').summernote();
        $('#summernote2').summernote();
        $('#summernote3').summernote();
        $('#summernote4').summernote();
        $('#summernote5').summernote();
        $('#summernote6').summernote();
        $('#summernote7').summernote();
        $('#summernote8').summernote();
    </script>
@endsection
