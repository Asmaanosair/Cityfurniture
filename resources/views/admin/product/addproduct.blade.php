

@extends('layouts.adminlay')
@section('content')


    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title">General Elements</h3>
        </div>
        <!-- /.box-header -->
        <section class="content">

            <div >
                <form role="form" action="/add_product" method="post" enctype="multipart/form-data" >
                    {{csrf_field()}}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputPassword1"> Product_Name</label>
                            <input type="text" class="form-control"  name="name" id="exampleInputPassword1" placeholder="Link">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" dir="rtl"> اسم المنتج  </label>
                            <input type="text" class="form-control" name="name_ar" id="exampleInputPassword1" placeholder="Link">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"> Price</label>
                            <input type="text" class="form-control"  name="price" id="exampleInputPassword1" placeholder="Link">
                        </div>


                        <div class="form-group">
                            <label for="exampleInputPassword1" > Image </label>
                            <input type="file" rows="6" class="form-control" value=" "   name="img" id="exampleInputPassword1" placeholder="Link">

                        </div>


                        <!-- /.box-body -->

                        <button type="submit" class="btn btn-warning btn-block">Add</button>
                    </div>
                </form>


            </div>




        </section>
        <!-- /.box-body -->
    </div>

@endsection


