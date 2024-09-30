@extends('layouts.admin.app')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Faq</h1>
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
                                <h3 class="card-title">Faq</h3>
                            </div>

                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Question</th>
                                            <th>Answer</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($result as $key => $value)
                                        <tr>
                                            <td>{{$value->question}}</td>
                                            <td>
                                                {{$value->answer}}
                                            </td>
                                      <td>
                                        <a href="{{ url('admin/faq-edit/'.$value->id)}}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                                        <a href="{{ url('admin/faq-delete/'.$value->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
