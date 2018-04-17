<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- <html xmlns="http://www.w3.org/1999/xhtml"> -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>首页</title>
<link rel="stylesheet" type="text/css" href="/TP/Public/Home/css/style.css" />
<link rel="stylesheet" type="text/css" href="/TP/Public/Home/css/zhonglingxm2.css" />
<link rel="stylesheet" type="text/css" href="/TP/Public/Home/css/shopping-mall-index.css" />
<script type="text/javascript" src="/TP/Public/Home/js/jquery.js"></script>
<script type="text/javascript" src="/TP/Public/Home/js/zhonglin.js"></script>
<script type="text/javascript" src="/TP/Public/Home/js/zhongling2.js"></script>
</head>

<body id="top">

	<!--header-->
    <div class="zl-header">
    	<div class="zl-hd w1200">
        	<p class="hd-p1 f-l">
            	Hi!您好，欢迎来到都市宝，请登录  <a href="注册.html">【免费注册】</a>
            </p>
        	<p class="hd-p2 f-r">
            	<a href="index.html">返回首页 (个人中心)</a><span>|</span>
                <a href="<?php echo U('Goods/car');?>">我的购物车</a><span>|</span>
                <a href="<?php echo U('order/detail');?>">我的订单</a>
            </p>
            <div style="clear:both;"></div>
        </div>
    </div>

    <!--logo search weweima-->
    <div class="logo-search w1200">
    	<div class="logo-box f-l">
        	<div class="logo f-l">
            	<a href="index.html" title="中林logo"><img src="/TP/Public/Home/images/zl2-01.gif" /></a>
            </div>
        	<div class="shangjia f-l">
            	<a href="JavaScript:;" class="shangjia-a1">[ 切换城市 ]</a>
            	<a href="JavaScript:;" class="shangjia-a2">商家入口</a>
                <div class="select-city">
        	<div class="sl-city-top">
            	<p class="f-l">切换城市</p>
                <a class="close-select-city f-r" href="JavaScript:;">
                	<img src="/TP/Public/Home/images/close-select-city.gif" />
                </a>
            </div>
            <div class="sl-city-con">
            	<p>西北</p>
                <dl>
                	<dt>重庆市</dt>
                    <dd>
                    	<a href="JavaScript:;">长寿区</a>
                        <a href="JavaScript:;">巴南区</a>
                        <a href="JavaScript:;">南岸区</a>
                        <a href="JavaScript:;">九龙坡区</a>
                        <a href="JavaScript:;">沙坪坝区</a>
                        <a href="JavaScript:;">北碚</a>
                        <a href="JavaScript:;">江北区</a>
                        <a href="JavaScript:;">渝北区</a>
                        <a href="JavaScript:;">大渡口区</a>
                        <a href="JavaScript:;">渝中区</a>
                        <a href="JavaScript:;">万州</a>
                        <a href="JavaScript:;">武隆</a>
                        <a href="JavaScript:;">晏家</a>
                        <a href="JavaScript:;">长寿湖</a>
                        <a href="JavaScript:;">云集</a>
                        <a href="JavaScript:;">华中</a>
                        <a href="JavaScript:;">林封</a>
                        <a href="JavaScript:;">双龙</a>
                        <a href="JavaScript:;">石回</a>
                        <a href="JavaScript:;">龙凤呈祥</a>
                        <a href="JavaScript:;">朝天门</a>
                        <a href="JavaScript:;">中华</a>
                        <a href="JavaScript:;">玉溪</a>
                        <a href="JavaScript:;">云烟</a>
                        <a href="JavaScript:;">红塔山</a>
                        <a href="JavaScript:;">真龙</a>
                        <a href="JavaScript:;">天子</a>
                        <a href="JavaScript:;">娇子</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl>
                	<dt>新疆</dt>
                    <dd>
                    	<a href="JavaScript:;">齐乌鲁木</a>
                        <a href="JavaScript:;">昌吉</a>
                        <a href="JavaScript:;">巴音</a>
                        <a href="JavaScript:;">郭楞</a>
                        <a href="JavaScript:;">伊犁</a>
                        <a href="JavaScript:;">阿克苏</a>
                        <a href="JavaScript:;">喀什</a>
                        <a href="JavaScript:;">哈密</a>
                        <a href="JavaScript:;">克拉玛依</a>
                        <a href="JavaScript:;">博尔塔拉</a>
                        <a href="JavaScript:;">吐鲁番</a>
                        <a href="JavaScript:;">和田</a>
                        <a href="JavaScript:;">石河子</a>
                        <a href="JavaScript:;">克孜勒苏</a>
                        <a href="JavaScript:;">阿拉尔</a>
                        <a href="JavaScript:;">五家渠</a>
                        <a href="JavaScript:;">图木舒克</a>
                        <a href="JavaScript:;">库尔勒</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl>
                	<dt>甘肃</dt>
                    <dd>
                    	<a href="JavaScript:;">兰州</a>
                        <a href="JavaScript:;">天水</a>
                        <a href="JavaScript:;">巴音</a>
                        <a href="JavaScript:;">白银</a>
                        <a href="JavaScript:;">庆阳</a>
                        <a href="JavaScript:;">平凉</a>
                        <a href="JavaScript:;">酒泉</a>
                        <a href="JavaScript:;">张掖</a>
                        <a href="JavaScript:;">武威</a>
                        <a href="JavaScript:;">定西</a>
                        <a href="JavaScript:;">金昌</a>
                        <a href="JavaScript:;">陇南</a>
                        <a href="JavaScript:;">临夏</a>
                        <a href="JavaScript:;">嘉峪关</a>
                        <a href="JavaScript:;">甘南</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl>
                	<dt>宁夏</dt>
                    <dd>
                    	<a href="JavaScript:;">银川</a>
                        <a href="JavaScript:;">吴忠</a>
                        <a href="JavaScript:;">石嘴山</a>
                        <a href="JavaScript:;">中卫</a>
                        <a href="JavaScript:;">固原</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl>
                	<dt>青海</dt>
                    <dd>
                    	<a href="JavaScript:;">西宁</a>
                        <a href="JavaScript:;">海西</a>
                        <a href="JavaScript:;">海北</a>
                        <a href="JavaScript:;">果洛</a>
                        <a href="JavaScript:;">海东</a>
                        <a href="JavaScript:;">黄南</a>
                        <a href="JavaScript:;">玉树</a>
                        <a href="JavaScript:;">海南</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
            </div>
        </div>
            </div>
            <div style="clear:both;"></div>
        </div>
        <div class="erweima f-r">
        	<a href="JavaScript:;"><img src="/TP/Public/Home/images/zl2-04.gif" /></a>
        </div>
        <div class="search f-r">
        	<div class="search-info">
            	<input type="text" placeholder="请输入商品名称" />
                <button>搜索</button>
                <div style="clear:both;"></div>
            </div>
            <ul class="search-ul">
                <li><a href="JavaScript:;">花露水</a></li>
                <li><a href="JavaScript:;">洗衣液</a></li>
                <li><a href="JavaScript:;">照相机</a></li>
                <li><a href="JavaScript:;">电视机</a></li>
                <li><a href="JavaScript:;">微波炉</a></li>
                <li><a href="JavaScript:;">面巾纸</a></li>
                <li><a href="JavaScript:;">锅</a></li>
                <li><a href="JavaScript:;">酒水</a></li>
                <li><a href="JavaScript:;">大米</a></li>
                <li><a href="JavaScript:;">零食</a></li>
                <li><a href="JavaScript:;">蔬菜</a></li>
                <div style="clear:both;"></div>
            </ul>
        </div>
        <div style="clear:both;"></div>
    </div>

	<!--nav-->
    <div class="nav-box">
    	<div class="nav-kuai w1200">
        	<div class="nav-kuaijie f-l">
            	<a href="JavaScript:;" class="kj-tit1">商品分类快捷</a>
                <div class="kuaijie-box" style="display:none">
                	<div class="kuaijie-info">
                    	<dl class="kj-dl1">
                        	<dt><img src="/TP/Public/Home/images/zl2-07.gif" /><a href="搜索列表(有品牌).html">食品/饮料/酒水</a></dt>
                            <dd>
                            	<a href="搜索列表(有品牌).html">饼干糕点</a><span>|</span>
                            	<a href="搜索列表(有品牌).html">冲调保健</a><span>|</span>
                            	<a href="搜索列表(有品牌).html">酒水</a>
                            </dd>
                        </dl>
                        <div class="kuaijie-con">
                        	<dl class="kj-dl2" style="display:inline-block">
                            	<dt><a href="搜索列表(有品牌).html">洗浴用品/身体护理</a></dt>
                                <dd>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">洗手液</a>
                                </dd>
                            </dl>
                        	<dl class="kj-dl2" style="display:inline-block">
                            	<dt><a href="搜索列表(有品牌).html">洗浴用品/身体护理</a></dt>
                                <dd>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">洗手液</a>
                                </dd>
                            </dl>
                            <dl class="kj-dl2" style="display:inline-block">
                            	<dt><a href="搜索列表(有品牌).html">洗浴用品/身体护理</a></dt>
                                <dd>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">洗手液</a>
                                </dd>
                            </dl>
                        	<dl class="kj-dl2" style="display:inline-block">
                            	<dt><a href="搜索列表(有品牌).html">洗浴用品/身体护理</a></dt>
                                <dd>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">洗手液</a>
                                </dd>
                            </dl>
                            <dl class="kj-dl2" style="display:inline-block">
                            	<dt><a href="搜索列表(有品牌).html">洗浴用品/身体护理</a></dt>
                                <dd>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">洗手液</a>
                                </dd>
                            </dl>
                        	<dl class="kj-dl2" style="display:inline-block">
                            	<dt><a href="搜索列表(有品牌).html">洗浴用品/身体护理</a></dt>
                                <dd>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">洗手液</a>
                                </dd>
                            </dl>
                        	<dl class="kj-dl2" style="display:inline-block">
                            	<dt><a href="搜索列表(有品牌).html">洗浴用品/身体护理</a></dt>
                                <dd>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">洗手液</a>
                                </dd>
                            </dl>
                            <dl class="kj-dl2" style="display:inline-block">
                            	<dt><a href="搜索列表(有品牌).html">洗浴用品/身体护理</a></dt>
                                <dd>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">洗手液</a>
                                </dd>
                            </dl>
                        	<dl class="kj-dl2" style="display:inline-block">
                            	<dt><a href="搜索列表(有品牌).html">洗浴用品/身体护理</a></dt>
                                <dd>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">洗手液</a>
                                </dd>
                            </dl>
                            <dl class="kj-dl2" style="display:inline-block">
                            	<dt><a href="搜索列表(有品牌).html">洗浴用品/身体护理</a></dt>
                                <dd>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">洗手液</a>
                                </dd>
                            </dl>
                            <div style="clear:both;"></div>
                        </div>
                    </div>
                	<div class="kuaijie-info">
                    	<dl class="kj-dl1">
                        	<dt><img src="/TP/Public/Home/images/zl2-08.gif" /><a href="搜索列表(有品牌).html">粮油副食</a></dt>
                            <dd>
                            	<a href="搜索列表(有品牌).html">厨房调味</a><span>|</span>
                            	<a href="搜索列表(有品牌).html">大米/面粉</a><span>|</span>
                            	<a href="搜索列表(有品牌).html">方便速食</a>
                            </dd>
                        </dl>
                        <div class="kuaijie-con">
                        	<dl class="kj-dl2">
                            	<dt><a href="搜索列表(有品牌).html">洗浴用品/身体护理</a></dt>
                                <dd>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">泡浴/盐浴</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">洗手液</a>
                                </dd>
                            </dl>
                        	<dl class="kj-dl2">
                            	<dt><a href="搜索列表(有品牌).html">洗浴用品/身体护理</a></dt>
                                <dd>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">泡浴/盐浴</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">洗手液</a>
                                </dd>
                            </dl>
                            <div style="clear:both;"></div>
                        </div>
                    </div>
                	<div class="kuaijie-info">
                    	<dl class="kj-dl1">
                        	<dt><img src="/TP/Public/Home/images/zl2-09.gif" /><a href="搜索列表(有品牌).html">家庭清洁</a></dt>
                            <dd>
                            	<a href="搜索列表(有品牌).html">厨房清洁</a><span>|</span>
                            	<a href="搜索列表(有品牌).html">纸品湿巾</a><span>|</span>
                            	<a href="搜索列表(有品牌).html">家私</a>
                            </dd>
                        </dl>
                        <div class="kuaijie-con">
                        	<dl class="kj-dl2">
                            	<dt><a href="搜索列表(有品牌).html">洗浴用品/身体护理</a></dt>
                                <dd>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">泡浴/盐浴</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">洗手液</a>
                                </dd>
                            </dl>
                            <dl class="kj-dl2">
                            	<dt><a href="搜索列表(有品牌).html">洗浴用品/身体护理</a></dt>
                                <dd>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">泡浴/盐浴</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">洗手液</a>
                                </dd>
                            </dl>
                            <dl class="kj-dl2">
                            	<dt><a href="搜索列表(有品牌).html">洗浴用品/身体护理</a></dt>
                                <dd>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">泡浴/盐浴</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">洗手液</a>
                                </dd>
                            </dl>
                            <div style="clear:both;"></div>
                        </div>
                    </div>
                	<div class="kuaijie-info">
                    	<dl class="kj-dl1">
                        	<dt><img src="/TP/Public/Home/images/zl2-10.gif" /><a href="搜索列表(有品牌).html">美妆洗护/个人护理</a></dt>
                            <dd>
                            	<a href="搜索列表(有品牌).html">洗浴用品/身体护理</a><span>|</span>
                            	<a href="搜索列表(有品牌).html">洗发护发</a>
                            </dd>
                        </dl>
                        <div class="kuaijie-con">
                        	<dl class="kj-dl2">
                            	<dt><a href="搜索列表(有品牌).html">洗浴用品/身体护理</a></dt>
                                <dd>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">泡浴/盐浴</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">洗手液</a>
                                </dd>
                            </dl>
                            <dl class="kj-dl2">
                            	<dt><a href="搜索列表(有品牌).html">洗浴用品/身体护理</a></dt>
                                <dd>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">泡浴/盐浴</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">洗手液</a>
                                </dd>
                            </dl>
                            <dl class="kj-dl2">
                            	<dt><a href="搜索列表(有品牌).html">洗浴用品/身体护理</a></dt>
                                <dd>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">泡浴/盐浴</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">洗手液</a>
                                </dd>
                            </dl>
                            <dl class="kj-dl2">
                            	<dt><a href="搜索列表(有品牌).html">洗浴用品/身体护理</a></dt>
                                <dd>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">泡浴/盐浴</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">洗手液</a>
                                </dd>
                            </dl>
                            <div style="clear:both;"></div>
                        </div>
                    </div>
                	<div class="kuaijie-info">
                    	<dl class="kj-dl1">
                        	<dt><img src="/TP/Public/Home/images/zl2-11.gif" /><a href="搜索列表(有品牌).html">母婴用品/玩具</a></dt>
                            <dd>
                            	<a href="搜索列表(有品牌).html">宝宝喂养/洗护清洁</a><span>|</span>
                            	<a href="搜索列表(有品牌).html">玩具</a><span>|</span>
                            	<a href="搜索列表(有品牌).html">奶粉/辅食</a>
                            </dd>
                        </dl>
                        <div class="kuaijie-con">
                        	<dl class="kj-dl2">
                            	<dt><a href="搜索列表(有品牌).html">洗浴用品/身体护理</a></dt>
                                <dd>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">泡浴/盐浴</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">洗手液</a>
                                </dd>
                            </dl>
                            <dl class="kj-dl2">
                            	<dt><a href="搜索列表(有品牌).html">洗浴用品/身体护理</a></dt>
                                <dd>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">泡浴/盐浴</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">洗手液</a>
                                </dd>
                            </dl>
                            <dl class="kj-dl2">
                            	<dt><a href="搜索列表(有品牌).html">洗浴用品/身体护理</a></dt>
                                <dd>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">泡浴/盐浴</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">洗手液</a>
                                </dd>
                            </dl>
                            <dl class="kj-dl2">
                            	<dt><a href="搜索列表(有品牌).html">洗浴用品/身体护理</a></dt>
                                <dd>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">泡浴/盐浴</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">洗手液</a>
                                </dd>
                            </dl>
                            <dl class="kj-dl2">
                            	<dt><a href="搜索列表(有品牌).html">洗浴用品/身体护理</a></dt>
                                <dd>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">泡浴/盐浴</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">洗手液</a>
                                </dd>
                            </dl>
                            <div style="clear:both;"></div>
                        </div>
                    </div>
                	<div class="kuaijie-info">
                    	<dl class="kj-dl1">
                        	<dt><img src="/TP/Public/Home/images/zl2-12.gif" /><a href="搜索列表(有品牌).html">家居/家电</a></dt>
                        </dl>
                        <div class="kuaijie-con">
                        	<dl class="kj-dl2">
                            	<dt><a href="搜索列表(有品牌).html">洗浴用品/身体护理</a></dt>
                                <dd>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">泡浴/盐浴</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">洗手液</a>
                                </dd>
                            </dl>
                        	<dl class="kj-dl2">
                            	<dt><a href="搜索列表(有品牌).html">洗浴用品/身体护理</a></dt>
                                <dd>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">泡浴/盐浴</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">洗手液</a>
                                </dd>
                            </dl>
                        	<dl class="kj-dl2">
                            	<dt><a href="搜索列表(有品牌).html">洗浴用品/身体护理</a></dt>
                                <dd>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">泡浴/盐浴</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">洗手液</a>
                                </dd>
                            </dl>
                        	<dl class="kj-dl2">
                            	<dt><a href="搜索列表(有品牌).html">洗浴用品/身体护理</a></dt>
                                <dd>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">泡浴/盐浴</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">洗手液</a>
                                </dd>
                            </dl>
                        	<dl class="kj-dl2">
                            	<dt><a href="搜索列表(有品牌).html">洗浴用品/身体护理</a></dt>
                                <dd>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">泡浴/盐浴</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">洗手液</a>
                                </dd>
                            </dl>
                        	<dl class="kj-dl2">
                            	<dt><a href="搜索列表(有品牌).html">洗浴用品/身体护理</a></dt>
                                <dd>
                                   	<a href="搜索列表(有品牌).html">护手霜</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">香皂</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">沐浴露</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">花露水</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">泡浴/盐浴</a><span>|</span>
                                    <a href="搜索列表(有品牌).html">洗手液</a>
                                </dd>
                            </dl>
                            <div style="clear:both;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="nav-font f-l">
            <?php if(is_array($menus)): foreach($menus as $key=>$v): ?><li><a href="<?php echo U($v[en]);?>"><?php echo ($v[name]); ?></a></li><?php endforeach; endif; ?>

                <div style="clear:both;"></div>
            </ul>
            <div style="clear:both;"></div>
        </div>
    </div>