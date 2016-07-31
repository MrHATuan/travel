@extends('layouts.layouts')
@section('title', 'Tên Plan')
@section('content')

<link rel="stylesheet" href="{!! asset('assets/css/mystyle/plans.css') !!}" />


<div class='blurred-container'>
  <div class="img-src" style="background-image: url('{{asset('uploads/plans/'.$plan["cover_plan"]) }}')"></div>
</div>

<div class="main">
	<div class="section-gray">
    @if((!Auth::check()) || ($plan["user_id"] != Auth::user()->id))
    	<div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h5 style="float:right;">Người tạo: {!! $users["name"] !!}</h5>
                </div>
            </div>
        </div>
    @else
    	<br>
    @endif
    </div>

	<div class="container">
		<div class="tim-title">
            <h2>{{ $plan["name_plan"] }}</h2>
            <div class="division">
                <div class="line l"></div>
                    <span>o0o</span>
                <div class="line r"></div>
            </div>
        </div>
        <div class="row">
        	<div class="col-md-4 col-md-offset-8">
        		<h5>Ngày bắt đầu: {{ date("d/m/Y", strtotime($plan["date_start"])) }}</h5>
        		<h6>Số lượng: {{ $count }}/{{ $plan["max_user"] }}</h6>
        	@if((!Auth::check()) || $plan["user_id"] != Auth::user()->id)
        		@if($plan["status"] == 0)
        			<h4 style="color: #2E64FE">Trạng thái: Chưa bắt đầu</h4>
        		@elseif($plan["status"] == 1)
        			<h4 style="color: #2E64FE">Trạng thái: Đang diễn ra</h4>
        		@else
					<h4 style="color: #2E64FE">Trạng thái: Kết thúc</h4>
        		@endif
        	@elseif(Auth::check() && $plan["user_id"] == Auth::user()->id)
                <h4 style="color: #2E64FE" id="status">Trạng thái: 
                    @if($plan["status"] == 0)
                        <button id="status" class="btn btn-raised btn-info" data-id="{{ $plan["status"] }}" value="{{ $plan["status"] }}">Chưa diễn ra</button>
                    @elseif($plan["status"] == 1)
                        <button id="status" class="btn btn-raised btn-info" data-id="{{ $plan["status"] }}" value="{{ $plan["status"] }}">Đang diễn ra</button>
                    @else
                        Đã kết thúc
                    @endif
                </h4>
        	@endif
        	</div>
        </div>

        <div class="row">
        	<div class="col-md-8 col-md-offset-2"> 
        		<div class="row">
        			<fieldset>
	        			<legend>Lộ trình</legend>
	        			<?php
	        			$i=0;
	        			?>
	        			@foreach($route as $item)
	        			<?php
	        			$i=$i+1;
	        			?>
	        			<div class="card-box col-md-6 col-sm-6">
                            <div class="card"> 
	                            <div class="content">
			        				<h4 class="title">Lộ trình {{ $i }}</h4>
			        				<label>Điểm đến: {{ $item["come_place"] }}</label><br>
			        				<label>Ngày đến: {{ $item["come_date"] }}</label><br>
			        				<label>Thời gian ở lại: {{ $item["stay_time"] }}</label><br>
			        				<label>Nơi ở: {{ $item["stay_place"] }}</label><br>
			        				<label>Hoạt động: {{ $item["activity"] }}</label><br>
			        				<label>Phương tiện di chuyển tiếp: {{ $item["vehicle"] }}</label><br>
			        				<label>Thời gian di chuyển tiếp: {{ $item["travel_time"] }}</label><br>
			        			</div>
		        			</div>
	        			</div>
	        			@endforeach
        			</fieldset>
        		</div>
        		
                <div class="row">
            		<div class="col-md-10 col-md-offset-1">
            			<br>
                        {{-- <div style="width:650; height:400;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m8!1m3!1d59603.065665999915!2d105.86961163513186!3d20.984955255741905!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d21.0022044!2d105.839936!5e0!3m2!1sen!2sus!4v1469884396911" width="640" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        				<br><br>
                        </div> --}}
            		</div>
                </div>
        		<div class="row">
        			<div class="col-md-6 col-md-offset-6">
        				@if(Auth::check() && $plan["user_id"] != Auth::user()->id)
        					<div id="check_follow" class="col-md-6">
                                @if($countjoin == 0)
                                    @if($follow == 0)
                                        <button id="follow" class="btn btn-raised btn-block pull-right btn-primary" data-id="{{ $follow }}">Theo dõi</button>
                                    @elseif($follow == 1)
                                        <button id="follow" class="btn btn-raised btn-block pull-right btn-primary" data-id="{{ $follow }}">Đang theo dõi</button>
                                    @endif
                                @endif
                                <div id="btnfollow" style="display: none;">
                                    <button id="follow" class="btn btn-raised btn-block pull-right btn-primary" data-id="1">Đang theo dõi</button>
                                </div>
                        	</div>
                        	<div class="col-md-6">
                                @if($plan["status"] == 0)
                                    @if($countjoin == 0 )
                                        <button id="join" class="btn btn-raised btn-block  btn-primary unjoin">Tham gia</button>
                                    @elseif($countjoin == 1)
                                        @if($userjoin["join"] == 0)
                                            <button id="join" class="btn btn-raised btn-block  btn-primary" data-id="{{ $userjoin["join"] }}">Đang yêu cầu</button>
                                        @elseif($userjoin["join"] == 1)
                                            <button id="join" class="btn btn-raised btn-block  btn-primary" data-id="{{ $userjoin["join"] }}">Đã tham gia</button>
                                        @endif
                                    @endif
                                @endif
                        	</div>	
        				@elseif(Auth::check() && Auth::user()->id == $plan["user_id"])
                            @if($plan["status"] == 0)
                                <a href="javascript:void(0)" class="btn btn-raised pull-right btn-primary" id="btnEditPlan" data-toggle="modal" data-target="#editPlan">Sửa Kế Hoạch</a>    
        				    @endif
                        @endif
        			</div>
        		</div>
                <br><br>
        	</div>
		</div>

		<div class="row">
        {{-- <div class="container"> --}}
            <div class="col-md-10 col-md-offset-1 comment">
                <div class="row">
        			<div class="joined">
        				<button class="btn btn-raised btn-info" data-toggle="modal" data-target="#myComment"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> {{ $count }} người đã tham gia</button>
        			</div>
                </div>
                <div class="row">
        		
                    @include('plan.comment')
        
                </div>
                <br><br>
            </div>
        {{-- </div> --}}
		</div>
        <br><br><br>
	</div>
