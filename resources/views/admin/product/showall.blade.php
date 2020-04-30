@extends('layouts.adminlay')
@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">  Products Table</h3>

                    <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">

                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Reason</th>
                        </tr>

                        @foreach($product as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td><span>{{$row->name}}</span>
                                <span>{{$row->name_ar}}</span>
                            </td>
                            <td><img src="img/{{$row->img}}" width="100" height="100"></td>
                            <td>{{$row->price}}$</td>
                            <td>
                                <a  href="/del_product/{{$row->id}}"><i class="fa fa-trash text-danger"></i> </a>
                                <a  href="#" data-toggle="modal" data-target="#modal-success{{$row->id}}"><i class="fa fa-edit text-success"></i> </a>
                                <!-- /.modal -->

                                <div class="modal modal-success fade" id="modal-success{{$row->id}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title">Success Modal</h4>
                                            </div>
                                            <form role="form" action="/up_product/{{$row->id}}" method="post" enctype="multipart/form-data" >
                                            <div class="modal-body">

                                                    {{csrf_field()}}
                                                    <div class="box-body">
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1"> Product_Name</label>
                                                            <input type="text" class="form-control"  name="name" id="exampleInputPassword1" value="{{$row->name}}" placeholder="Link">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1" dir="rtl"> اسم المنتج  </label>
                                                            <input type="text" class="form-control" name="name_ar" id="exampleInputPassword1" value="{{$row->name_ar}}" placeholder="Link">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1"> Price</label>
                                                            <input type="text" class="form-control"  name="price" id="exampleInputPassword1" value="{{$row->price}}" placeholder="Link">
                                                        </div>


                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1" > Image </label>
                                                            <input type="file" rows="6" class="form-control"   name="img" id="exampleInputPassword1" placeholder="Link">
                                                            <img src="img/{{$row->img}}" width="100px" height="100px">

                                                        </div>
                                                        <!-- /.box-body -->
                                                    </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-outline">Save changes</button>
                                            </div>
                                            </form>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->


                            </td>


                        </tr>
                            @endforeach



                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>


@endsection