@include('layouts.header')
@extends('sweetalert::alert') 
<body class="vertical-layout vertical-menu-modern semi-dark-layout 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column" data-layout="semi-dark-layout">
    @if(Session::get('failed'))
        <h1>{{Session::get('failed')}}</h1>
    @endif
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
          <section class="row flexbox-container">
            <div class="col-xl-8 col-11 d-flex justify-content-center">
              <div class="card bg-authentication rounded-0 mb-0">
                <div class="row m-0">
                  <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                    <img src="./images/pages/login.png" alt="branding logo" loading = "lazy">
                  </div>
                  <div class="col-lg-6 col-12 p-0">
                    <div class="card rounded-0 mb-0 px-2">
                      <div class="card-header pb-1">
                        <div class="card-title">
                          <h4 class="mb-0">Login</h4>
                        </div>
                      </div>
                      <p class="px-2">Welcome back, please login to your account.</p>
                      <div class="card-content">
                        <div class="card-body pt-1">
                          <form action="{{ route('doPost')}}" method="POST">
                            @csrf
                            <fieldset class="form-label-group form-group position-relative has-icon-left">
                              <input type="text" name="username" class="form-control" id="user-name" placeholder="Username" required>
                              <div class="form-control-position">
                                <i class="feather icon-user"></i>
                              </div>
                              <label for="user-name">Username</label>
                            </fieldset>
  
                            <fieldset class="form-label-group position-relative has-icon-left">
                              <input type="password" class="form-control" name="password" id="user-password" placeholder="Password" required>
                              <div class="form-control-position">
                                <i class="feather icon-lock"></i>
                              </div>
                              <label for="user-password">Password</label>
                            </fieldset>
                            <!-- <a href="auth-register.html" class="btn btn-outline-primary float-left btn-inline">Register</a> -->
                            <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
                          </form>
                        </div>
                      </div>
  
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
  
        </div>
      </div>
    </div>
</body>
@include('layouts.script')