</div>

{{-- include edit plan --}}
@include('plan.editplan')

{{-- show danh sách tham gia --}}
<div class="modal fade join" id="myComment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Danh Sách Tham Gia</h4>
      </div>
      <div class="modal-body">
        <table class="table">
        	<tbody>        	
	        @if(Auth::check() && $plan["user_id"] == Auth::user()->id)
	        	@foreach($join as $item)
	        		<tr class="list-join">
	        			<td><img src="{{asset('uploads/avatars/'.$item["avatar"]) }}" style="width: 35px; height: 35px;"></td>
	        			<td>{{ $item["name"] }}</td>
	        			@if($item["join"] == 0)
	        				<td>
                                <button id="accept" class="btn btn-raised btn-primary" data-id="{{ $item["user_id"] }}">Đồng ý</button>
                                <script>
                                        // *********** Accept or Reject Join //
                                    $('button#accept').click(function(e){
                                        e.preventDefault();
                                        $button = $(this);
                                        var accept = {'id': $(this).data('id')};
                                        $.ajax({
                                            type: 'GET',
                                            url: '{{ route('acceptJoin', $plan["id"]) }}',
                                            async: true,
                                            data: accept,
                                        });
                                        $(this).parent().remove();
                                    });
                                </script>
                                <button id="reject" class="btn btn-raised btn-primary" data-id="{{ $item["user_id"] }}">Từ chối</button>
                                <script>
                                    $('button#reject').click(function(e){
                                        e.preventDefault();
                                        $button = $(this);
                                        var reject = {'id': $(this).data('id')};
                                        $.ajax({
                                            type: 'GET',
                                            url: '{{ route('rejectJoin', $plan["id"]) }}',
                                            async: true,
                                            data: reject,
                                        });
                                        $(this).parent().parent().remove();
                                    });

                                </script>
    
                            </td>
	        			@endif
	        		</tr>
                    
                    <script>
                        $('button#reject').click(function(e){
                            e.preventDefault();
                            $button = $(this);
                            var reject = {'id': $(this).data('id')};
                            $.ajax({
                                type: 'GET',
                                url: '{{ route('rejectJoin', $item["id"]) }}',
                                async: true,
                                data: reject,
                            });
                            $(this).parent().parent().remove();
                        });

                    </script>
	        	@endforeach
	        @else
	        	@foreach($join as $item)
	        		@if($item["join"] == 1)
		        		<tr>
		        			<td><img src="{{asset('uploads/avatars/'.$item["avatar"]) }}" style="width: 35px; height: 35px;"></td>
		        			<td>{{ $item["name"] }}</td>
		        			<td></td>
		        		</tr>
		        	@endif
	        	@endforeach
	        @endif
        	</tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

