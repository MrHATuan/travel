@extends('layouts.layouts')
@section('title', 'Du Lịch Bụi')
@section('content')

<div class="index-page">


    <div class="header header-filter" style="background-image: url('assets/img/bg2.jpeg'); height: 90%">
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
                                            <img src="assets/img/bg2.jpeg" alt="Awesome Image">
                                        </div>
                                        <div class="item active">
                                            <img src="assets/img/bg3.jpeg" alt="Awesome Image">
                                        </div>
                                        <div class="item">
                                            <img src="assets/img/bg4.jpeg" alt="Awesome Image">
                                        </div>
                                        <div class="item">
                                            <img src="assets/img/bg1.jpeg" alt="Awesome Image">
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

        <div class="section section-basic">
            <div class="container">
                <div class="title">
                    <h2>Kế Hoạch Mới</h2>
                </div>    
                
                <div class="masonry-container">

                    <div class="card-box col-md-4 col-sm-6">
                        <div class="card">                            
                            <div class="header">
                                    <img src="{!! asset('assets/img/lifestyle-8.jpg')  !!}"/>
                                    <div class="filter"></div>
                            </div>                           
                            <div class="content">
                                <h4 class="title"><a href="#">Chuyến du lịch cắt tóc</a></h4>
                                <p class="description">Tham gia: 5/6<br>
                                Theo dõi: 12
                                </p>
                            </div>                                           
                        </div>
                    </div>

                    <div class="card-box col-md-4 col-sm-6">
                        <div class="card">                            
                            <div class="header">
                                <img src="assets/img/lifestyle-8.jpg"/>
                                <div class="filter"></div>
                            </div>                           
                            <div class="content">
                                <h4 class="title"><a href="#">Chuyến du lịch cắt tóc</a></h4>
                                <p class="description">Tham gia: 5/6<br>
                                Theo dõi: 12
                                </p>
                            </div>                                           
                        </div>
                    </div>

                    <div class="card-box col-md-4 col-sm-6">
                        <div class="card">                            
                            <div class="header">
                                <img src="assets/img/lifestyle-8.jpg"/>
                                <div class="filter"></div>
                            </div>                           
                            <div class="content">
                                <h4 class="title"><a href="#">Chuyến du lịch cắt tóc</a></h4>
                                <p class="description">Tham gia: 5/6<br>
                                Theo dõi: 12
                                </p>
                            </div>                                           
                        </div>
                    </div>

                    <div class="card-box col-md-4 col-sm-6">
                        <div class="card">                            
                            <div class="header">
                                <img src="assets/img/lifestyle-8.jpg"/>
                                <div class="filter"></div>
                            </div>                           
                            <div class="content">
                                <h4 class="title"><a href="#">Chuyến du lịch cắt tóc</a></h4>
                                <p class="description">Tham gia: 5/6<br>
                                Theo dõi: 12
                                </p>
                            </div>                                           
                        </div>
                    </div>

                    <div class="card-box col-md-4 col-sm-6">
                        <div class="card">                            
                            <div class="header">
                                <img src="assets/img/lifestyle-8.jpg"/>
                                <div class="filter"></div>
                            </div>                           
                            <div class="content">
                                <h4 class="title"><a href="#">Chuyến du lịch cắt tóc</a></h4>
                                <p class="description">Tham gia: 5/6<br>
                                Theo dõi: 12
                                </p>
                            </div>                                           
                        </div>
                    </div>

                    <div class="card-box col-md-4 col-sm-6">
                        <div class="card">                            
                            <div class="header">
                                <img src="assets/img/lifestyle-8.jpg"/>
                                <div class="filter"></div>
                            </div>                           
                            <div class="content">
                                <h4 class="title"><a href="#">Chuyến du lịch cắt tóc</a></h4>
                                <p class="description">Tham gia: 5/6<br>
                                Theo dõi: 12
                                </p>
                            </div>                                           
                        </div>
                    </div>

                    <div class="card-box col-md-4 col-sm-6">
                        <div class="card">                            
                            <div class="header">
                                <img src="assets/img/lifestyle-8.jpg"/>
                                <div class="filter"></div>
                            </div>                           
                            <div class="content">
                                <h4 class="title"><a href="#">Chuyến du lịch cắt tóc</a></h4>
                                <p class="description">Tham gia: 5/6<br>
                                Theo dõi: 12
                                </p>
                            </div>                                           
                        </div>
                    </div>

                    <div class="card-box col-md-4 col-sm-6">
                        <div class="card">                            
                            <div class="header">
                                <img src="assets/img/lifestyle-8.jpg"/>
                                <div class="filter"></div>
                            </div>                           
                            <div class="content">
                                <h4 class="title"><a href="#">Chuyến du lịch cắt tóc</a></h4>
                                <p class="description">Tham gia: 5/6<br>
                                Theo dõi: 12
                                </p>
                            </div>                                           
                        </div>
                    </div>

                    <div class="card-box col-md-4 col-sm-6">
                        <div class="card">                            
                            <div class="header">
                                <img src="assets/img/lifestyle-8.jpg"/>
                                <div class="filter"></div>
                            </div>                           
                            <div class="content">
                                <h4 class="title"><a href="#">Chuyến du lịch cắt tóc</a></h4>
                                <p class="description">Tham gia: 5/6<br>
                                Theo dõi: 12
                                </p>
                            </div>                                           
                        </div>
                    </div>

                    <div class="card-box col-md-4 col-sm-6">
                        <div class="card">                            
                            <div class="header">
                                <img src="assets/img/lifestyle-8.jpg"/>
                                <div class="filter"></div>
                            </div>                           
                            <div class="content">
                                <h4 class="title"><a href="#">Chuyến du lịch cắt tóc</a></h4>
                                <p class="description">Tham gia: 5/6<br>
                                Theo dõi: 12
                                </p>
                            </div>                                           
                        </div>
                    </div>

                    <div class="card-box col-md-4 col-sm-6">
                        <div class="card">                            
                            <div class="header">
                                <img src="assets/img/lifestyle-8.jpg"/>
                                <div class="filter"></div>
                            </div>                           
                            <div class="content">
                                <h4 class="title"><a href="#">Chuyến du lịch cắt tóc</a></h4>
                                <p class="description">Tham gia: 5/6<br>
                                Theo dõi: 12
                                </p>
                            </div>                                           
                        </div>
                    </div>

                </div>
                     
            </div>
        </div>         

        <div class="section section-basic">
            <div class="container">
                <div class="title">
                    <h2>Kế Hoạch Hót</h2>
                </div>

                <div class="masonry-container">

                    <div class="card-box col-md-4 col-sm-6">
                        <div class="card">                            
                            <div class="header">
                                <img src="assets/img/lifestyle-8.jpg"/>
                                <div class="filter"></div>
                            </div>                           
                            <div class="content">
                                <h4 class="title"><a href="#">Chuyến du lịch cắt tóc</a></h4>
                                <p class="description">Tham gia: 5/6<br>
                                Theo dõi: 12
                                </p>
                            </div>                                           
                        </div>
                    </div>

                    <div class="card-box col-md-4 col-sm-6">
                        <div class="card">                            
                            <div class="header">
                                <img src="assets/img/lifestyle-8.jpg"/>
                                <div class="filter"></div>
                            </div>                           
                            <div class="content">
                                <h4 class="title"><a href="#">Chuyến du lịch cắt tóc</a></h4>
                                <p class="description">Tham gia: 5/6<br>
                                Theo dõi: 12
                                </p>
                            </div>                                           
                        </div>
                    </div>

                    <div class="card-box col-md-4 col-sm-6">
                        <div class="card">                            
                            <div class="header">
                                <img src="assets/img/lifestyle-8.jpg"/>
                                <div class="filter"></div>
                            </div>                           
                            <div class="content">
                                <h4 class="title"><a href="#">Chuyến du lịch cắt tóc</a></h4>
                                <p class="description">Tham gia: 5/6<br>
                                Theo dõi: 12
                                </p>
                            </div>                                           
                        </div>
                    </div>

                    <div class="card-box col-md-4 col-sm-6">
                        <div class="card">                            
                            <div class="header">
                                <img src="assets/img/lifestyle-8.jpg"/>
                                <div class="filter"></div>
                            </div>                           
                            <div class="content">
                                <h4 class="title"><a href="#">Chuyến du lịch cắt tóc</a></h4>
                                <p class="description">Tham gia: 5/6<br>
                                Theo dõi: 12
                                </p>
                            </div>                                           
                        </div>
                    </div>

                </div>

            </div>
        </div>
            
    </div>

</div>

@endsection