

@extends('layouts.adminlay')
@section('content')


    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title">General Elements</h3>
        </div>
        <!-- /.box-header -->
        <section class="content">

            <div >
                <form role="form" action="{{url('/add_item')}}" method="post" enctype="multipart/form-data" >
                    {{csrf_field()}}
                    <div class="box-body">
                       
                        <div class="form-group">
                            <label for="exampleInputPassword1" dir="rtl"> اسم المنتج  </label>
                            <input type="text" class="form-control" name="name_ar" id="exampleInputPassword1" placeholder="Link">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1"> القسم</label>
                           <SELECT NAME="sel" class="form-group">
                               @foreach($product as $row2)
                               <OPTION  class="form-group" value="{{$row2->id}}">{{$row2->name}} . {{$row2->name_ar}}

                               </OPTION>
                                   @endforeach
                           </SELECT>
                        </div>



                        <div class="form-group">
                            <label for="exampleInputPassword1" > الصوره </label>
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


