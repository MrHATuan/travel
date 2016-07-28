@extends('layouts.layouts')
<?php
$name= Auth::user()->name;
?>
@section('title', $name)
@section('content')

<link rel="stylesheet" href="{!! asset('assets/css/mystyle/editprofile.css') !!}" /> 


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
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div style="align: center;">
                    <legend class="legend">
                    Thông Tin Cá Nhân
                    </legend>
                </div>
                <br><br>
                <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('uploads/avatars/' . $user->avatar) }}" style="width: 230px; height: 230px; float: left; border-radius: 50%; margin-right: 25px;">
                        </div>
                        <div class="col-md-6">
                            <h2>{{  $user->name }}</h2>
                            <br>
                            <label style="font-size: 20px;">Email</label>
                            <p>{{ $user->email }}</p>
                            <label style="font-size: 20px;">Số Bài Đăng</label>
                            <p>5</p>
                            <br>
                        </div>   
                    </div> 
                    <br><br><br><br>
                    <br><br>   
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-4 col-md-offset-3">
                        <a class="btn btn-raised pull-right btn-info" data-toggle="modal" href="javascript:void(0)" onclick="openEditModal();">Sữa Thông Tin</a>    
                    </div>
                </div>
            </div>
        </div>
    </div>    
<br><br><br><br>
</div>

<div class="container">
    <div class="modal fade edit" id="editModal">
        <div class="modal-dialog edit animated">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <div class="title">
                        <h3>Cập Nhật Thông Tin</h3>
                    </div>
                    <div class="division">
                        <div class="line l"></div>
                            <span>o0o</span>
                        <div class="line r"></div>
                    </div>
                </div>
                <br><br>
                <div class="modal-body">
                    <div class="box">
                        <div class="content"> 
                            <div class="form editBox">
                                <div class="col-md-10 col-md-offset-1">
                                    <img src="{{ asset('uploads/covers/' . $user->cover) }}" id="Cover" class="img-thumbnail" style="width: 900px; height: 550px;"">
                                </div>
                                <br><br>     
                                    <form action="{{ route('getEditProfile', Auth::user()->name) }}" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="row">
                                            <div class="col-md-6 col-md-offset-3">
                                                <span class="btn btn-file">
                                                    <button type="button" class="fileupload-new btn btn-info btn-simple btn-upload">Đổi Ảnh Bìa</button>
                                                    <input type="file" name="cover" value="{{ $user->cover }}" placeholder="{{ $user->cover }}" onchange="readURL(this);">
                                                    <script type="text/javascript">
                                                        function readURL(input) {
                                                            if (input.files && input.files[0]) {
                                                                var reader = new FileReader();
                                                                reader.onload = function (e) {
                                                                    $('#Cover').attr('src', e.target.result);
                                                                }
                                                                reader.readAsDataURL(input.files[0]);
                                                            }
                                                        }                                                         
                                                    </script>
                                                </span>
                                                <br><br>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="photo-container">
                                                            <div>
                                                                <img src="{{ asset('uploads/avatars/' . $user->avatar) }}" id="Avatar" style="width: 200px; height: 200px; float: left; border-radius: 50%; margin-right: 25px;" />
                                                            </div>
                                                            <span class="btn btn-file">
                                                                <button type="button" class="fileupload-new btn btn-info btn-simple btn-upload">Đổi ảnh đại diện</button>
                                                                <input type="file" name="avatar" value="{{ $user->avatar }}" placeholder="{{ $user->avatar }}" onchange="readURL1(this);">
                                                                <script type="text/javascript">
                                                                    function readURL1(input) {
                                                                        if (input.files && input.files[0]) {
                                                                            var reader = new FileReader();
                                                                            reader.onload = function (e) {
                                                                                $('#Avatar').attr('src', e.target.result);
                                                                            }
                                                                            reader.readAsDataURL(input.files[0]);
                                                                        }
                                                                    }                                                         
                                                                </script>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <br><br>
                                                        <label style="font-size: 20px;">Email</label>
                                                        <p>{{ $user->email }}</p>          
                                                    </div> 
                                                </div>
                                                <label>Họ Tên</label>
                                                <input type="text" name="name" id="name" class="form-control" value="{!! old('name', isset($user) ? $user->name : null) !!}">
                                                <br>
                                                <label>Mật Khẩu Cũ</label>
                                                <input type="password" name="oldPass" id="oldPass" class="form-control" placeholder="Mật Khẩu Cũ">
                                                <label>Mật Khẩu Mới</label>
                                                <input type="password" name="password" id="password" class="form-control" placeholder="Mật Khẩu Mới">
                                                <br>
                                                <label>Xác Nhận Mật Khẩu Mới</label>
                                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Mật Khẩu Xác Nhận">
                                                <br>
                                            </div>  
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-md-offset-4">
                                                <input type="submit" name="commit" value="Lưu Thay Đổi" class="btn btn-raised btn-block pull-right btn-primary">
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
    </div>               
</div>

<script type="text/javascript" src="{!! asset('assets/jquery/jquery-validate/jquery.validate.js') !!}"></script>

<script type="text/javascript">
    function showEditForm(){
        $('.editBox').fadeIn('fast');    
    }

    function openEditModal(){
        showEditForm();
        setTimeout(function(){
            $('#editModal').modal('show');    
        }, 230);       
    }
</script>

@endsection