// ****** js phím trạng thái ********** //

 $('button#status').click(function(e) {
    e.preventDefault();
    $button =  $(this);
    var dataStatus = $(this).data('id');

    if($button.hasClass('start') || (dataStatus == 1)){
        $button.removeClass('start');
        dataStatus = 2;
        $.ajax({
            type: 'GET',
            url: '{{ route('getStatus', $plan["id"]) }}',
            async: true,
        });
        $button.remove();
        $("#status").append("Đã Kết thúc");
    }else {
        $button.addClass('start')
        $button.text('Đang diễn ra')
        dataStatus = 1;
        $("#btnEditPlan").remove();
        $.ajax({
            type: 'GET',
            url: '{{ route('getStatus', $plan["id"]) }}',
            async: true,
        });
    }
 });


 // ******** Join ************ //

$('button#join').click(function(e) {
    e.preventDefault();
    $button = $(this);
    var dataJoin = $(this).data('id');
    
    if($button.hasClass('joining') || (dataJoin == 0)) {
        // bỏ yêu cầu tham gia
        $button.removeClass('joining');
        $button.addClass('unjoin');
        $button.text('Tham gia');
        $("#btnfollow").show();
        $.ajax({
            type: 'GET',
            url: '{{ route('delJoin', $plan["id"]) }}',
            async: true,
        });
    } else if($button.hasClass('unjoin')){
        // gửi yêu cầu
        $("#follow").hide();
        $("#btnfollow").hide();
        $button.addClass('joining');
        $button.removeClass('unjoin');
        $button.text('Đang yêu cầu');
        $dataJoin = 0;
        $.ajax({
            type: 'GET',
            url: '{{ route('getJoin', $plan["id"]) }}',
            async: true,
        });
    }else if(dataJoin == 1) {            
        //$.ajax(); bỏ tham  gia            
        $button.removeClass('joined');
        $button.addClass('unjoin');
        $button.text('Tham gia');
        // Neu bo tham gia thi hiển thị nút follow
        $("#btnfollow").show();
        $.ajax({
            type: 'GET',
            url: '{{ route('delJoin', $plan["id"]) }}',
            async: true,
        });
    }

});


 // ******** Follow ************* //

$('button#follow').click(function(e){
    e.preventDefault();
    $button = $(this);
    var dataFollow = $(this).data('id');
    if($button.hasClass('following') || (dataFollow == 1)){        
        //$.ajax(); Do Unfollow       
        $button.removeClass('following');
        $button.removeClass('unfollow')
        $button.text('Theo dõi');
        $.ajax({
            type: 'GET',
            url: '{{ route('delFollow', $plan["id"]) }}',
            async: true,
        });

    } else {
        $button.addClass('following');
        $button.text('Đang theo dõi');
        dataFollow = 1;
        $.ajax({
            type: 'GET',
            url: '{{ route('getFollow', $plan["id"]) }}',
            async: true,
        });
    }
});






 // ********* Comment ********* //



</script>


@endsection