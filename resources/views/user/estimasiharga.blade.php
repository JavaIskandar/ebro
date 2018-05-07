@extends('layouts.appCreate')

@section('content')
    <section id="cart_items">
        <div class="container">
            <div class="table-responsive cart_info">
                <div class="modal-header">
                    <label><h3>Pilihan Ukuran</h3></label>
                </div>
                <div class="col-sm-12"><label><h4>Masukkan jumlah pada ukuran yang diinginkan :</h4></label></div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="chose_area">
                            <ul class="user_info">
                                <li class="col-sm-2">
                                    <label><center>S</center></label>
                                    <input type="text">
                                </li>
                                <li class="col-sm-2">
                                    <label><center>M</center></label>
                                    <input type="text">
                                </li>
                                <li class="col-sm-2">
                                    <label><center>L</center></label>
                                    <input type="text">
                                </li>
                                <li class="col-sm-2">
                                    <label><center>XL</center></label>
                                    <input type="text">
                                </li>
                                <li class="col-sm-2">
                                    <label><center>XXL</center></label>
                                    <input type="text">
                                </li>
                            </ul>
                            <div class="col-sm-12"><label><h4>Estimasi Harga : </h4><h2>Rp. 80.000</h2></label></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                        <div class="btn-group btn-group-justified" role="group" aria-label="...">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-default"><i class="fa fa-backward"></i>  Kembali ke desain</button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-warning"><i class="fa fa-shopping-cart"></i>  Masukkan ke cart</button>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
@endsection