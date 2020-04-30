

@extends('layouts.adminlay')
@section('content')


    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title">General Elements</h3>
        </div>
        <!-- /.box-header -->
        <section class="content">

            <div >
                <form role="form" action="/add_slider" method="post" enctype="multipart/form-data" >
                    {{csrf_field()}}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputPassword1"> Title</label>
                            <input type="text" class="form-control"  name="title" id="exampleInputPassword1" placeholder="Enter.....">
                        </div>
                        <div class="form-group "  dir="rtl">
                            <label for="exampleInputPassword1" dir="rtl"> العنوان  </label>
                            <input type="text" class="form-control" name="title_ar" id="exampleInputPassword1" placeholder="Enter.....">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"> Description</label>
                            <textarea type="text" class="form-control"  name="des" id="exampleInputPassword1" placeholder="Enter....."></textarea>
                        </div>


                        <div class="form-group"  dir="rtl">
                            <label for="exampleInputPassword1" > الوصف </label>
                            <textarea type="text" class="form-control"  name="des_ar" id="exampleInputPassword1" placeholder="Enter....."></textarea>

                        </div>


                        <!-- /.box-body -->

                        <button type="submit" class="btn btn-success btn-block">Add</button>
                    </div>
                </form>


            </div>




        </section>
        <!-- /.box-body -->
    </div>

@endsection


