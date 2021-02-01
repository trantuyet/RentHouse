@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <button class="button social-login via-gplus"><i class="fa fa-google-plus"></i> Đăng nhập bằng Google
                </button>
                <!--Tab -->
                <div class="my-account style-1 margin-top-5 margin-bottom-40">
                    <ul class="tabs-nav">
                        <li class=""><a href="login/#tab1">Đăng nhập</a></li>
                    </ul>
                    <div class="tabs-container alt">
                        <!-- Login -->
                        <div class="tab-content" id="tab1">

                            <form method="post" action="{{route('login.submit')}}" class="login">
                                @csrf
                                <div>
                                    <label>Email:
                                        <i class="im im-icon-Male"></i>
                                        <input name="email" value="{{old('email')}}" class="form-control" type="text"
                                               >
                                        @error('email')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </label>
                                </div>
                                <div>
                                    <label for="password">Mật khẩu :
                                        <i class="im im-icon-Lock-2"></i>
                                        <input class="input-text" value="{{old('password')}}" type="password" name="password" id="password"  />

                                        @error('password')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </label>


                                </div>

                                <div class="form-row">
                                    <button type="submit" class="button border fw margin-top-10">Đăng nhập</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
