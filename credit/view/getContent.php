<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"">
    <title>create Email</title>
    <link href="view/css/bootstrap.css" rel="stylesheet">
    <link href="view/css/getContent.css" rel="stylesheet">
</head>
<body>
<div class="headImg"><img src="view/img/email/xiangcao.png"></div>
<div class="container-fluid">
    <div id="myform">
        <form class="form-horizontal">
            <div class="form-group row">
                <label for="name" class="col-xs-2 control-label">对应城市:</label>
                <div class="col-xs-9">
                    <select class="form-control" id="city" >
                        <option >请选择投放城市</option>
                        <option value="chengdu">成都</option>
                        <option value="xian">西安</option>
                        <option value="shenzhen">深圳</option>
                        <option value="guangzhou">广州</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-xs-2 control-label">首栏岗位:</label>
                <div class="col-xs-9">
                    <input class="form-control" id="url-1" placeholder="请输入你的首栏岗位url">
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-xs-2 control-label">侧栏岗位1:</label>
                <div class="col-xs-9">
                    <input class="form-control" id="url-2" placeholder="请输入你的第一位侧栏岗位url">
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-xs-2 control-label">侧栏岗位2:</label>
                <div class="col-xs-9">
                    <input class="form-control" id="url-3" placeholder="请输入你的第二位侧栏岗位url">
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-xs-2 control-label">宣传文案:</label>
                <div class="col-xs-9">
                    <textarea  type="text" class="form-control" id="word-1" placeholder="请输入你的宣传文案"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-xs-2 control-label">宣传文案2:</label>
                <div class="col-xs-9">
                    <textarea  type="text" class="form-control" id="word-2" placeholder="请输入你的宣传文案2"></textarea>
                </div>
            </div>
            <button  id="create">生成邮件模板</button>
        </form>
    </div>

</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="view/js/jQuery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="view/js/bootstrap.min.js"></script>
    <script src="view/js/getContent.js"></script>

</body>
</html>