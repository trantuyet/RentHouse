@extends('master')
@section('content')
    <!-- Container -->
    <div class="container">

        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <!--Tab -->
                <div class="my-account style-1 margin-top-5 margin-bottom-40">

                    <ul class="tabs-nav">
                        <li class=""><a href="register/#tab2">Đăng kí</a></li>
                    </ul>

                    <div class="tabs-container alt">

                        <!-- Register -->
                        <div class="tab-content" id="tab2">

                            <form method="post" action="{{ route('register') }}" class="register">
                                @csrf
                                <div class="form-row form-row-wide">
                                    <label>Username:
{{--                                        <i class="im im-icon-Male"></i>--}}
                                        <input name="name" >
                                    </label>
                                    @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-row form-row-wide">
                                    <label>Email Address:
{{--                                        <i class="im im-icon-Mail"></i>--}}
                                        <input name="email" class="form-control" type="text"> </label>
                                    @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-row form-row-wide">
                                    <label>Password:
{{--                                        <i class="im im-icon-Lock-2"></i>--}}
                                        <input class="form-control"
                                               name="password"/>
                                    </label>
                                    @error('password')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <label>Repeat Password:
                                    <i class="im im-icon-Lock-2"></i>
                                    <input
                                        type="password" id="name"
                                        name="newPassAgain"
                                    />
                                    <a href=""></a>
                                </label>
                                <div class="form-row">
                                    <button type="submit" class="button border fw margin-top-10">Đăng kí</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
