@extends('master')
@section('content')
    <form action="{{route('house.addhouse')}}" method="post">
        @csrf
    <div id="titlebar" class="submit-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><i class="fa fa-plus-circle"></i>Thêm nhà </h2>
                </div>


                <!-- Content
                ================================================== -->
                <div class="container">
                    <div class="row">

                        <!-- Submit Page -->
                        <div class="col-md-12">
                            <div class="submit-page">

                                <!-- Section -->
                                <h3>Thông tin ngôi nhà </h3>
                                <div class="submit-section">

                                    <!-- Title -->
                                    <div class="form">
                                        <h5>Tên căn nhà </h5>
                                        <input class="search-field" type="text" value="" name="name"/>
                                    </div>

                                    <!-- Row -->
                                    <div class="row with-forms">

                                        <!-- Status -->
                                        <div class="col-md-6">
                                            <h5>Trạng thái</h5>
                                            <select class="chosen-select-no-single">
                                                <option>Đang cho thuê</option>
                                                <option>Đã thuê</option>
                                            </select>
                                        </div>

                                        <!-- Type -->
                                        <div class="col-md-6">
                                            <h5>Loại nhà </h5>
                                            <select class="chosen-select-no-single" data-placeholder="Chọn loại nhà " name="typeOfRoom">
                                                <option label="blank"></option>
                                                <option>Phòng đơn</option>
                                                <option>Phòng đôi</option>
                                                <option>Phòng tổng thống</option>
                                                <option>Phòng VIP</option>
                                                <option>Phòng LUXURY</option>
                                            </select>
                                        </div>

                                    </div>
                                    <!-- Row / End -->


                                    <!-- Row -->
                                    <div class="row with-forms">

                                        <!-- Price -->
                                        <div class="col-md-4">
                                            <h5>Giá<i class="tip" data-tip-content="Nhập giá theo ngày "></i></h5>
                                            <div class="select-input disabled-first-option">
                                                <input type="text" name="pricePerDay" data-unit="VNĐ">
                                            </div>
                                        </div>


                                        <!-- Rooms -->
                                        <div class="col-md-4">
                                            <h5>Phòng ngủ</h5>
                                            <select class="chosen-select-no-single" name="numberOfBedroom"
                                                    data-placeholder="Chọn số phòng ngủ ">
                                                <option label="blank"></option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>More than 5</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <h5>Phòng tắm</h5>
                                            <select class="chosen-select-no-single" name="numberOfBathroom"
                                                    data-placeholder="Chọn số phòng tắm">
                                                <option label="blank"></option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>More than 5</option>
                                            </select>
                                        </div>

                                    </div>
                        <!-- Row / End -->

                    </div>

                    <div class="submit-section">

                        <!-- Row -->
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="address"
                                    value="{{old('address')}}">
                                @error('address')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </label>
                        </div>
                        <div class="form-group">
                            <label>Mô tả chung </label>
                            <label for=""></label><textarea class="form-control" name="desc" id=""
                                                            cols="30" rows="10">
              </textarea>
                            <div>
                                <h3>Chi Tiết Liên Hệ </h3>
                            </div>

                            <div class="submit-section">
                                <div class="row with-forms">

                                    <!-- Name -->
                                    <div class="col-md-4">
                                        <h5>Name</h5>
                                        <input type="text">
                                    </div>

                                    <!-- Email -->
                                    <div class="col-md-4">
                                        <h5>E-Mail</h5>
                                        <input type="text">
                                    </div>

                                    <!-- Name -->
                                    <div class="col-md-4">
                                        <h5>Phone</h5>
                                        <input type="text">
                                    </div>
                                </div>
                                <!-- Section -->
                                <h3>Tải ảnh để mô tả trực quan về ngôi nhà của bạn</h3>
                                <div class="submit-section">
                                    <form action="/file-upload" class="dropzone"></form>
                                </div>
                                <!-- Section / End -->
                            </div>
                            <!-- Row / End -->
                        </div>
                        <!-- Section / End -->
                        <div class="divider"></div>
                        <button class="button preview margin-top-5" type="submit">Đăng Nhà</button>
                    </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="{{asset('/js/dropdown.js')}}"></script>
        <script>
            $(".dropzone").dropzone({
                dictDefaultMessage: "<i class='sl sl-icon-plus'></i> Tải lên một hoặc nhiều hình ảnh về ngôi nhà của bạn, tại đây",
            });
        </script>
    </div>
    </form>

@endsection
