@extends("layout.main")

@section("main")
    <div class="all-wrapper no-menu-wrapper light-bg">
        <div class="login-logo-w">
            <a href="{{ URL::route("dashboard.index") }}" class="logo">
                <i class="fa fa-laptop"></i>
            </a>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">

                <div class="widget widget-blue">
                    <div class="widget-title">
                        <h3 class="text-center"><i class="fa fa-lock"></i> {{ Lang::get("login.title") }}</h3>
                    </div>
                    <div class="widget-content">
                        <form action="" role="form">
                            <div class="form-group relative-w">
                                <input type="text" class="form-control" placeholder="Username">
                                <i class="fa fa-user input-abs-icon"></i>
                            </div>
                            <div class="form-group relative-w">
                                <input type="password" class="form-control" placeholder="Password">
                                <i class="fa fa-lock input-abs-icon"></i>
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Remember Me
                                    </label>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-rounded btn-iconed">
                                <span>Login</span>
                                <i class="fa fa-arrow-right"></i>
                            </button>
                            <div class="no-account-yet">
                                Forgetten Password? <a href="#">Reset Password</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop