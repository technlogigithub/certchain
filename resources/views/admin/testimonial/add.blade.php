@extends('layouts.admin.app')

@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Testimonial</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Testimonial</a></li>
                            <li class="breadcrumb-item active">Add Testimonial</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <form   action="{{url('admin/testimonial-store')}}"  method="POST" >
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="name">
                                    </div>
                                    <div class="form-group">
                                        <label>Post</label>
                                        <input type="text" name="post" class="form-control" placeholder="Post">
                                    </div>
                                    <div class="form-group">
                                        <label>Company name</label>
                                        <input type="text" name="company_name" class="form-control" placeholder="Company name">
                                    </div>
                                    <div class="form-group">
                                        <label>Descrption</label>
                                        <input type="text" name="descrption" class="form-control" placeholder="Descrption">
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
