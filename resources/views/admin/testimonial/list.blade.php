@extends('layouts.admin.app')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Testimonial</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"><a href="{{url('admin/add-testimonial')}}">Add Testimonial</a></li>
                        </ol>
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
                                <h3 class="card-title">Testimonial</h3>
                            </div>

                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Poat</th>
                                            <th>Company name</th>
                                            <th>Descrption</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($result as $key => $value)
                                        <tr>
                                            <td>{{$value->name}}</td>
                                            <td> {{$value->post}}</td>
                                            <td> {{$value->company_name}}</td>
                                            <td> {{$value->descrption}}</td>
                                      <td>
                                        <a href="{{ url('admin/testimonial-edit/'.$value->id)}}">edit</a>
                                        <a href="{{ url('admin/testimonial-delete/'.$value->id)}}">Delete</a>
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
