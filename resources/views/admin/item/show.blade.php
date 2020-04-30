@extends('layouts.adminlay')
@section('content')

    <div class="row">
         <a class='btn btn-success' href='/cr_item'>Add new Item</a>
        <div class="col-xs-12">
            <div class="box">
                <div class="box-tools text-right" >
                    {{$item->links()}}
                </div>
                <div class="box-header text-left">
                    <h3 class="box-title">  Items Table</h3>

                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">

                        <tr>
                            <th>الكود</th>
                            <th>الاسم</th>
                            <th>الصوره</th>
                            <th>Action</th>
                        </tr>
                        @foreach($item as $row)
                            <tr>
                                <td>{{$row->id}}</td>
                                <td><span>{{$row->name}}</span>
                                    <span>{{$row->name_ar}}</span>
                                </td>
                                <td><img src="img/{{$row->img}}" width="50" height="50"></td>
                                <td>
                                    <a  href="/del_item/{{$row->id}}"><i class="fa fa-trash text-danger"></i> </a>
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
                                                <form role="form" action="/up_item/{{$row->id}}" method="post" enctype="multipart/form-data" >
                                                    <div class="modal-body">

                                                        {{csrf_field()}}
                                                        <div class="box-body">
                                                        
                                                            <div class="form-group">
                                                                <label for="exampleInputPassword1" dir="rtl"> اسم المنتج  </label>
                                                                <input type="text" class="form-control" name="name_ar" id="exampleInputPassword1" value="{{$row->name_ar}}" placeholder="Link">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputPassword1"> القسم</label>

                                                                <select type="text" class="form-control"  name="sel">
                                                                    <option value="{{$row->product_id}}">------</option>
                                                                    @foreach($product as $row2)
                                                                    <option value="{{$row2->id}}">{{$row2->name}} . {{$row2->name_ar}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>


                                                            <div class="form-group">
                                                                <label for="exampleInputPassword1" > الصوره </label>
                                                                <input type="file" rows="6" class="form-control"   name="img" id="exampleInputPassword1" placeholder="Link">
                                                                <img src="img/{{$row->img}}" width="100px" height="100px">

                                                            </div>
                                                            <!-- /.box-body -->
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">اغلاق</button>
                                                        <button type="submit" class="btn btn-outline">حفظ </button>
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