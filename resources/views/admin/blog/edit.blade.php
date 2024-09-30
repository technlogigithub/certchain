@extends('layouts.admin.app')

@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Blog</h1>
                    </div>
                   
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <form   action="{{url('admin/blog-update')}}"  method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="hidden" name="id" value="{{$result->id}}">
                                        <input type="text" name="name" value="{{$result->name}}" class="form-control" placeholder="Enter Name">
                                    </div>

                                    <div class="form-group">
                                        <label>Image</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                          </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="descrption" value="{{$result->descrption}}" id="summernote" >{{$result->descrption}}</textarea>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <input type="submit" class="btn btn-primary" value="submit">
                                </div>
                            </form>
                        </div>

                    </div>

                </div>

            </div>
        </section>

    </div>
@endsection
