@extends('layouts.admin.app')

@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Faq</h1>
                    </div>
                   
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <form   action="{{url('admin/faq-store')}}"  method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Question</label>
                                        <input type="text" name="question" class="form-control" placeholder="Question">
                                    </div>
                                    <div class="form-group">
                                        <label>Answer</label>
                                        <input type="text" name="answer" class="form-control" placeholder="Answer">
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
