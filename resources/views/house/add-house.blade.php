@extends('master')
@section('content')
    <div id="titlebar" class="submit-page">
        <div class="container">
            <div class="row">
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
                                <h4>Bạn có nhà muốn cho thuê?</h4>
                                <p>Vui lòng điền đầy đủ thông tin về ngôi nhà của bạn để mọi người có được thông tin cần
                                    thiết</p>
                            </div>
                            <form action="{{ route('house.addhouse') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <!-- Section -->
                                <h3>Thông tin nhà</h3>
                                <div class="submit-section">
                                    <!-- Title -->
                                    <div class="form">
                                        <h5>Tên bài đăng <i class="tip"
                                                            data-tip-content="Tên bài đăng thể hiện khái quát ngôi nhà của bạn"></i>
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
                                                <option value="{{ \App\Http\Controllers\StatusConst::UN_LEASE }}">
                                                    Không
                                                    cho thuê
                                                </option>
                                            </select>
                                        </div>

                                        <!-- Type -->
                                        <div class="col-md-6">
                                            <h5>Loại nhà</h5>
                                            <select name="category_id" class="chosen-select-no-single">
                                                @foreach($categories as $category)
                                                    <option
                                                        value="{{ $category->id }}">{{ $category->name }}</option>
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
                                                                 data-tip-content="Hãy đưa ra một mức giá hợp lí, sau đó có thể thỏa thuận lại với người thuê sau"></i>
                                            </h5>
                                            <div class="select-input disabled-first-option">
                                                <input name="pricePerDay" type="text" data-unit="VNĐ">
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
                                        <label for=""></label>
                                        <textarea class="form-control" name="desc" cols="30" rows="10"></textarea>
                                        <!-- Row / End -->
                                    </div>

                                <h3>Hình ảnh</h3>
                                <!-- Row -->
                                <div class="row with-forms">

                                    <!-- Address -->
                                    <div class="col-md-12">
                                        <input name="image" type="file" id="image_thumbnail">
                                    </div>
                                    <div class="col-md-12">
                                        <a id="new_image" class="button" style="float: right">Thêm ảnh</a>
                                    </div>
                                </div>
                                <div class="submit-section">
                                    <!-- Section / End -->
                                    <button type="submit" class="button preview margin-top-5">Đăng <i
                                            class="fa fa-arrow-circle-right"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

