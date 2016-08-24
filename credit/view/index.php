<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"">
    <title>credit card</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fulai.css" rel="stylesheet">


</head>
<body>
<div class="container-fluid">
    <div id="myCarousel" class="carousel slide" style="margin-bottom: 20px;">
        <!-- 轮播（Carousel）指标 -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>
        <!-- 轮播（Carousel）项目 -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="img/37.jpg" alt="First slide">
            </div>
            <div class="item">
                <img src="img/38.png" alt="Second slide">
            </div>
        </div>
        <!-- 轮播（Carousel）导航 -->
        <a class="carousel-control left" href="#myCarousel"
           data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#myCarousel"
           data-slide="next">&rsaquo;</a>
    </div>
    <div id="myform">
        <form class="form-horizontal">
            <div class="form-group row">
                <label for="name" class="col-xs-3 control-label">真实姓名:</label>
                <div class="col-xs-9">
                    <input class="form-control" id="name" placeholder="请输入你的真实姓名">
                </div>
            </div>
            <div class="form-group row">
                <label for="phone" class="col-xs-3 control-label">手机号码:</label>
                <div class="col-xs-9">
                    <input type='phone' class="form-control" id="phone" placeholder="请输入手机号码">
                </div>
            </div>
            <div class="form-group row">
                <label for="idcard"  class="col-xs-3 control-label">身份证号:</label>
                <div class="col-xs-9">
                    <input class="form-control" id="idcard" placeholder="请输入身份证号">
                </div>
            </div>
            <div class="form-group row control-label">
                <label class="col-xs-3 control-label">选择地区:</label>
                <div class="col-xs-4">
                    <select id="province" onchange="selectprovince(this);" ></select>
                </div>
                <div class="col-xs-5">
                    <select id="city" ></select>
                </div>
            </div>
            <div class="form-group row">
                <label for="address" class="col-xs-3 control-label">收件地址:</label>
                <div class="col-xs-9">
                    <input class="form-control" id="address" placeholder="请输入收件地址">
                </div>
            </div>
            <div class="form-group row">
                <label for="term" class="col-xs-3 control-label">社保年限:</label>
                <div class="col-xs-9" id="term">
                    <div class="chosen">无社保</div>
                    <div >半年内</div>
                    <div>三年内</div>

                </div>
            </div>
            <div class="row">
                <div class=" col-xs-1"></div>
                <div class=" col-xs-11 checkbox">
                    <label>
                        <input type="checkbox" checked="checked">已阅读《安全条款》隐私信息将严格保密
                    </label>
                </div>
            </div>
        </form>
    </div>

    <div class="selection">
        <div class="insurance" >
            <p>
              交通银行沃尔玛信用卡普卡
            </p>
            <div class="credit_card">
                <div class="card_left">
                        <img src="http://img.rongba.com/Public/yun/card/334.jpg">
                </div>
                <div class="card_right">
                    <div>
                        取现额度：<span>信用额的50%</span>
                    </div>
                    <div style="margin-top:5px">免息期：<span>最长56天</span></div>
                    <div style="margin-top:5px">
                        发卡组织：<span>银联</span>
                    </div>
                    <button><a>立即申请</a></button>
                </div>
            </div>
        </div>
        <div class="insurance" >
            <p>
                 光大“福”信用卡普卡
            </p>
            <div class="credit_card">
                <div class="card_left">
                    <img src="http://img.rongba.com/Public/yun/card/10002.jpg">
                </div>
                <div class="card_right">
                    <div>
                        取现额度：<span>信用额的50%</span>
                    </div>
                    <div style="margin-top:5px">免息期：<span>20天到50天</span></div>
                    <div style="margin-top:5px">
                        发卡组织：<span>银联+VISA</span>
                    </div>
                    <button><a>立即申请</a></button>
                </div>
            </div>
        </div>
        <div class="insurance" >
            <p>
                <a href="/Mobile/creditdetail/city/shanghai/bankids/13/card_id/334.html">交通银行沃尔玛信用卡普卡</a>
            </p>
            <div class="credit_card">
                <div class="card_left">
                    <img src="http://img.rongba.com/Public/yun/card/334.jpg">
                </div>
                <div class="card_right">
                    <div>
                        取现额度：<span>信用额的50%</span>
                    </div>
                    <div style="margin-top:5px">免息期：<span>最长56天</span></div>
                    <div style="margin-top:5px">
                        发卡组织：<span>银联</span>
                    </div>
                    <button><a>立即申请</a></button>
                </div>
            </div>
        </div>
        <div class="insurance" >
            <p>
                <a href="/Mobile/creditdetail/city/shanghai/bankids/13/card_id/334.html">交通银行沃尔玛信用卡普卡</a>
            </p>
            <div class="credit_card">
                <div class="card_left">
                    <img src="http://img.rongba.com/Public/yun/card/334.jpg">
                </div>
                <div class="card_right">
                    <div>
                        取现额度：<span>信用额的50%</span>
                    </div>
                    <div style="margin-top:5px">免息期：<span>最长56天</span></div>
                    <div style="margin-top:5px">
                        发卡组织：<span>银联</span>
                    </div>
                    <button><a>立即申请</a></button>
                </div>
            </div>
        </div>
        <div class="insurance" >
            <p>
                <a href="/Mobile/creditdetail/city/shanghai/bankids/13/card_id/334.html">交通银行沃尔玛信用卡普卡</a>
            </p>
            <div class="credit_card">
                <div class="card_left">
                    <img src="http://img.rongba.com/Public/yun/card/334.jpg">
                </div>
                <div class="card_right">
                    <div>
                        取现额度：<span>信用额的50%</span>
                    </div>
                    <div style="margin-top:5px">免息期：<span>最长56天</span></div>
                    <div style="margin-top:5px">
                        发卡组织：<span>银联</span>
                    </div>
                    <button><a>立即申请</a></button>
                </div>
            </div>
        </div>
    </div>

  <!--  <div id="creditList" class="carousel slide center-block" style="margin-top:100px;margin-bottom: 20px;">
        <div class="carousel-inner">
            <div class="item  active">
                    <div class="card ">
                        <img src="img/10002.jpg">
                        <div class="cardText">
                            <span>
                                <h5>交通银行信用卡</h5>
                                <h6 >额度高</h6>
                                <h6 >56天超长免息</h6>
                            </span>
                        </div>
                    </div>

            </div>
            <div class="item">
                    <div class="card">
                        <img src="img/10165.jpg">
                        <div class="cardText">
                            <span>
                            <h5>交通银行信用卡</h5>
                                <h6 >额度高</h6>
                                <h6 >56天超长免息</h6>
                            </span>
                        </div>
                    </div>
            </div>
        </div>

        <a class="carousel-control left" href="#creditList" data-slide="prev"><span
                class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="carousel-control right" href="#creditList"  data-slide="next"><span
                class="glyphicon glyphicon-chevron-right"></span></a>

    </div>-->
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jQuery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/fulai.js"></script>
<script src="js/select.js"></script>

</body>
</html>