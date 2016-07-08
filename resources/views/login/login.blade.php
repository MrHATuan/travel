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
                      
                      @include('errors.error')

                      <div class="form loginBox">
                          <form method="post" action="/login" accept-charset="UTF-8">
                          <input id="email" class="form-control" type="email" placeholder="Email" name="email">
                          <input id="password" class="form-control" type="password" placeholder="Mật Khẩu" name="password">
                          <input class="btn btn-default btn-login" type="button" value="Đăng Nhập" >
                          </form>
                      </div>
                   </div>
              </div>
              <div class="box">
                  <div class="content registerBox" style="display:none;">
                   <div class="form">
                      <form method="post"  data-remote="true" action="/register" accept-charset="UTF-8">
                      <input id="email" class="form-control" type="email" placeholder="Email" name="email">
                      <input id="fullname" type="text" class="form-control" placeholder="Họ Tên" name="fullname">
                      <input id="password" class="form-control" type="password" placeholder="Mật Khẩu" name="password">
                      <input id="password_confirmation" class="form-control" type="password" placeholder="Mật Khẩu Xác Nhận" name="password_confirmation">
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