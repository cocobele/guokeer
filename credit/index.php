<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>credit card</title>
    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fulai.css" rel="stylesheet">
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>

</head>
<body>
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
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">真实姓名:</label>
            <div class="col-sm-6">
                <input class="form-control" id="name" placeholder="请输入你的真实姓名">
            </div>
        </div>
        <div class="form-group">
            <label for="phone" class="col-sm-2 control-label">手机号码:</label>
            <div class="col-sm-6">
                <input type='phone' class="form-control" id="phone" placeholder="请输入手机号码">
            </div>
        </div>
        <div class="form-group">
            <label for="idcard" class="col-sm-2 control-label">身份证号:</label>
            <div class="col-sm-6">
                <input class="form-control" id="idcard" placeholder="请输入身份证号">
            </div>
        </div>
        <div class="form-group" class="col-sm-2 control-label">
            <label class="col-sm-2 control-label">请选择地区:</label>
            <div class="col-sm-6">
                <select id="province" runat="server" onchange="selectprovince(this);" ></select>
                <select id="city" runat="server" ></select>
            </div>
        </div>
        <div class="form-group">
            <label for="address" class="col-sm-2 control-label">收件地址:</label>
            <div class="col-sm-6">
                <input class="form-control" id="address" placeholder="请输入收件地址">
            </div>
        </div>
        <div class="form-group">
            <label for="term" class="col-sm-2 control-label">社保年限:</label>
            <div class="col-sm-9" id="term">
                <div class="col-sm-3">无社保</div>
                <div class="col-sm-3 chosen">半年内</div>
                <div class="col-sm-3">3</div>

            </div>
        </div>
        <div class=" col-sm-1"></div>
        <div class=" col-sm-11 checkbox">
            <label>
                <input type="checkbox">已阅读《安全条款》隐私信息将严格保密
            </label>
        </div>
    </form>
</div>
<div class="declare col-sm-12">选择<span style="color: red">信用卡</span>享50天免息(可左右滑动)</div>

<div id="creditList" class="carousel slide" style="margin-top:100px;margin-bottom: 20px;">
    <!-- 轮播（Carousel）指标 -->
    <ol class="carousel-indicators">
        <li data-target="#creditList" data-slide-to="0" class="active"></li>
        <li data-target="#creditList" data-slide-to="1"></li>
    </ol>
    <!-- 轮播（Carousel）项目 -->
    <div class="carousel-inner">
        <div class="item active">
                <div class="card">
                    <img src="img/10002.jpg">
                    <div class="cardText">
                        <span>
                            <p style="font-size: 16px">交通银行信用卡</p>
                            <p style="font-size: 12px">额度高</p>
                            <p style="font-size: 12px">56天超长免息</p>
                        </span>
                    </div>
                </div>
                <div class="card">
                    <img src="img/10165.jpg">
                    <div class="cardText">
                       <span>
                            <p     style="font-size: 16px">交通银行信用卡</p>
                            <p style="font-size: 12px">额度高</p>
                            <p style="font-size: 12px">56天超长免息</p>
                        </span>
                    </div>
                </div>
                <div class="card">
                    <img src="img/10165.jpg">
                    <div class="cardText">
                       <span>
                            <p     style="font-size: 16px">交通银行信用卡</p>
                            <p style="font-size: 12px">额度高</p>
                            <p style="font-size: 12px">56天超长免息</p>
                        </span>
                    </div>
                </div>
                <div class="card">
                    <img src="img/10165.jpg">
                    <div class="cardText">
                       <span>
                            <p     style="font-size: 16px">交通银行信用卡</p>
                            <p style="font-size: 12px">额度高</p>
                            <p style="font-size: 12px">56天超长免息</p>
                        </span>
                    </div>
                </div>
        </div>
        <div class="item">
                <div class="card">
                    <img src="img/10165.jpg">
                    <div class="cardText">
                        <span>
                            <p style="font-size: 16px">交通银行信用卡</p>
                            <p style="font-size: 12px">额度高</p>
                            <p style="font-size: 12px">56天超长免息</p>
                        </span>
                    </div>
                </div>
                <div class="card">
                    <img src="img/10165.jpg">
                    <div class="cardText">
                       <span>
                            <p     style="font-size: 16px">交通银行信用卡</p>
                            <p style="font-size: 12px">额度高</p>
                            <p style="font-size: 12px">56天超长免息</p>
                        </span>
                    </div>
                </div>
                <div class="card">
                    <img src="img/10165.jpg">
                    <div class="cardText">
                       <span>
                            <p     style="font-size: 16px">交通银行信用卡</p>
                            <p style="font-size: 12px">额度高</p>
                            <p style="font-size: 12px">56天超长免息</p>
                        </span>
                    </div>
                </div>
                <div class="card">
                    <img src="img/10165.jpg">
                    <div class="cardText">
                       <span>
                            <p     style="font-size: 16px">交通银行信用卡</p>
                            <p style="font-size: 12px">额度高</p>
                            <p style="font-size: 12px">56天超长免息</p>
                        </span>
                    </div>
                </div>
        </div>
    </div>

    <a class="carousel-control left" href="#creditList" data-slide="prev"><span
            class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="carousel-control right" href="#creditList"  data-slide="next"><span
            class="glyphicon glyphicon-chevron-right"></span></a>

</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//code.jquery.com/jquery-latest.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="js/fulai.js"></script>

</body>
</html>