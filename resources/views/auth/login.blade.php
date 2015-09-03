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
                        @if($errors->has())
                            <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                            </div>
                        @endif
                        {!! Form::open(["route" => "user.login"]) !!}
                            <div class="form-group relative-w">
                                {!! Form::text("username", Input::old("username"), ["placeholder" => Lang::get("user.username"), "class" => "form-control"]) !!}
                                <i class="fa fa-user input-abs-icon"></i>
                            </div>
                            <div class="form-group relative-w">
                                {!! Form::password("password", ["placeholder" => Lang::get("user.password"), "class" => "form-control"]) !!}
                                <i class="fa fa-lock input-abs-icon"></i>
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        {!! Form::checkbox("remember", true, false) !!}
                                        {{ Lang::get("login.remember-me") }}
                                    </label>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-rounded btn-iconed">
                                <span>{{ Lang::get("login.login") }}</span>
                                <i class="fa fa-arrow-right"></i>
                            </button>
                            <div class="no-account-yet">
                                {{ Lang::get("login.forgetten-password") }} <a href="{{ URL::route("user.forgotten") }}">{{ Lang::get("login.reset-password") }}</a>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop