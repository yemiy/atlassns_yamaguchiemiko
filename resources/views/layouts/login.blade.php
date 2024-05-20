
<!DOCTYPE html><html>
<head>
<meta charset="utf-8" />
    <!--IEブラウザ対策-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="ページの内容を表す文章" />
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/style.css') }} ">
    <!--スマホ,タブレット対応-->
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <!--サイトのアイコン指定-->
    <link rel="icon" href="" sizes="16x16" type="image/png" />
    <link rel="icon" href="画像URL" sizes="32x32" type="image/png" />
    <link rel="icon" href="画像URL" sizes="48x48" type="image/png" />
    <link rel="icon" href="画像URL" sizes="62x62" type="image/png" />
    <!--iphoneのアプリアイコン指定-->
    <link rel="apple-touch-icon-precomposed" href="画像のURL" />
    <!--OGPタグ/twitterカード-->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="./js/script.js"></script>
</head>

<body>

<header>
<div id="head">
     <h1><a href="/top"><img src=" {{ asset('/images/atlas.png') }}" height="42"></a></h1> </div>


<div class="accordion">
  <div class="accordion-container">
    <div class="accordion-item">

       <div class="accordion-title js-accordion-title"><p>{{ Auth::user()->username}}　さん</p>
       <img src="{{ asset('storage/images/'.Auth::user()->images) }}" class="icon3" ></div>


      <div class="accordion-content">
          <ul class="menu">
             <li><a href="/top">ホーム</a></li>
             <li><a href="/profile">プロフィール</a></li>
             <li><a href="/login">ログアウト</a></li>
            </ul> </div>

</div>
</div>
</div>

</header>

    <div id="row">
        <div id="container"> @yield('content')</div>
        <div id="side-bar">
            <div class="confirm">
                <p>{{ Auth::user()->username}}さんの</p>
                <p>フォロー数
                {{ Auth::user()->follows()->count() }}名</p>
                <div class="row-btn"><a href="/follow-list">、<span style="color:white">フォローリスト</span></a></div>
                <p>フォロワー数
                {{ Auth::user()->follower()->count() }}名</p>
                <div class="row-btn"><a href="/follower-list" ><span style="color:white">フォロワーリスト</span></a></div>
            </div><br>
    <div class="line"></div>

            <div class="row-btn2"><a href="/search"><span style="color:white">ユーザー検索</span></a></div>

        </div>
    </div>

    <footer></footer>
    <script src="JavaScriptファイルのURL"></script>
    <script src="JavaScriptファイルのURL"></script>

</body>
</html>
