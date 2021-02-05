@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <!--Tab -->

                <div class="my-account style-1 margin-top-5 margin-bottom-40">
                    <ul class="tabs-nav">
                        <li class=""><a href="login/#tab1">Đăng nhập</a></li>
                    </ul>
                    <div class="tabs-container alt">
                        <!-- Login -->
                        <div class="tab-content" id="tab1">
                            @if(\Illuminate\Support\Facades\Session::has('login_error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Lỗi! </strong>{{ \Illuminate\Support\Facades\Session::get('login_error') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <form method="post" action="{{route('login.submit')}}" class="login">
                                @csrf
                                <div>
                                    <label>Email:
                                        <i class="im im-icon-Male"></i>
                                        <input name="email" value="{{old('email')}}" class="form-control" type="text"
                                        >
                                    </label>
                                </div>
                                <div>
                                    <label for="password">Mật khẩu :
                                        <i class="im im-icon-Lock-2"></i>
                                        <input class="input-text" value="{{old('password')}}" type="password"
                                               name="password"/>
                                    </label>
                                </div>
                                <div class="form-row">
                                    <button type="submit" class="button border fw margin-top-10">Đăng nhập</button>
                                    <a href="{{ url('/redirect') }}" style="margin-top: 20px;"
                                       class="btn btn-lg btn-success btn-block">
                                        <strong>Login With Google</strong>
                                    </a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
