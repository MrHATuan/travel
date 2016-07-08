@extends('layouts.layouts')
@section('title', 'Du Lịch Bụi')
@section('content')


<div class="header header-filter" style="background-image: url('assets/img/bg2.jpeg'); height: 90%">
    <div class="section" id="carousel">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div style="text-align: center; color: white">
                        <h1>Du Lịch Bụi</h1>
                        <h3>Thỏa Lòng Đam Mê Tuổi Trẻ</h3>
                        <br><br>
                    </div>
                    <!-- Carousel Card -->
                    <div class="card card-raised card-carousel">
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
                                    <i class="material-icons">keyboard_arrow_left</i>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                    <i class="material-icons">keyboard_arrow_right</i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Carousel Card -->                      
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main main-raised">
    <div class="section section-basic">
    	<div class="container">
            <div class="title">
                <h2>Kế Hoạch Mới</h2>
            </div>

            <div>
                Thêm nội  dung vào đây
                <br>
                Là 1 list danh sách 
                <br>
                Sắp xếp như thế nào đây
                <br>
                Để cho đẹp hợp với mọi  thứ
                <br>
                Có vẻ   là sẽ khó khăn  lắm ha
                <br><br><br><br>
            </div>

    	</div>
    </div>

    <div class="section section-basic">
    	<div class="container">
            <div class="title">
                <h2>Kế Hoạch Hót</h2>
            </div>

            <div>
                Thêm nội  dung vào đây
                <br>
                Là 1 list danh sách 
                <br>
                Sắp xếp như thế nào đây
                <br>
                Để cho đẹp hợp với mọi  thứ
                <br>
                Có vẻ   là sẽ khó khăn  lắm ha
                <br><br><br><br>
                <br><br><br><br>
                Thêm vào 1 đoạn cho dài
                <br><br><br><br>
                Thêm doạn nữa vậy
            </div>
            
    	</div>
    </div>
</div>

@endsection