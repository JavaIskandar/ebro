@extends('layouts.appCreate')
@section('title', 'Home|E&Bro')

@section('content')
<!-- for codepen display purposes only -->
<div class="col-md-6">
    <div class="cardSimple">
        <div class="row">
            <div class="col-md-6">
                <img alt="Girl and Mountains" class="img-responsive" src="{{ asset('Product/T-Shirt/Male/blue.png') }}" alt="description of image">
            </div>
            <div class="col-md-4 ">
                <div class="caption" aria-describedby="cardSimpleTitle">
                    <h3>T-Shirt</h3>
                    <p><a href="{{ url('/create') }}">Pria</a></p>
                    <p><a href="{{ url('/create') }}">Wanita</a></p>
                    <p><a href="{{ url('/create') }}">Anak-anak</a></p>
                    <p><a href="{{ url('/create') }}">V-neck</a></p>
                    <p><a href="{{ url('/create') }}">Lengan Panjang</a></p>
                    <p><a href="{{ url('/create') }}">Polo</a></p>
                    <p><a href="{{ url('/create') }}">V-neck</a></p>
                    {{--<p>--}}
                        {{--<a class="btn btn-primary" href="http://wstestdesign.oit.ucdenver.edu/long-breadcrumb-level-one/long-breadcrumb-level-two/long-breadcrumb-level-three/long-breadcrumb-level-four/dtc5" role="button" aria-label="learn more">Learn More</a>--}}
                    {{--</p>--}}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="cardSimple">
        <div class="row">
            <div class="col-md-6">
                <img alt="Girl and Mountains" class="img-responsive" src="{{ asset('Product/Jacket/Hoodie_Red_jpeg_eaa99d02-85d4-4128-a175-45b1a82f9f1e_1024x1024.jpg') }}" alt="description of image">
            </div>
            <div class="col-md-4 ">
                <div class="caption" aria-describedby="cardSimpleTitle">
                    <h3>Jacket</h3>
                    <p><a href="{{ url('/create') }}">Jumper</a></p>
                    <p><a href="{{ url('/create') }}">Baseball</a></p>
                    <p><a href="{{ url('/create') }}">Wanita</a></p>
                    <p><a href="{{ url('/create') }}">V-neck</a></p>
                    <p><a href="{{ url('/create') }}">Raglan</a></p>
                    <p><a href="{{ url('/create') }}">Polo</a></p>
                    <p><a href="{{ url('/create') }}">V-neck</a></p>
                    {{--<p>--}}
                    {{--<a class="btn btn-primary" href="http://wstestdesign.oit.ucdenver.edu/long-breadcrumb-level-one/long-breadcrumb-level-two/long-breadcrumb-level-three/long-breadcrumb-level-four/dtc5" role="button" aria-label="learn more">Learn More</a>--}}
                    {{--</p>--}}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="cardSimple">
        <div class="row">
            <div class="col-md-6">
                <img alt="Girl and Mountains" class="img-responsive" src="{{ asset('Product/Kemeja/iconkemeja.png') }}" alt="description of image">
            </div>
            <div class="col-md-4 ">
                <div class="caption" aria-describedby="cardSimpleTitle">
                    <h3>Kemeja</h3>
                    <p><a href="{{ url('/create') }}">Pria</a></p>
                    <p><a href="{{ url('/create') }}">Wanita</a></p>
                    <p><a href="{{ url('/create') }}">Anak-anak</a></p>
                    <p><a href="{{ url('/create') }}">V-neck</a></p>
                    <p><a href="{{ url('/create') }}">Lengan Panjang</a></p>
                    <p><a href="{{ url('/create') }}">Polo</a></p>
                    <p><a href="{{ url('/create') }}">V-neck</a></p>
                    {{--<p>--}}
                    {{--<a class="btn btn-primary" href="http://wstestdesign.oit.ucdenver.edu/long-breadcrumb-level-one/long-breadcrumb-level-two/long-breadcrumb-level-three/long-breadcrumb-level-four/dtc5" role="button" aria-label="learn more">Learn More</a>--}}
                    {{--</p>--}}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="cardSimple">
        <div class="row">
            <div class="col-md-6">
                <img alt="Girl and Mountains" class="img-responsive" src="{{ asset('Product/Hijab/iconhijab.jpg') }}" alt="description of image">
            </div>
            <div class="col-md-4 ">
                <div class="caption" aria-describedby="cardSimpleTitle">
                    <h3>Hijab</h3>
                    <p><a href="{{ url('/create') }}">Pria</a></p>
                    <p><a href="{{ url('/create') }}">Wanita</a></p>
                    <p><a href="{{ url('/create') }}">Anak-anak</a></p>
                    <p><a href="{{ url('/create') }}">V-neck</a></p>
                    <p><a href="{{ url('/create') }}">Lengan Panjang</a></p>
                    <p><a href="{{ url('/create') }}">Polo</a></p>
                    <p><a href="{{ url('/create') }}">V-neck</a></p>
                    {{--<p>--}}
                    {{--<a class="btn btn-primary" href="http://wstestdesign.oit.ucdenver.edu/long-breadcrumb-level-one/long-breadcrumb-level-two/long-breadcrumb-level-three/long-breadcrumb-level-four/dtc5" role="button" aria-label="learn more">Learn More</a>--}}
                    {{--</p>--}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection