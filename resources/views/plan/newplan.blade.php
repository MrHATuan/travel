
<link rel="stylesheet" href="{!! asset('assets/css/mystyle/plans.css') !!}" />


<div class="container">
    <div class="modal fade newplan" id="newPlan">
        <div class="modal-dialog newplan animated">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                	<div class="title">
    		            <h3>Tạo Kế Hoạch</h3>
    		        </div>
                    <div class="division">
                        <div class="line l"></div>
                            <span>o0o</span>
                        <div class="line r"></div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="planBox">
                		<form action="{{ action('User\PlanController@postNewPlan') }}" method="post" accept-charset="utf-8" id="form-newplan">
                		<input type="hidden" name="_token" value="{{ csrf_token() }}">
                			<div class="row">
                				<div class="col-md-4 col-md-offset-4">
                					<div class="form-group">
                    					<div class="title text-center">
                    						<h3>Tên Kế Hoạch</h3> 
                    					</div>
                    					<input type="text" name="name_plan" id="name_plan" class="form-control" style="font-size: 20px;">
                    					<br><br>
                					</div>
                				</div>
                				<div class="col-md-10 col-md-offset-1">
                					<img src="{{ asset('uploads/plans/default.jpg') }}" id="CoverPhoto" class="img-thumbnail" style="width: 800px; height: 450px; float: center;">
                				</div>
                				<div class="col-md-6 col-md-offset-2">
                					<div class="row">
                                        <span class="btn btn-file">
                                            <button type="button" class="fileupload-new btn btn-info btn-simple btn-upload">Ảnh Bìa Kế Hoạch</button>
                                            <input type="file" name="coverphoto" id="coverphoto" onchange="readURL(this);">
                                            <script type="text/javascript">
                                                function readURL(input) {
                                                    if (input.files && input.files[0]) {
                                                        var reader = new FileReader();
                                                        reader.onload = function (e) {
                                                            $('#CoverPhoto').attr('src', e.target.result);
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
                    					<input class="form-control" id="datestart" name="datestart" type="text" />
                					</div>
                					
                					<div class="form-group label-floating">
                    					<label class="control-label">Số người dự kiến</label>
                    					<input type="number" name="member" id="menber" class="form-control" min="0" max="50">
                    				</div>
                					<br><br>
                				</div>
                                <div id="route">
                                                                        
                                </div>
                                <div class="col-md-4 col-md-offset-4">
                                    {{-- <button id="btn1">Append text</button> --}}
                                    <a href="#" class="btn" id="addScnt">
                                        <i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i> Thêm Địa Điểm
                                    </a>                               
                                </div>
                			</div>
                            <br><br>
                			<div class="row">
                                <div class="col-md-4 col-md-offset-4">
                                    <input type="submit" name="commit" value="Tạo Kế Hoạch" class="btn btn-raised btn-block pull-right btn-primary">
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
<script type="text/javascript" src="{!! asset('assets/jquery/jquery-validate/jquery.validate.js') !!}"></script>
<script type="text/javascript">
    $("#form-newplan").validate({
        rules:{
            name_plan:{
                required:true,
            },
            datestart:{
                required:true,
            },
            member:{
                required:true,
            }
        },
        messages:{
            name_plan:{
                required:"Chưa Nhập Tên Kế Hoạch",
            },
            datestart:{
                required: "Chưa Nhập Ngày Bắt Đầu",
            },
            member:{
                required: "Chưa Nhập Số Người",
            }
        }
    });

    $(function() {
        var scntDiv = $('#route');
        var i = $('#route p').size() + 1;
        
        $('#addScnt').click(function() {
            $('<div class="col-md-4 col-md-offset-4"><div class="form-control"><label>Điểm đến</label><input type="text" name="come_place' + i + '" class="form-control"></div><br><div class="form-control"><label>Ngày đến</label><input type="text" name="come_date' + i + '" class="form-control"></div><br><div class="form-control"><label>Thời gian ở lại</label><input type="text" name="stay_time' + i + '" class="form-control"></div><br><div class="form-control"><label>Nơi ở</label><input type="text" name="stay_place' + i + '" class="form-control"></div><br><div class="form-control"><label>Hoạt động</label><input type="text" name="activity' + i + '" class="form-control"></div><br><div class="form-control"><label>Phương tiện di chuyển đến điểm tiếp theo</label><input type="text" name="vehicle' + i + '" class="form-control"></div><br><div class="form-control"><label>Thời gian di chuyển đến điểm tiếp theo</label><input type="text" name="travel_time' + i + '" class="form-control"></div><br><a href="#" id="remScnt"><i class="fa fa-trash" aria-hidden="true"></i></a><br><br></div>').appendTo(scntDiv);
            i++;
            return false;
        });
        
        $('#remScnt').live('click', function() { 
            if( i > 2 ) {
                $(this).parents("p").remove();
                i--;
            }
            return false;
        });
    });



</script>

