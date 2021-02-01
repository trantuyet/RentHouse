@extends('master')
@section('content')

    <div class="container">
        <div class="row sticky-wrapper">

            <div class="col-md-8">
                <!-- Listings -->
                <div class="listings-container grid-layout">

                    <!-- Listing Item -->
                    <div class="box-background-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="boxIn-background-1">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th scope="col">Tên phòng cho thuê</th>
                                                    <th scope="col">Địa chỉ </th>
                                                    <th scope="col">Người thuê</th>
                                                    <th scope="col">Số phòng ngủ </th>
                                                    <th scope="col">Số phòng tắm </th>
                                                    <th scope="col">Giá tiền thuê theo ngày </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <thead>
                                                @foreach ($houses as $house)
                                                    <tr>
                                                        <th scope="col">{{$house->name}}</th>
                                                        <th scope="col">{{$house->address}}</th>
                                                        <th scope="col">{{$house->user_id}}</th>
                                                        <th scope="col">{{$house->numberOfBedroom}}</th>
                                                        <th scope="col">{{$house->numberOfBathroom}}</th>
                                                        <th scope="col">{{number_format($house->pricePerDay,0,",",".")}}</th>
                                                    </tr>
                                                @endforeach
                                                </thead>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

@endsection

