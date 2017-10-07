@extends('layouts.app')

@section('title', '商品管理')

@section('content')
    <div data-role="page" id="home">
        <div data-role="header">
            @include('layouts.topbar')
            <div data-role="navbar">
                <ul>
                    <li><a href="/" data-icon="home" data-transition="fade">主页</a></li>
                    <li><a href="/goods" data-icon="shop" data-transition="slidedown">商品</a></li>
                    <li><a href="#page3" data-icon="arrow-d-r" data-transition="flow">入库</a></li>
                    <li><a href="#pagetwo" data-icon="arrow-u-r" data-transition="slidefade">出库</a></li>
                    <li><a href="#pagetwo" data-icon="search" >搜索</a></li>
                </ul>
            </div>
        </div>


        <div data-role="main">
            <h1>欢迎使用 easy wms</h1>

        </div>
        <div data-role="footer" data-position="fixed" data-tap-toggle="false" class="jqm-footer">
            @include('layouts.footer')
        </div><!-- /footer -->
    </div>
@endsection