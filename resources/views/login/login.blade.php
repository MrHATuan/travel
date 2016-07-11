<div class="container">
  <div class="modal fade login" id="loginModal">
    <div class="modal-dialog login animated">
        <div class="modal-content">
           <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Đăng Nhập</h4>
          </div>
          <div class="modal-body">  
              <div class="box">
                   <div class="content">
                      <div class="social">
                          <i class="fa fa-pied-piper-alt fa-5x" aria-hidden="true"></i>
                      </div>
                      <div class="division">
                          <div class="line l"></div>
                            <span>o0o</span>
                          <div class="line r"></div>
                      </div>

                      <div class="form loginBox">
                          <form method="post" action="{{ action('LoginController@postLogin') }}" accept-charset="UTF-8" id="form-login">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input id="LoEmail" class="form-control" type="email" placeholder="Email" name="LoEmail">
                            <input id="LoPass" class="form-control" type="password" placeholder="Mật Khẩu" name="LoPass">
                            <br>
                            <input class="btn btn-default btn-login" type="submit" value="Đăng Nhập">
                          </form>
                      </div>
                   </div>
              </div>
              <div class="box">
                  <div class="content registerBox" style="display:none;">
                    <div class="form">
                      <form method="post"  data-remote="true" action="{{ action('LoginController@postRegister') }}" accept-charset="UTF-8" id="form-register">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input id="email" class="form-control" type="email" placeholder="Email" name="email">
                        <input id="name" type="text" class="form-control" placeholder="Họ Tên" name="name">
                        <input id="password" class="form-control" type="password" placeholder="Mật Khẩu" name="password">
                        <input id="password_confirmation" class="form-control" type="password" placeholder="Mật Khẩu Xác Nhận" name="password_confirmation">
                        <br>
                        <input class="btn btn-default btn-register" type="submit" value="Đăng Ký" name="commit">
                      </form>
                    </div>
                  </div>
              </div>
          </div>
          <div class="modal-footer">
              <div class="forgot login-footer">
                  <span>Bạn chưa có tài khoản 
                       <a href="javascript: showRegisterForm();">Đăng Ký</a>?
                  </span>
              </div>
              <div class="forgot register-footer" style="display:none">
                   <span>Bạn đã có tài khoản?</span>
                   <a href="javascript: showLoginForm();">Đăng Nhập</a>
              </div>
          </div>        
        </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="{!! asset('assets/jquery/jquery-validate/jquery.validate.js') !!}"></script>
<script type="text/javascript">
  $("#form-login").validate({
    rules:{
      LoEmail:{
        required:true,
        email:true,
      },
      LoPass:{
        required:true,
      }
    },
    messages:{
      LoEmail:{
        required: "Chưa Nhập Email",
        email: "Email không đúng định dang",
      },
      LoPass:{
        required: "Chưa Nhập Mật Khẩu",
      }    
    }
  })

  $("#form-register").validate({
    rules:{
      email:{
        required:true,
        email:true,
      },
      name:{
        required:true,
        minlength:3,
      },
      password:{
        required:true,
        minlength:6,
      },
      password_confirmation:{
        equalTo:"#password",
      }
    },
    messages:{
      email:{
        required: "Chưa Nhập Email",
        email: "Email không đúng định dang",
      },
      name:{
        required: "Chưa Nhập Họ Tên",
        minlength: "Họ Tên Phải Từ 3 Ký Tự Trở Lên",
      },
      password:{
        required: "Chưa Nhập Mật Khẩu",
        minlength: "Mật Khẩu Phải Từ 6 Ký Tự Trở Lên",
      },
      password_confirmation:{
        equalTo: "Mật Khẩu Xác Nhận Không Đúng",
      }
    }
  })


</script>

