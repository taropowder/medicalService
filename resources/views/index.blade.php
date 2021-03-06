<!DOCTYPE HTML>

<html>
<head>
    <title>健康随身册</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <link rel="shortcut icon" href="{{ asset('img/logo.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}"/>
    <noscript>
        <link rel="stylesheet" href="{{ asset('css/noscript.css') }}"/>
    </noscript>
</head>
<body class="is-loading">

<!-- Wrapper -->
<div id="wrapper" class="fade-in">

    <!-- Intro -->
    <div id="intro">
        <h1>健康随身册</h1>
        <p>您的私人病历管家</p>
        <ul class="actions">
            <li><a href="#header" class="button icon solo fa-arrow-down scrolly">Continue</a></li>
        </ul>
    </div>

    <!-- Header -->
    <header id="header">
        <a href="/home" class="logo">点击体验</a>
    </header>


    <!-- Main -->
    <div id="main">

        <!-- Featured Post -->
        <article class="post featured" style="padding-bottom: 20px">
            <header class="major">
                <h2>上传病历<br/>
                    如此简单</h2>
                <p>我们提供了两种上传方式</p>
            </header>
        </article>
        <section class="posts">
            <article>
                <header>
                    <h2>智能上传</h2>
                </header>
                <a href="#" class="image fit"><img src="../img/pic04.png" alt=""/></a>
                <p>我们采用业内领先的<strong>OCR识别</strong>技术+自研<strong>智能信息匹配算法</strong>，正在支持<strong>越来越多</strong>的化验单一键上传。
                </p>
                <ul class="actions">
                    <li><a href="/indicator/upload" class="button">体验一下</a></li>
                </ul>
            </article>
            <article>
                <header>
                    <h2>模板上传</h2>
                </header>
                <a href="#" class="image fit"><img src="../img/pic05.png" alt=""/></a>
                <p>我们也提供了用户自建模板上传的方式，只需要建立一次模板，每次指标信息就可轻松上传。</p>
                <ul class="actions">
                    <li><a href="/indicator/temp" class="button">体验一下</a></li>
                </ul>
            </article>
        </section>


        <article class="post featured" style="padding-bottom: 20px">
            <header class="major">
                <h2>健康情况<br/>
                    如此清晰</h2>
                <p>指标变化情况一目了然</p>
            </header>
        </article>
        <section class="posts">
            <article>
                <a href="#" class="image fit"><img src="../img/p1.png" alt=""/></a>
                <p style="font-size: 1.3em">多时多样指标,一图尽收眼底</p>
                <ul class="actions">
                    <li><a href="@if(Auth::check())/indicator/record/{{ Auth::user()->id }} @else /login @endif" class="button">体验一下</a></li>
                </ul>
            </article>
            <article style="text-align: center">

                <a href="#" class="image fit"><img src="../img/p2.png" alt=""/></a>
                <p style="font-size: 1.3em">重点关心数据,主页特别提醒</p>
                <ul class="actions">
                    <li><a href="/home" class="button">体验一下</a></li>
                </ul>
            </article>
        </section>

        <article class="post featured" style="padding-bottom: 0">
            <header class="major">
                <h2>家人健康<br/>
                    放在心上</h2>
                <p>为家人的健康保驾护航</p>
            </header>
        </article>
        <article class="post featured" style="border-top: none;padding-top: 0">
            <header class="major">


            </header>
            <a href="#" class="image main"><img style="width: 70%;margin-left: 15%" src="img/family.jpg" alt=""/></a>
            <ul class="actions">

                <li><a href="@if(Auth::check())@if (Auth::user()->family_id )
                           /family/info/{{ Auth::user()->family_id }}
                    @else
                        family/add
                            @endif
                    @else /login
                    @endif" class="button big">家庭直达</a>
                </li>

            </ul>
        </article>
        <article class="post featured"  style="padding-bottom: 0">
            <header class="major">
                <h2>微信小程序<br>
                    便捷使用</h2>
            </header>
        </article>
        <section class="posts">
            <article>
                <a href="#" class="image fit"><img src="../img/wechat.png" alt="" /></a>
            </article>
            <article style="text-align: center">
                <a href="#" class="image fit"><img src="../img/wechat1.png" alt="" /></a>
            </article>
        </section>



        <article class="post featured" style="padding-bottom: 0">
            <header class="major">
                <h2>有底线<br/>
                    不作恶</h2>
                <p>我们致力于为用户提供更完善的服务，并且承诺不恶意泄露用户个人隐私。</p>
            </header>
        </article>
        <article class="post featured" style="border-top: none;padding-top: 0">
            <header class="major">


            </header>
            <a href="#" class="image main"><img style="width: 70%;margin-left: 15%" src="img/p.jpg" alt=""/></a>
        </article>




        <article class="post featured"  style="padding-bottom: 0">
            <header class="major">
                <h2>开启我的随身册</h2>
            </header>
        </article>
        <article class="post featured"  style="border-top: none;padding-top: 0">
            <header class="major">



            </header>
            <a href="/register" title="点击开启" class="image main"><img style="width: 30%;margin-left: 35%" src="img/Logo.png" alt="" /></a>
        </article>
    </div>

</div>

<!-- Scripts -->
<script src="{{ asset('js/core/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery.scrollex.min.js') }}"></script>
<script src="{{ asset('js/jquery.scrolly.min.js') }}"></script>
<script src="{{ asset('js/skel.min.js') }}"></script>
<script src="{{ asset('js/util.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>


</body>
</html>