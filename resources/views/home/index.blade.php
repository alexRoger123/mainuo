<!doctype html>
<html>
<head>
    <title>迈诺路桥工程有限公司</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="迈诺, 路桥, 路, 桥, 工程" />
    <script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <link href="{{asset('home/css/flexslider.css')}}" rel="stylesheet">
    <!--bootstrap-->
    <link href="{{asset('home/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!--coustom css-->
    <link href="{{asset('home/css/style.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('home/css/css.css')}}" rel="stylesheet" type="text/css"/>

</head>
<body>
<div class="header">
    <div class="container">
        <div class="logo">
            <h2><a href="#">迈诺路桥工程有限公司</a></h2>
        </div>

        <div class="clearfix"></div>
    </div>
</div>

<!-- banner -->
<div class="banner">
    <div class="container">
        <script src="{{asset('home/js/responsiveslides.min.js')}}"></script>
        <script>
            $(function () {
                $("#slider").responsiveSlides({
                    auto: true,
                    nav: true,
                    speed: 500,
                    namespace: "callbacks",
                    pager: true,
                });
            });
        </script>
        <div  id="top" class="callbacks_container">
            <ul class="rslides" id="slider">
                <li>

                    <div class="banner-text">
                        <h3>迈诺路桥工程有限公司</h3>
                        <p>&nbsp;&nbsp;保定市迈诺路桥工程有限公司创建于2014年08月26日，位于河北省保定市。桥梁工程施工和大型体育场工程施工是我们主要的经营范围，注册资金5000000</p>
                    </div>

                </li>
            </ul>
        </div>

    </div>
</div>
<!-- banner -->
<!-- sha -->
<div class="sha">
</div>
<!-- sha -->

<!-- welcome -->
<div class="welcome">
    <div class="container">
        <h2>公司简介</h2>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;公司成立以来我们一直秉承着“以人为本，服务于社会”的经营理念，使公司得到良好发展，从建成到现在本公司参与并施工桥梁有：甘肃山水一号大桥、银川章子湖景观桥、武汉凤凰湖大桥、杭州千岛湖骑行桥等。本公司主要施工斜拉桥、悬索桥、拱桥、体育场、以及大中小景观桥梁。有一个稳定的工作团队，人数在30―60人。公司现有各类专业技术人员20余人，其中拥有高中级职称技术人员15人。员工经验丰富，施工设施齐全，安全。
            公司一直贯彻“以人为本，服务于社会”的经营理念;“优质高速，诚守信誉，持续发展”的质量方针，以及“100%履行合同，让顾客满意”的质量目标，积极地投身于“用过程精品，创精品工程”当中。以“团结敬业、开拓创新、追求卓越”的企业精神，竭诚与社会各界携手，迎接新的挑战，创造新的辉煌！
        </p>
    </div>
</div>

<!--  majority -->
<div class="majority">
    <div class="container">
        <h3>工程图片</h3>
        <div class="col-md-3  majority-left">
            <img src="{{asset('home/images/1.jpg')}}" alt=" " class="img-responsive" style="width: 300px;height: 300px"/>
        </div>
        <div class="col-md-3  majority-left">
            <img src="{{asset('home/images/2.jpg')}}" alt=" " class="img-responsive" style="width: 300px;height: 300px"/>
        </div>
        <div class="col-md-3  majority-left">
            <img src="{{asset('home/images/3.jpg')}}" alt=" " class="img-responsive" style="width: 300px;height: 300px"/>
        </div>
        <div class="col-md-3  majority-left">
            <img src="{{asset('home/images/4.jpg')}}" alt=" " class="img-responsive" style="width: 300px;height: 300px"/>
        </div>

        <div class="clearfix"></div>
    </div>
</div>
<!--  majority -->
<!--  footer -->
<div class="footer">
    <div class="container">
        <div class="col-md-4 contact-left">

            <h4>地址</h4>
            <address>
                河北省保定市徐水区<br>
            </address>
        </div>
        <div class="col-md-4 contact-left">

            <h4>总经理</h4>
            <p>董亮</p>
        </div>
        <div class="col-md-4 contact-left">

            <h4>联系方式</h4>
            <p>手机:13032051336</p>

        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--  footer -->
</body>
</html>
<!--default-js-->
<script src="{{asset('home/js/jquery-2.1.4.min.js')}}"></script>
<!--bootstrap-js-->
<script src="{{asset('home/js/bootstrap.min.js')}}"></script>
<script>
    $(function(){
        $('.bot-img ul li').click(function(){
            var _this=$(this);
            _this.addClass('active').siblings('li').removeClass('active');
            var int=_this.index();
            $('.activeimg').animate({left:int*-500},"slow");
        });
        var list=$('.bot-img ul li').length;
        $('.activeimg').css({
            width:list*500,
        });
        $('.right').click(function(){
            next(list)

        })
        $('.left').click(function(){
            prev(list)
        });

        //自动播放 2秒播放一次 无限循环
        var timer='';
        var num=0;
        timer=setInterval(function(){ //打开定时器
            num++;
            if(num>parseFloat(list)-1){
                num=0;
                $('.activeimg').animate({left:num*-500},"slow");
            }else{
                $('.activeimg').animate({left:num*-500},"slow");
            }
        },2000);
    })
    var index=0;
    //下一张
    function next(list){
        if(index<list-1){
            index++;
            $('.activeimg').animate({left:index*-500},"slow");
            $('.bot-img ul li').eq(index).addClass('active').siblings('li').removeClass('active')
        }else{
            index=0;
            $('.activeimg').animate({left:index*-522},"slow");
            $('.bot-img ul li').eq(index).addClass('active').siblings('li').removeClass('active')
        }
    }
    //        上一张
    function prev(list){
        index--;
        if(index<0){
            index=list-1;
            $('.activeimg').animate({left:index*-500},"slow");
            $('.bot-img ul li').eq(index).addClass('active').siblings('li').removeClass('active')
        }else{
            $('.activeimg').animate({left:index*-500},"slow");
            $('.bot-img ul li').eq(index).addClass('active').siblings('li').removeClass('active')
        }
    }

</script>