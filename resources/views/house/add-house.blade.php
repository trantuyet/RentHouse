@extends('master')
@section('content')
    <!-- Titlebar
================================================== -->
    <div id="titlebar" class="submit-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><i class="fa fa-plus-circle"></i> Đăng nhà cho thuê</h2>
                </div>
                <!-- Content
                ================================================== -->
                <div class="container">
                    <div class="row">

                        <!-- Submit Page -->
                        <div class="col-md-12">
                            <div class="submit-page">

                                <div class="notification notice large margin-bottom-55">
                                    <h4>Don't Have an Account?</h4>
                                    <p>If you don't have an account you can create one by entering your email address in
                                        contact details section. A password will be automatically emailed to you.</p>
                                </div>

                                <!-- Section -->
                                <h3>Thông tin nhà</h3>
                                <div class="submit-section">

                                    <!-- Title -->
                                    <div class="form">
                                        <h5>Tên bài đăng <i class="tip"
                                                            data-tip-content="Type title that will also contains an unique feature of your property (e.g. renovated, air contidioned)"></i>
                                        </h5>
                                        <input class="search-field" name="name" type="text" value=""/>
                                    </div>

                                    <!-- Row -->
                                    <div class="row with-forms">

                                        <!-- Status -->
                                        <div class="col-md-6">
                                            <h5>Trạng thái thuê</h5>
                                            <select name="status" class="chosen-select-no-single">
                                                <option value="{{ \App\Http\Controllers\StatusConst::LEASE }}">Cho
                                                    thuê
                                                </option>
                                                <option value="{{ \App\Http\Controllers\StatusConst::UN_LEASE }}">Không
                                                    cho thuê
                                                </option>
                                            </select>
                                        </div>

                                        <!-- Type -->
                                        <div class="col-md-6">
                                            <h5>Loại nhà</h5>
                                            <select name="category_id" class="chosen-select-no-single">
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>
                                    <!-- Row / End -->

                                    <!-- Row -->
                                    <div class="row with-forms">

                                        <!-- Price -->
                                        <div class="col-md-4">
                                            <h5>Giá thuê/ngày <i class="tip"
                                                                 data-tip-content="Type overall or monthly price if property is for rent"></i>
                                            </h5>
                                            <div class="select-input disabled-first-option">
                                                <input type="text" data-unit="VND">
                                            </div>
                                        </div>

                                        <!-- Area -->
                                        <div class="col-md-4">
                                            <h5>Số phòng ngủ</h5>
                                            <select name="numberOfBedroom" class="chosen-select-no-single">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>

                                        <!-- Rooms -->
                                        <div class="col-md-4">
                                            <h5>Số phòng tắm</h5>
                                            <select name="numberOfBathroom" class="chosen-select-no-single">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>

                                    </div>
                                    <!-- Row / End -->

                                </div>
                                <!-- Section / End -->
                                <!-- Section -->
                                <h3>Vị trí</h3>
                                <div class="submit-section">
                                    <!-- Row -->
                                    <div class="row with-forms">

                                        <!-- Address -->
                                        <div class="col-md-12">
                                            <h5>Địa chỉ</h5>
                                            <input name="address" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Mô tả chung </label>
                                        <label for=""></label><textarea class="form-control" name="desc" id=""
                                                                        cols="30" rows="10">
              </textarea>

                                        <!-- Row / End -->

                                    </div>
                                    <!-- Section / End -->
                                    <a href="#" class="button preview margin-top-5">Preview <i
                                            class="fa fa-arrow-circle-right"></i></a>

                                </div>
                            </div>

                        </div>
                    </div>
@endsection
