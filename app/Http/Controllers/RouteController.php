<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    ##路由

    //首页
    public  function RouteIndex(){
        return view('index');
    }

    # 商品管理 页面
    public  function RouteGoods(){
        return view('goods.index');
    }
    ## 入库管理
    public  function RouteStorage(){
        return view('storage.index');
    }
    ## 出库管理
    public  function RouteOutStorage(){
        return view('outstorage.index');
    }

}
