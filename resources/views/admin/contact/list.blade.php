@extends('layouts.admin.app')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Contact</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"><a href="#"> Contact</a></li>
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
                                <h3 class="card-title">Contact</h3>
                            </div>

                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($result as $key => $value)
                                            
                                        <tr>
                                            <td>{{$value->name}}</td>
                                            <td>{{$value->email}} </td>
                                            <td>{{$value->Subject}} </td>
                                            <td>{{$value->message}} </td>
                                      <td>
                                        {{-- <a href="{{ url('admin/blog-edit/'.$value->id)}}">edit</a> --}}
                                        <a href="{{ url('admin/contact-delete/'.$value->id)}}">Delete</a>
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
