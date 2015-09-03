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
                        <h3 class="text-center"><i class="fa fa-lock"></i> {{ Lang::get("passwords.title") }}</h3>
                    </div>
                    <div class="widget-content">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if($errors->has())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </div>
                        @endif
                        {!! Form::open(["route" => "user.forgotten"]) !!}
                        <div class="form-group relative-w">
                            {!! Form::text("email", Input::old("email"), ["placeholder" => Lang::get("user.email"), "class" => "form-control"]) !!}
                            <i class="fa fa-user input-abs-icon"></i>
                        </div>
                        <button class="btn btn-primary btn-rounded btn-iconed">
                            <span>{{ Lang::get("passwords.button") }}</span>
                            <i class="fa fa-arrow-right"></i>
                        </button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop