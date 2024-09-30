@extends('layouts.admin.app')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Blog</h1>
                    </div>
                 
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Blog</h3>
                            </div>

                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($result as $key => $value)
                                            
                                        <tr>
                                            <td>{{$value->name}}</td>
                                            <td>
                                                <img src="{{ asset('media/blog/'.$value->image) }}" alt="" class="elevation-2" style="width:4rem;">
                                            </td>
                                      <td>
                                        <a href="{{ url('admin/blog-edit/'.$value->id)}}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                                        <a href="{{ url('admin/blog-delete/'.$value->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                      </td>
                                        </tr>
                                        @endforeach
                                       
                                </table>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </section>

    </div>
@endsection
