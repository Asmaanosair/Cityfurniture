

@extends('layouts.adminlay')
@section('content')


    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title">General Elements</h3>
        </div>
        <!-- /.box-header -->
        <section class="content">

            <div >
                @foreach($con as $row)
                <form role="form" action="/up_contact/{{$row->id}}" method="post" enctype="multipart/form-data" >
                    {{csrf_field()}}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputPassword1"> Address</label>
                            <input type="text" class="form-control"  name="address" id="exampleInputPassword1" placeholder="Link" value="{{$row->address}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" dir="rtl"> العنوان   </label>
                            <input type="text" class="form-control" name="address_ar" id="exampleInputPassword1" placeholder="Link"  value="{{$row->address_ar}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"> Facebook</label>
                            <input type="text" class="form-control"  name="fb" id="exampleInputPassword1" placeholder="Link"  value="{{$row->facebook}}">
                        </div>


                        <div class="form-group">
                            <label for="exampleInputPassword1" > Mobile </label>
                            <input type="text" rows="6" class="form-control"    name="ph" id="exampleInputPassword1" placeholder="Link"  value="{{$row->phone}}">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" > Mobile </label>
                            <input type="text" rows="6" class="form-control"    name="ph1" id="exampleInputPassword1" placeholder="Link"  value="{{$row->phone1}}">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" > Email </label>
                            <input type="text" rows="6" class="form-control"    name="em" id="exampleInputPassword1" placeholder="Link"  value="{{$row->email}}">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" > Phone </label>
                            <input type="text" rows="6" class="form-control" name="wh" id="exampleInputPassword1" placeholder="Link"  value="{{$row->whats}}">

                        </div>
                        



                        <!-- /.box-body -->

                        <button type="submit" class="btn btn-success btn-block">Add</button>
                    </div>
                </form>
                    @endforeach


            </div>




        </section>
        <!-- /.box-body -->
    </div>

@endsection


