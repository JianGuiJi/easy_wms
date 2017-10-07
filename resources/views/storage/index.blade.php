@extends('layouts.app')

@section('title', '入库')


@section('content')

    <div data-role="page" id="home">
        <div data-role="header">
            @include('layouts.topbar')
            {{--<div data-role="navbar">--}}
                {{--<ul>--}}
                    {{--<li><a href="/" data-icon="home" data-transition="fade">主页</a></li>--}}
                    {{--<li><a href="#tbl_goods" data-icon="shop" data-transition="slidedown">列表</a></li>--}}
                    {{--<li><a href="#page3" data-icon="arrow-d-r" data-transition="flow">入库</a></li>--}}
                    {{--<li><a href="#pagetwo" data-icon="arrow-u-r" data-transition="slidefade">出库</a></li>--}}
                    {{--<li><a href="#pagetwo" data-icon="search" >搜索</a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        </div>


        <div data-role="main" class="ui-content">
            <table data-role="table" class="ui-responsive">
                <thead>
                <tr>
                    <th>CustomerID</th>
                    <th>CustomerName</th>
                    <th>ContactName</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>PostalCode</th>
                    <th>Country</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Obere Str. 57</td>
                    <td>Berlin</td>
                    <td>12209</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Antonio Moreno Taquer</td>
                    <td>Antonio Moreno</td>
                    <td>Mataderos 2312</td>
                    <td>Mico D.F.</td>
                    <td>05023</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Around the Horn</td>
                    <td>Thomas Hardy</td>
                    <td>120 Hanover Sq.</td>
                    <td>London</td>
                    <td>WA1 1DP</td>
                    <td>UK</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Berglunds snabbk</td>
                    <td>Christina Berglund</td>
                    <td>Berguvsven 8</td>
                    <td>Lule</td>
                    <td>S-958 22</td>
                    <td>Sweden</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div data-role="footer"></div>
    </div>
    <div data-role="page" id="tbl_goods">
        <div data-role="header" data-theme="a">
            @include('layouts.topbar')
            商品列表
        </div>
        <div data-role="main" class="ui-content">
            <table data-role="table" class="ui-responsive">
                <thead>
                <tr>
                    <th>CustomerID</th>
                    <th>CustomerName</th>
                    <th>ContactName</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>PostalCode</th>
                    <th>Country</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Obere Str. 57</td>
                    <td>Berlin</td>
                    <td>12209</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Antonio Moreno Taquer</td>
                    <td>Antonio Moreno</td>
                    <td>Mataderos 2312</td>
                    <td>Mico D.F.</td>
                    <td>05023</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Around the Horn</td>
                    <td>Thomas Hardy</td>
                    <td>120 Hanover Sq.</td>
                    <td>London</td>
                    <td>WA1 1DP</td>
                    <td>UK</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Berglunds snabbk</td>
                    <td>Christina Berglund</td>
                    <td>Berguvsven 8</td>
                    <td>Lule</td>
                    <td>S-958 22</td>
                    <td>Sweden</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div data-role="footer"></div>
    </div>
@endsection