@extends('layouts.layouts')
@section('title', 'Du Lịch Bụi')
@section('content')

<div class="index-page">


    <div class="header header-filter" style="background-image: url('assets/img/bg2.jpeg');">
        <div class="section" id="carousel">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div style="text-align: center; color: white">
                            <h1>Du Lịch Bụi</h1>
                            <h3>Thỏa Lòng Đam Mê Tuổi Trẻ</h3>
                            <br>
                        </div>
                        <!-- Carousel Card -->
                        <div class="card-raised card-carousel">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <div class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item">
                                            <img src="{!! asset('assets/img/bg2.jpeg') !!}" alt="Awesome Image">
                                        </div>
                                        <div class="item active">
                                            <img src="{!! asset('assets/img/bg3.jpeg') !!}" alt="Awesome Image">
                                        </div>
                                        <div class="item">
                                            <img src="{!! asset('assets/img/bg4.jpeg') !!}" alt="Awesome Image">
                                        </div>
                                        <div class="item">
                                            <img src="{!! asset('assets/img/bg1.jpeg') !!}" alt="Awesome Image">
                                        </div>
                                    </div>
                                    <!-- Controls -->
                                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End Carousel Card -->
                        <br><br>                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main main-raised">
    <br><br>

        <div class="section section-basic" id="section1">
            <div class="container">
                <div class="title">
                    <h2>Kế Hoạch Mới</h2>
                </div>    
                
                <div class="masonry-container">
                    @foreach($newplan as $item)
                        <div class="card-box col-md-4 col-sm-6">
                            <div class="card">                            
                                <div class="header">
                                        <img src="{!! asset('uploads/plans/' .$item["cover_plan"])  !!}"/>
                                        <div class="filter"></div>
                                </div>                           
                                <div class="content">
                                    <h4 class="title"><a href="{{ route('getPlan', $item["id"]) }}">{{ $item["name_plan"] }}</a></h4>
                                    <h6 class="category">Ngày bắt đầu: {{ date("d-m-Y", strtotime($item["date_start"])) }}</h6>
                                    <p class="description">Đã đăng {{ \Carbon\Carbon::createFromTimeStamp(strtotime($item["created_at"]))->diffForHumans() }}</p>
                                </div>                                           
                            </div>
                        </div>
                    @endforeach
                    
                    <a href="#" class="first" data-action="first">&laquo;</a>
                    <a href="#" class="previous" data-action="previous">&lsaquo;</a>
                    <input type="text" readonly="readonly" data-max-page="40" />
                    <a href="#" class="next" data-action="next">&rsaquo;</a>
                    <a href="#" class="last" data-action="last">&raquo;</a>
                    
                </div>
            </div>
            <br>
            <div align="center">     
                <ul class="pagination ct-blue">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li class="active"><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>

        </div>         

        <div class="section section-basic" id="section2">
            <div class="container">
                <div class="title">
                    <h2>Kế Hoạch Hót</h2>
                </div>

                <div class="masonry-container">

                    @foreach($hotplan as $hotplan_data)
                        <div class="card-box col-md-4 col-sm-6">
                            <div class="card">                            
                                <div class="header">
                                        <img src="{!! asset('uploads/plans/' .$hotplan_data["cover_plan"])  !!}"/>
                                        <div class="filter"></div>
                                </div>                           
                                <div class="content">
                                    <h4 class="title"><a href="{{ route('getPlan', $hotplan_data["id"]) }}">{{ $hotplan_data["name_plan"] }}</a></h4>
                                    <h6 class="category">Ngày bắt đầu: {{ date("d-m-Y", strtotime($hotplan_data["date_start"])) }}</h6>
                                    <p class="description">Đã đăng {{ \Carbon\Carbon::createFromTimeStamp(strtotime($hotplan_data["created_at"]))->diffForHumans() }}</p>
                                    <p>Số người tham gia: {{$hotplan_data->joins->count()}}</p>
                                    <p>Số người theo dõi: {{$hotplan_data->follows->count()}}</p>
                                </div>                                           
                            </div>
                        </div>
                    @endforeach

        
                </div>

            </div>
            <br>
            <div align="center">     
                <ul class="pagination ct-blue">
                    <li><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>

        </div>
            
    </div>

</div>

@endsection