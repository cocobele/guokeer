<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"">
    <title>credit card</title>
    <link href="view/css/bootstrap.css" rel="stylesheet">
    <link href="view/css/fulai.css" rel="stylesheet">


</head>
<body>
<div class="container-fluid">
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-bottom: 20px;">
        <!-- 轮播（Carousel）指标 -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>
        <!-- 轮播（Carousel）项目 -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="view/img/37.jpg" alt="First slide">
            </div>
            <div class="item">
                <img src="view/img/38.png" alt="Second slide">
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
                <label for="name" class="col-xs-2 control-label">真实姓名:</label>
                <div class="col-xs-9">
                    <input class="form-control" id="name" placeholder="请输入你的真实姓名">
                </div>
            </div>
            <div class="form-group row">
                <label for="phone" class="col-xs-2 control-label">手机号码:</label>
                <div class="col-xs-9">
                    <input type='phone' class="form-control" id="phone" placeholder="请输入手机号码">
                </div>
            </div>
            <div class="form-group row">
                <label for="idcard"  class="col-xs-2 control-label">身份证号:</label>
                <div class="col-xs-9">
                    <input class="form-control" id="idcard" placeholder="请输入身份证号">
                </div>
            </div>
            <div class="form-group row control-label">
                <label class="col-xs-2 control-label">选择地区:</label>
                <div class="col-xs-4">
                    <select id="province" onchange="selectprovince(this);" ></select>
                </div>
                <div class="col-xs-5">
                    <select id="city" ></select>
                </div>
            </div>
            <div class="form-group row">
                <label for="address" class="col-xs-2 control-label">收件地址:</label>
                <div class="col-xs-9">
                    <input class="form-control" id="address" placeholder="请输入收件地址">
                </div>
            </div>
            <div class="form-group row">
                <label for="term" class="col-xs-2 control-label">社保年限:</label>
                <div class="col-xs-9" id="term">
                    <div class="chosen" data-term="0">无社保</div>
                    <div data-term="1">半年内</div>
                    <div data-term="2">三年内</div>

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
        <?php foreach($creditList as $card):?>
        <div class="insurance" >
            <p>
              <?php echo $card['1']?$card['1']:''?>
            </p>
            <div class="credit_card">
                <div class="card_left">
                        <img src="http://img.rongba.com/Public/yun/card/<?php echo $card['5']?$card['5']:''?>">
                </div>
                <div class="card_right">
                    <div>
                        取现额度：<span> <?php echo $card['2']?$card['2']:''?></span>
                    </div>
                    <div style="margin-top:5px">免息期：<span> <?php echo $card['3']?$card['3']:''?></span></div>
                    <div style="margin-top:5px">
                        发卡组织：<span> <?php echo $card['4']?$card['4']:''?></span>
                    </div>
                    <button><a class="apply" cardid="<?php echo $card['0']?$card['0']:''?>">立即申请</a></button>
                </div>
            </div>
        </div>
        <?php endforeach;?>

</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="view/js/jQuery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="view/js/bootstrap.min.js"></script>
<script src="view/js/fulai.js"></script>
<script src="view/js/select.js"></script>

</body>
</html>