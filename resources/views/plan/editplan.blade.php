<link rel="stylesheet" href="{!! asset('assets/css/mystyle/plans.css') !!}" />


<div class="container">
    <div class="modal fade editplan" id="editPlan">
        <div class="modal-dialog editplan animated">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                	<div class="title">
    		            <h3>Sữa Kế Hoạch</h3>
    		        </div>
                    <div class="division">
                        <div class="line l"></div>
                            <span>o0o</span>
                        <div class="line r"></div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="editplanBox">
                		<form action="{{ action('User\PlanController@postEditPlan', $plan["id"]) }}" method="post" enctype="multipart/form-data" id="form-editplan">
                		<input type="hidden" name="_token" value="{{ csrf_token() }}">
                			<div class="row">
                				<div class="col-md-4 col-md-offset-4">
                					<div class="form-group">
                    					<div class="title text-center">
                    						<h3>Tên Kế Hoạch</h3> 
                    					</div>
                    					<input type="text" name="nameplan" id="nameplan" class="form-control" style="font-size: 20px;" value="{!! old('nameplan', isset($plan) ? $plan["name_plan"] : null) !!}">
                    					<br><br>
                					</div>
                				</div>
                				<div class="col-md-10 col-md-offset-1">
                					<img src="{{ asset('uploads/plans/'.$plan["cover_plan"]) }}" id="reCoverPhoto" class="img-thumbnail" style="width: 800px; height: 450px; float: center;">
                				</div>
                				<div class="col-md-6 col-md-offset-2">
                					<div class="row">
                                        <span class="btn btn-file">
                                            <button type="button" class="fileupload-new btn btn-info btn-simple btn-upload">Ảnh Bìa Kế Hoạch</button>
                                            <input type="file" name="coverphoto" id="coverphoto" value="" onchange="readURL3(this);">
                                            <script type="text/javascript">
                                                function readURL3(input) {
                                                    if (input.files && input.files[0]) {
                                                        var reader = new FileReader();
                                                        reader.onload = function (e) {
                                                            $('#reCoverPhoto').attr('src', e.target.result);
                                                        }
                                                        reader.readAsDataURL(input.files[0]);
                                                    }
                                                }                                                         
                                            </script>
                                        </span>
                					</div>
                				</div>
                				<div class="col-md-4 col-md-offset-4">
                					<div class="form-group label-floating">
                    					<label class="control-label">Ngày bắt đầu</label>
                    					<input class="form-control" id="datestart" name="datestart" type="date" value="{!! old('datestart', isset($plan) ? $plan["date_start"] : null) !!}"/>
                					</div>
                					
                					<div class="form-group label-floating">
                    					<label class="control-label">Số người dự kiến</label>
                    					<input type="number" name="member" id="menber" class="form-control" min="0" max="50" value="{!! old('member', isset($plan) ? $plan["max_user"] : null) !!}"/>
                    				</div>
                					<br><br>
                				</div>
                                <div class="col-md-8 col-md-offset-2" id="route">
                                {{-- add route vào đây --}}
                                </div>
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="row">
                                        <?php 
                                        $i=0;
                                        ?>
                                        @foreach($route as $item)
                                            <?php 
                                            $i=$i+1;
                                            ?>
                                            <div class="col-md-6">
                                                <h4>Lộ Trình {{ $i }}</h4>
                                                <div class="form-group">
                                                    <label>Điểm đến:</label><p>{!! $item["come_place"] !!}</p>
                                                    <label>Ngày đến:</label><p>{!! $item["come_date"] !!}</p>
                                                    <label>Thời gian ở lại:</label><p>{!! $item["stay_time"] !!}</p>
                                                    <label>Nơi ở:</label><p>{!! $item["stay_place"] !!}</p>
                                                    <label>Hoạt động</label><p>{{ $item["activity"] }}</p>
                                                    <label>Phương tiện di chuyển tiếp:</label><p>{!! $item["vehicle"] !!}</p>
                                                    <label>Thời gian di chuyển tiếp:</label><p>{!! $item["travel_time"] !!}</p>
                                                    <br><br>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    {{-- xóa kế hoạch --}}
                                    <a href="javascript:void(0)" class="btn btn-raised pull-right btn-primary" id="delroute">Xóa và tạo lại</a>
                                </div>
                                {{-- Thêm nút bấm thêm route vào đây sau khi nhấn xóa --}}
                                <div class="col-md-4 col-md-offset-4" id="addBtn" style="display: none;">
                                    <a href="#" class="btn" id="addRoute"><i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i> Thêm Địa Điểm</a>
                                </div>
                			</div>
                            <br><br>
                			<div class="row">
                                <div class="col-md-4 col-md-offset-4">
                                    <input type="submit" name="commit" value="Sửa Kế Hoạch" class="btn btn-raised btn-block pull-right btn-primary">
                                </div> 
                            </div>
                		</form>
                     <br><br> 
        	       </div>
                </div>                    
            </div>
        </div>
    </div>  
</div>

<script type="text/javascript">

    // add route
    $(function() {
        var route = $('#route');
        var  i = 1;
        $('#addRoute').click(function() {
            $('<div class="col-md-6"><h4>Lộ Trình '+i+'</h4><br><div class="form-group"><label>Điểm đến</label><input type="text" name="comeplace'+i+'" class="form-control"></div><div class="form-group"><label>Ngày đến</label><input type="date" name="comedate'+i+'" class="form-control"></div><div class="form-group"><label>Thời gian ở lại</label><input type="text" name="staytime'+i+'" class="form-control"></div><div class="form-group"><label>Nơi ở</label><input type="text" name="stayplace'+i+'" class="form-control"></div><div class="form-group"><label>Hoạt động</label><textarea name="activity'+i+'" rows="4" class="form-control"></textarea></div><div class="form-group"><label>Phương tiện di chuyển tiếp</label><input type="text" name="vehicle'+i+'" class="form-control"></div><div class="form-group"><label>Thời gian di chuyển đến điểm tiếp theo</label><input type="text" name="traveltime'+i+'" class="form-control"></div><br><br></div>').appendTo(route);
            i++;
            return false;
        });
   });


// delete route
    $('#delroute').click(function() {

        $.ajax({
            type: 'GET',
            url: '{{ route('getDelRoute', $plan["id"]) }}',
            async: true,
        });
        
        $(this).parent().remove();
        $("#addBtn").show();
    }); 


</script>