@extends('layouts.adminlay')
@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">  Slider Table</h3>

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
                            <th>Title</th>
                            <th>العنوان</th>
                            <th>Description</th>
                            <th>الوصف</th>
                            <th>Action</th>
                        </tr>

                        @foreach($slider as $row)
                            <tr>

                                <td><span>{{$row->title}}</span></td>
                                   <td> <span>{{$row->title_ar}}</span>
                                </td>
                                <td>{{$row->description}}</td>
                                <td>{{$row->description_ar}}</td>
                                <td>
                                    <a  href="/del_slider/{{$row->id}}"><i class="fa fa-trash text-danger"></i> </a>
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
                                                <form role="form" action="/up_slider/{{$row->id}}" method="post" enctype="multipart/form-data" >
                                                    <div class="modal-body">

                                                        {{csrf_field()}}
                                                        <div class="box-body">
                                                            <div class="form-group">

                                                            <div class="form-group">
                                                                <label for="exampleInputPassword1"> Title</label>
                                                                <input type="text" class="form-control"  name="title" value="{{$row->title}}" id="exampleInputPassword1" placeholder="Enter.....">
                                                            </div>
                                                            <div class="form-group "  dir="rtl">
                                                                <label for="exampleInputPassword1" dir="rtl"> العنوان  </label>
                                                                <input type="text" class="form-control" name="title_ar" value="{{$row->title_ar}}"  id="exampleInputPassword1" placeholder="Enter.....">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputPassword1"> Description</label>
                                                                <textarea type="text" class="form-control"  name="des" id="exampleInputPassword1" placeholder="Enter.....">{{$row->description}}</textarea>
                                                            </div>


                                                            <div class="form-group"  dir="rtl">
                                                                <label for="exampleInputPassword1" > الوصف </label>
                                                                <textarea type="text" class="form-control"  name="des_ar" id="exampleInputPassword1" placeholder="Enter.....">{{$row->description_ar}}</textarea>

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
    <span><a href="/create_slider" class="btn btn-success"><i class="fa fa-plus">Add</i> </a> </span>


@endsection