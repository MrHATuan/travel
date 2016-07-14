@extends('layouts.layouts')
<?php
$name= Auth::user()->name;
?>
@section('title', $name)
@section('content')



	<div class="header header-filter" style="background-image: url('{{ asset('uploads/covers/' . Auth::user()->cover) }}');">
        <div class="section" id="carousel">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div style="text-align: center; color: white">
                            <h1>Du Lịch Bụi</h1>
                            <h3>Thỏa Lòng Đam Mê Tuổi Trẻ</h3>
                            <br>
                        </div>
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
                    <h2>Kế Hoạch Của Tôi</h2>
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

		<div class="section section-basic">
            <div class="container">
                <div class="title">
                    <h2>Kế Hoạch Tham Gia</h2>
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

        <div class="section section-basic">
            <div class="container">
                <div class="title">
                    <h2>Kế Hoạch Đang Theo Dõi</h2>
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

   	</div>

@endsection