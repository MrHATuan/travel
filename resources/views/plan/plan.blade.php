@extends('layouts.layouts')
@section('title', 'Tên Plan')
@section('content')

<style>
.blurred-container{
  position:relative;
  width:100%;
  height:540px;
  top:0;
  left:0;
}
.blurred-container > .img-src{
    position:fixed;
    width:100%;
    height:540px;
    background-repeat:no-repeat;
    background-size:cover;
    background-position: center center;
}

.tim-title{
    margin-top: 30px;
    margin-bottom: 15px;
    text-align: center;
}

.section-gray{
    padding: 10px 0;
    background-color: #EEE;
}
.section-gray h5{
    margin: 0;
    line-height: 35px;
}

.division {
    float: none;
    margin: 0 auto 18px;
    overflow: hidden;
    position: relative;
    text-align: center;
    width: 100%;
}
.division .line {
    border-top: 2px solid #DFDFDF;
    position: absolute;
    top: 5px;
    width: 34%;
}
.division .line.l {
    left: 0;
}
.division .line.r {
    right: 0;
}
.division span {
    color: #424242;
    font-size: 20px;
}

.listLT {
	text-align: center;
}

fieldset {
    padding: 10px;
    border: 1px solid silver;
    text-align: left;
    margin: 0px auto;
    /** Thêm CSS 3.0 **/
    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
}
legend {
    text-transform: uppercase;
    color: #0A71A5;
    font-weight: bold;
    font-size: 20px;
}

</style>


<div class='blurred-container'>
  <div class="img-src" style="background-image: url('{{asset('assets/img/cover_4.jpg') }}')"></div>
</div>

<div class="main">
	<div class="section-gray">
{{-- Nếu là người đăng --}}
		<div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h5 style="float:right;">Tên người đăng</h5>
                </div>
            </div>
        </div>
{{-- Nếu k là người đăng thì <br> --}}
    </div>

	<div class="container">
		<div class="tim-title">
            <h2>Tên kế hoạch</h2>
            <div class="division">
                <div class="line l"></div>
                    <span>o0o</span>
                <div class="line r"></div>
            </div>
        </div>
        <div class="row">
        	<div class="col-md-4 col-md-offset-8">
        		<h5>Ngày bắt đầu: 11/12/2016</h5>
        		<h6>Số lượng: 5/10</h6>
        		<h4 style="color: #2E64FE">Trạng thái: Chưa bắt đầu</h4>
        		{{-- Nếu check là thằng đăng thì cho cái buttom thay đổi trạng thái vào đây --}}
        	</div>
        </div>

        <div class="row">
        	<div class="col-md-10 col-md-offset-1"> 
        		<div class="row">
        			<fieldset>
	        			<legend>Lộ trình</legend>

	        			<div class="card-box col-md-6 col-sm-6 listLT">
                            <div class="card"> 
	                            <div class="content">
			        				<h4 class="title">Lộ trình 1</h4>
			        				<label>Điểm đến</label><br>
			        				<label>Hà Nội</label><br>
			        				<label>Ngày đến</label><br>
			        				<label>11/12/2012</label><br>
			        			</div>
		        			</div>
	        			</div>
	        			<div class="card-box col-md-6 col-sm-6 listLT">
                            <div class="card"> 
	                            <div class="content">
			        				<h4 class="title">Lộ trình 2</h4>
			        				<label>Điểm đến</label><br>
			        				<label>Hà Nội</label><br>
			        				<label>Ngày đến</label><br>
			        				<label>11/12/2012</label><br>  		
			        			</div>
		        			</div>
	        			</div>
	        			<div class="card-box col-md-6 col-sm-6 listLT">
                            <div class="card">
	                            <div class="content"> 
			        				<h4 class="title">Lộ trình 3</h4>
			        				<label>Điểm đến</label><br>
			        				<label>Hà Nội</label><br>
			        				<label>Ngày đến</label><br>
			        				<label>11/12/2012</label><br>      			
			        			</div>
		        			</div>
	        			</div>
	        			<div class="card-box col-md-6 col-sm-6 listLT">
                            <div class="card"> 
	                            <div class="content">
			        				<h4 class="title">Lộ trình 4</h4>
			        				<label>Điểm đến</label><br>
			        				<label>Hà Nội</label><br>
			        				<label>Ngày đến</label><br>
			        				<label>11/12/2012</label><br>      			
			        			</div>
		        			</div>
	        			</div>
        			</fieldset>
        		</div>
        		
        		<div class="col-md-8 col-md-offset-2">
        			<br><br>
   					Bản đồ cho  vào đây
    				<br><br>
        		</div>
        		<div class="row">

        			<div class="col-md-6 col-md-offset-6">
        				cho 2 cái butom vào đây đc không chắc phải dùng script lại khó khăn rồi<br>
        				Thằng create thì cho 1 cái nút edit để chuyển đến trang sữa

        			</div>
        		</div>
        	</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				Cho danh sánh join vào đây
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1"> 
				Comment ở đây
				<br><br><br>
			</div>
		</div>
	</div>
</div>

@endsection