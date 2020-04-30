

@extends('layouts.sitelay')

@section('content')


    <div class="container">
        <div class="banner-bottom">
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        @foreach($slider as $row)
                        <li>
                            <div class="banner-bottom-text">


                                @if(Config::get('app.locale') == 'en')
                                    <h3>{{$row->title}}</h3>
                                    <p>{{$row->description}}.</p>
                                @elseif(Config::get('app.locale') == 'ar')
                                    <h3>{{$row->title_ar}}</h3>
                                    <p>{{$row->description_ar}}.</p>
                                @endif


                            </div>
                        </li>
                        @endforeach


                    </ul>
                </div>
                <div class="clearfix"> </div>
            </section>

        </div>
    </div>
    </div>
    </div>
    </div>
    <!--banner end here-->
    <div class="about-us" id="aboutt">
        <div class="container">
            <h2 class="tittle-agileinfo">@lang('home.about')<span>@lang('home.city') </span></h2>
            <p>
                @lang('home.city1')

            </p>
        </div>
    </div>
    <!-- about -->
    <div class="about" id="about">
        <div class="about-left">
            <h2>@lang('home.about our') <span>@lang('home.work')</span></h2>
            <p>
              @lang('home.aboutour2')

            </p>
        </div>
    </div>
    <!-- //about-bottom -->

    <!--property -->
    <div class="property" id="property">
        <div class="container">
            <div class="tittle-agileinfo">
                <h3><span> @lang('home.product')</span></h3>

            </div>


                @foreach($product as $row)
                <div class="col-md-4 team-grid">
                    <div class="team-img">
                        <img src="img/{{$row->img}}" class="img-responsive" alt=" " />
                        <figcaption class="overlay">
                            <a href="#"  data-toggle="modal" data-target="#myModal{{$row->id}}">@lang('home.read')</a>
                        </figcaption>
                    </div>

                    <div class="prop-btm-w3ls">
                        <h4>  @if(Config::get('app.locale') == 'en'){{$row->name}}

                            @else
                                {{$row->name_ar}}
                            @endif<span>${{$row->price}}</span></h4>

                    </div>

                </div>
                @endforeach
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

    @foreach($product as $row)
    <div class="modal fade" id="myModal{{$row->id}}" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>@lang('home.city')</h4>
                    <img src="img/{{$row->img}}" alt=" " class="img-responsive">
                    <h5>@lang('home.sale')</h5>

                    <div class="prop-btm-w3ls">
                        <h4> @if(Config::get('app.locale') == 'en'){{$row->name}}

                            @else
                                {{$row->name_ar}}
                            @endif

                            <span>${{$row->price}}</span></h4>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- //Modal2 -->

    <!-- //property -->


    <!-- newsletter -->
    <div class="agileits_w3layouts newsletter">
        <div class="col-md-4 news-left">
            <h3>@lang('home.subes')<span>@lang('home.new')</span></h3>
        </div>
        <div class="col-md-8 news-right">
            <form action="/sub" method="post">
                {{csrf_field()}}
                <input class="email" type="email" name="Email" placeholder="@lang('home.mail')" required="">
                <input type="submit" value="@lang('home.submit')">
            </form>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!-- //newsletter -->

    <!-- contact -->
    <div class="contact" id="contact">
        <div class="container">
            <div class="tittle-agileinfo">
                <h3>@lang('home.contact2') <span>@lang('home.us')</span></h3>
            </div>
            <div class="agile-contact-grids">
                <div class="col-md-6 agile-contact-left">
                    <div class="address-grid">
                        <h4> @lang('home.address')</h4>
                        <ul class="w3_address">
                            @foreach($con as $row)
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i><span>
                                    @if(Config::get('app.locale') == 'en') {{$row->address}}

                                    @else
                                        {{$row->address_ar}}
                                    @endif
                                   </span></li>
                            <li><i class="fa fa-mobile" aria-hidden="true"></i>{{$row->phone}}</li>
                              <li><i class="fa fa-mobile" aria-hidden="true"></i>{{$row->phone1}}</li>
                                 <li><i class="fa fa-mobile" aria-hidden="true"></i>{{$row->whats}}</li>
                            <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="{{$row->email}}">{{$row->email}}</a></li>
                           
                                @endforeach
                        </ul>
                    </div>
                    <div class="contact-form">
                        <h4>@lang('home.contact') </h4>
                        <form action="/send" method="post">
                            {{csrf_field()}}
                            <div class="styled-input agile-styled-input-top">
                                <input type="text" name="name" required="">
                                <label>@lang('home.name')</label>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <input type="email" name="email" required="">
                                <label>@lang('home.mail')</label>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <input type="text" name="Subject" required="">
                                <label>@lang('home.sub')</label>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <textarea name="msg" required=""></textarea>
                                <label>@lang('home.mess')</label>
                                <span></span>
                            </div>
                            <input type="submit" value="@lang('home.send')">
                        </form>
                    </div>
                </div>
                <div class="col-md-6 agile-contact-right">
                    <div class="agileits-map">
                        <h4> @lang('home.loc')</h4>
                    </div>
                    <div class="map-grid">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3539.8126292789925!2d153.01415501513935!3d-27.475092082888686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b915a0835840a2f%3A0xdd5e3f5c208dc0e1!2sMelbourne+St%2C+South+Brisbane+QLD+4101%2C+Australia!5e0!3m2!1sen!2sin!4v1486377281850" ></iframe>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //contact -->
    @endsection()