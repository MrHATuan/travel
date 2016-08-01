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


                     @foreach($plan as $plan_data)
                        <div class="card-box col-md-4 col-sm-6">
                            <div class="card">                            
                                <div class="header">
                                        <img src="{!! asset('uploads/plans/' .$plan_data["cover_plan"])  !!}"/>
                                        <div class="filter"></div>
                                </div>                           
                                <div class="content">
                                    <h4 class="title"><a href="{{ route('getPlan', $plan_data["id"]) }}">{{ $plan_data["name_plan"] }}</a></h4>
                                    <h6 class="category">Ngày bắt đầu: {{ date("d-m-Y", strtotime($plan_data["date_start"])) }}</h6>
                                    <p class="description">Đã đăng {{ \Carbon\Carbon::createFromTimeStamp(strtotime($plan_data["created_at"]))->diffForHumans() }}</p>
                                </div>                                           
                            </div>
                        </div>
                    @endforeach     

                    
                </div>
            </div>
            <br>
            {{-- <div align="center">     
                <ul class="pagination ct-blue">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li class="active"><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div> --}}

        </div>  

		<div class="section section-basic">
            <div class="container">
                <div class="title">
                    <h2>Kế Hoạch Tham Gia</h2>
                </div>    
                
                <div class="masonry-container">


                    @foreach($join as $join_data)
                    @if($join_data->plan["user_id"] != Auth::id())
                        <div class="card-box col-md-4 col-sm-6">
                            <div class="card">                            
                                <div class="header">
                                        <img src="{!! asset('uploads/plans/' .$join_data->plan["cover_plan"])  !!}"/>
                                        <div class="filter"></div>
                                </div>                           
                                <div class="content">
                                    <h4 class="title"><a href="{{ route('getPlan', $join_data->plan["id"]) }}">{{ $join_data->plan["name_plan"] }}</a></h4>
                                    <h6 class="category">Ngày bắt đầu: {{ date("d-m-Y", strtotime($join_data->plan["date_start"])) }}</h6>
                                    <p class="description">Đã đăng {{ \Carbon\Carbon::createFromTimeStamp(strtotime($join_data->plan["created_at"]))->diffForHumans() }}</p>
                                </div>                                           
                            </div>
                        </div>
                    @endif
                    @endforeach

                    
                </div>
            </div>
            <br>
            {{-- <div align="center">     
                <ul class="pagination ct-blue">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li class="active"><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div> --}}

        </div>  

        <div class="section section-basic">
            <div class="container">
                <div class="title">
                    <h2>Kế Hoạch Đang Theo Dõi</h2>
                </div>    
                
                <div class="masonry-container">


                    @foreach($follow as $follow_data)
                        <div class="card-box col-md-4 col-sm-6">
                            <div class="card">                            
                                <div class="header">
                                        <img src="{!! asset('uploads/plans/' .$follow_data->plan["cover_plan"])  !!}"/>
                                        <div class="filter"></div>
                                </div>                           
                                <div class="content">
                                    <h4 class="title"><a href="{{ route('getPlan', $follow_data->plan["id"]) }}">{{ $follow_data->plan["name_plan"] }}</a></h4>
                                    <h6 class="category">Ngày bắt đầu: {{ date("d-m-Y", strtotime($follow_data->plan["date_start"])) }}</h6>
                                    <p class="description">Đã đăng {{ \Carbon\Carbon::createFromTimeStamp(strtotime($follow_data->plan["created_at"]))->diffForHumans() }}</p>
                                </div>                                           
                            </div>
                        </div>
                    @endforeach
                    

                </div>
            </div>
            <br>
            {{-- <div align="center">     
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
 --}}
        </div>          

   	</div>

@endsection