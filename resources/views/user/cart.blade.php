@extends('layouts.appCreate')

@section('content')
<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Keranjang Belanja</li>
            </ol>
        </div>
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                <tr class="cart_menu">
                    <td class="image">Item</td>
                    <td class="description"></td>
                    <td class="price">Harga</td>
                    <td class="quantity">Jumlah</td>
                    <td class="total">Total</td>
                    <td></td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="cart_product">
                        <a href=""><img src="images/cart/one.png" alt=""></a>
                    </td>
                    <td class="cart_description">
                        <h4><a href="">Jaket</a></h4>
                    </td>
                    <td class="cart_price">
                        <p>Rp 100.000</p>
                    </td>
                    <td class="cart_quantity">
                        <div class="cart_quantity_button">
                            <a class="cart_quantity_up" href=""> + </a>
                            <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                            <a class="cart_quantity_down" href=""> - </a>
                        </div>
                    </td>
                    <td class="cart_total">
                        <p class="cart_total_price">Rp 100.000</p>
                    </td>
                    <td class="cart_delete">
                        <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                    </td>
                </tr>

                <tr>
                    <td class="cart_product">
                        <a href=""><img src="images/cart/two.png" alt=""></a>
                    </td>
                    <td class="cart_description">
                        <h4><a href="">Kaos Cowok</a></h4>
                    </td>
                    <td class="cart_price">
                        <p>Rp 100.000</p>
                    </td>
                    <td class="cart_quantity">
                        <div class="cart_quantity_button">
                            <a class="cart_quantity_up" href=""> + </a>
                            <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                            <a class="cart_quantity_down" href=""> - </a>
                        </div>
                    </td>
                    <td class="cart_total">
                        <p class="cart_total_price">Rp 100.000</p>
                    </td>
                    <td class="cart_delete">
                        <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                    </td>
                </tr>
                <tr>
                    <td class="cart_product">
                        <a href=""><img src="images/cart/three.png" alt=""></a>
                    </td>
                    <td class="cart_description">
                        <h4><a href="">Kaos Cewek</a></h4>
                    </td>
                    <td class="cart_price">
                        <p>Rp 100.000</p>
                    </td>
                    <td class="cart_quantity">
                        <div class="cart_quantity_button">
                            <a class="cart_quantity_up" href=""> + </a>
                            <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                            <a class="cart_quantity_down" href=""> - </a>
                        </div>
                    </td>
                    <td class="cart_total">
                        <p class="cart_total_price">Rp 100.000</p>
                    </td>
                    <td class="cart_delete">
                        <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section> <!--/#cart_items-->

<section id="do_action">
    <div class="container">
        <div class="heading">
            <h3>What would you like to do next?</h3>
            <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="chose_area">
                    <ul class="user_info">
                        <li class="single_field">
                            <label>Provinsi :</label>
                            <select>
                                <option>Jawa Timur</option>
                                <option>Jawa Barat</option>
                                <option>Jawa Tengah</option>
                                <option>NTT</option>
                                <option>Sulawesi Utara</option>
                                <option>Sulawesi Selatan</option>
                                <option>Sulawesi Tenggara</option>
                                <option>Kalimantan Timur</option>
                            </select>

                        </li>
                        <li class="single_field">
                            <label>Kota :</label>
                            <select>
                                <option>Surabaya</option>
                                <option>Jakarta</option>
                                <option>Semarang</option>
                                <option>Surakarta</option>
                                <option>Yogyakarta</option>
                                <option>Bandung</option>
                                <option>Bogor</option>
                                <option>Gresik</option>
                            </select>

                        </li>
                        <li class="single_field zip-field">
                            <label>Kode Pos:</label>
                            <input type="text">
                        </li>
                    </ul>
                    <a class="btn btn-default check_out" href="">Continue</a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="total_area">
                    <ul>
                        <li>Sub Total <span>Rp 100.000</span></li>
                        <li>Biaya Pengiriman <span>Rp 10.000</span></li>
                        <li>Total <span>Rp 100.000</span></li>
                    </ul>
                    <a class="btn btn-default check_out" href="">Check Out</a>
                </div>
            </div>
        </div>
    </div>
</section>
    @endsection