@extends('master')
@section('content')
    <div class="container">
        <!--Tab -->
        <div class="my-account style-1 margin-top-5 margin-bottom-40">
            <form method="post" action="{{route('house.addhouse')}}" class="formAddHouse" enctype="multipart/form-data">
                @csrf
                <div class="layout-switcher hidden"><a class="list"><i class="fa fa-th-list"></i></a>
                </div>
                <div class="listings-container list-layout">
                    <div class="col-md-8 my-profile">
                        <h3 class="desc-headline">Tạo nhà mới</h3>
                        <div class="form-group">
                            <label> Tên nhà</label>
                            <label>
                                <input value="{{old('name')}}" type="text" name="name">
                            </label>
                        </div>
                        <div class="form-group">
                            <label> Giá thuê </label>
                            <label>
                                <input value="{{old('price')}}" type="text" name="price">
                            </label>
                        </div>
                        <div class="form-group">
                            <label> Loại phòng</label>
                            <label>
                                <select data-placeholder="Loại phòng" class="chosen-select-no-single" name="typeRoom">
                                    <option value="single">Phòng đơn</option>
                                    <option value="couple">Phòng đôi</option>
                                    <option value="president">Phòng tổng thống</option>
                                    <option value="vip">Phòng VIP</option>
                                    <option value="luxury">Phòng Luxury</option>
                                </select>
                            </label>
                        </div>
                        <div class="row with-forms">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Số lượng phòng ngủ
                                        <select class="chosen-select-no-single" name="bedroom">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row with-forms">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Số lượng phòng tắm
                                        <select class="chosen-select-no-single" name="bathroom">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="address"
                                    value="{{old('address')}}">
                            </label>
                        </div>
                        <div class="form-group">
                            <label>Mô tả chung </label>
                            <label for=""></label><textarea class="form-control" name="description" id=""
                                                            cols="30" rows="10">
              </textarea>
                        </div>
{{--                        <div class="form-group">--}}
{{--                            <div class="change-photo-btn">--}}
{{--                                <div class="photoUpload">--}}
{{--                                    <span><i class="fa fa-upload"></i>Đăng ảnh nhà</span>--}}
{{--                                    <input type="file" accept="image/*" class="form-control">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <a class="btn btn-primary btn-block float-right">Về trang danh sách nhà </a>
                        </div>
                        <div class="form-group col-md-6">
                            <button type="submit" class="button margin-top-20 margin-bottom-20"> Lưu thay đổi
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
