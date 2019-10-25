@include('base.header')
<div class="login" style="background: url('images/loginbg.jpg') no-repeat;">
    <div class="insider">
        <div class="logo_login">
            <img src="images/login.png" width="330px" height="auto" alt="saokim" width="">
        </div>
        <div class="logincontent">
            <div id="tabs-container">
                <ul class="tabs-menu">
                    <li class="current">Khách hàng</li>
                    <li class="">Sao Kim members</li>
                </ul>
                <div class="clearfix"></div>
                <div class="tab">
                    <div id="tab-1" class="tab-content current">
                        <form action="{{Route('login')}}" method="post">
                            <div id="cust_loading"></div>
                            <div class="text username"><span style="background: url(images/login_user.png) no-repeat;"></span><input type="text" name="email" id="cust_email" value="" class="login-text-input" placeholder="Tên đăng nhập hoặc Email"></div>

                            <div class="text password"><span style="background: url(images/login_pass.png) no-repeat;"></span><input type="password" name="password" id="cust_password" class="login-text-input" placeholder="Nhập mật khẩu"></div>

                            <div class="options">
                                <label><input type="checkbox" name="cust_remember" id="cust_remember" value="yes"> <strong>Duy trì đăng nhập</strong></label> / <a href="#">Quên mật khẩu?</a>
                            </div>
                            <input type="hidden" name="frm_check" value="clients"/>
                            <button type="submit" name="sub_login_clients" class="btn-login" id="cust-login">Đăng nhập</button>
                            {{csrf_field()}}
                        </form>
                    </div>

                    <div id="tab-2" class="tab-content">
                        <form action="{{Route('login')}}" method="post">
                            <span id="member_loading"></span>
                            <div class="text username">
                                <span style="background: url(images/login_user.png) no-repeat;"></span><input type="text" name="email" id="username" value="tungtt" placeholder="Tên đăng nhập hoặc Email" class="">
                            </div>
                            <div class="text password"><span style="background: url(images/login_pass.png) no-repeat;"></span><input type="password" name="password" id="password" value="" placeholder="Nhập mật khẩu" class=""></div>
                            <input type="hidden" name="r" value="">
                            <div class="options">
                                <label><input type="checkbox" name="remember_me" id="remember_me" value="yes" checked=""> <strong>Duy trì đăng nhập</strong></label> / <a href="">Quên mật khẩu?</a>
                            </div>
                            <input type="hidden" name="frm_check" value="admin"/>
                            <button type="submit" name="sub_login_admin" class="btn-login" id="member-login">Đăng nhập</button>
                            {{csrf_field()}}
                        </form>
                    </div>
                    @if(isset($error))
                        <div class="alert alert-danger">
                            {{ $error }}
                        </div>
                    @endif
                </div> <!--  tab -->
            </div><!--  tabs-container -->

        </div>
    </div>
</div>
@include('base.footer')
