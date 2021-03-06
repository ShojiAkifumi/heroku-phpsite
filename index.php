<!--                                                    浜         浜浜      松      松  松
TTTTTT  EEEE  RRRR    AA   K  K   OOO   Y   Y   AA        浜   浜浜浜浜    松松松   松    松
  TT    E     R   R  A  A  K K   O   O   Y Y   A  A   浜       浜  浜       松松       松
  TT    EEE   RRRR   AAAA  KK    O   O    Y    AAAA           浜浜浜浜浜   松松松     松  松
  TT    E     R R    A  A  K K   O   O    Y    A  A      浜   浜    浜    松 松 松   松  松松
  TT    EEEE  R  RR  A  A  K  K   OOO     Y    A  A   浜浜   浜      浜      松    松松松   松      です。
-->

<!DOCTYPE html>
<html>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<meta charset="UTF-8">
<title>試作webサイト</title>
<meta name="description" content="このサイトは開発中です。文章は全て適当です。">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="canonical" href="あなたのサイトURL">
<link rel="icon" type="image/png" href="img/fapicon.png" />
<!-- OGP設定 -->
<meta property="og:type" content="website" />
<meta property="og:url" content="あなたのサイトURL" />
<meta property="og:image" content="SNSで表示させたい画像のパス" />
<meta property="og:title" content="ページタイトル" />
<meta property="og:description" content="サイトの説明文" />
<!-- Facebook用設定 -->
<meta property="fb:app_id" content="facebookのApp ID" />
<meta property="article:publisher" content="FacebookページのURL">
<!-- Twitter用設定 -->
<meta name="twitter:card" content="Twitterカードの種類">
<meta name="twitter:site" content="@ユーザー名">

<!-- スタイルシートはここから -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/queries.css">
</head>
<body>
<header>
    <!--ローディング画面-->
    <div id="loader-bg" class="is-hide">
        <div id="loader" class="is-hide">
            <img src="img/loader.png" id="loader-animation">
        </div>
    </div>
    <div class="facebook"><a href="https://www.facebook.com/terakoya.hamamatsu/" target="_blank"><i class="fab fa-facebook"></i></a></div>
    <div class="container-fluid position-relative px-0" id="sec0">
        <h1 class="display-4 catch-copy"><span>浜松発の</span><span>ロボット・プログラミング教室</span></h1>
        <div class="mod-gnav position-absolute w-100" style="bottom: 0;">
            <div class="position-relative pt-5">
                <div class="half bg-green"></div>
                <div class="container">
                    <div class="position-relative text-center bg-green"> <img src="img/TERAKOYA_logo.png" alt="" class="logo"> </div>
                </div>
                <div class="bg-green py-3">
                    <div class="container px-0">
                        <nav class="navbar navbar-expand-md navbar-light mb-3 px-md-0">
                            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#Navbar" aria-controls="Navbar" aria-expanded="false" aria-label="ナビゲーションの切替"> <span class="navbar-toggler-icon"></span> </button>
                            <div class="collapse navbar-collapse" id="Navbar">
                                <ul class="navbar-nav w-100 justify-content-around">
                                    <li class="nav-item"><a class="nav-link text-info" href="#sec1"><span>ロボット</span><span>教室とは</span></a></li>
                                    <li class="nav-item"><a class="nav-link text-info" href="#sec2">コース紹介</a></li>
                                    <li class="nav-item"><a class="nav-link text-info" href="#sec3"><span>教室の</span><span>ようす</span></a></li>
                                    <li class="nav-item"><a class="nav-link text-info" href="#sec4">お知らせ</a></li>
                                    <li class="nav-item"><a class="nav-link text-info" href="#sec5">今月の予定</a></li>
                                    <li class="nav-item"><a class="nav-link text-info" href="#sec6">アクセス</a></li>
                                    <li class="nav-item"><a class="nav-link text-info" target=”_blank” href="https://kids.athuman.com/robo"><span>ヒューマン</span><span>アカデミー</span></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<main> 
    <!-- ロボット教室とは！ -->
    <section class="position-relative pt-5"id="sec1">
        <div class="bg-lightblue half half-info"></div>
        <div class="container text-center position-relative bg-lightblue">
            <h2 class="h3 dot font-weight-bold pt-3 pb-5 px-0 mb-0 fadeInUp">ＴＥＲＡＫＯＹＡ浜松とは</h2>
        </div>
        <div class="continer-fluid bg-lightblue pb-3" style="padding-top:0.7em;">
            <div class="container text-center pb-5 fadeInUp">
                <p>TERAKOYA浜松は、浜松発の小・中学生向けのロボット・プログラミング教室です。</p>
                <p>(テスト)ヒューマンアカデミーロボット教室は、2019年6月に10周年を迎えました。<br>
                    パイオニアとして開講した当初から、類似教室があふれる今もなお、<br>
                    国内No.1シェアを守り続けています。</p>
                <p>揺るぎない実績の数々は以下にご覧いただけますが、<br>
                    支持される理由はそれらだけではありません。</p>
                <p>世界に名だたるロボットクリエイターが、教材を含むすべてのカリキュラムを監修しているのは<br>
                    ヒューマンアカデミーロボット教室だけです。</p>
            </div>
        </div>
    </section>
    
    <!-- コース紹介 -->
    <section class="position-relative pt-5" id="sec2">
        <div class="bg-white_y half half-lightblue"></div>
        <div class="container text-center position-relative bg-white_y">
            <h2 class="h3 dot font-weight-bold pt-3 pb-5 px-0 mb-0 fadeInUp">コース紹介</h2>
        </div>
        <div class="bg-white_y" style="text-align: center; font-size: 19px; padding-top: 1em;"><div class="fadeInUp">お子さまのレベルを上げ続けていけるコース編成を用意しました。</div></div>
        <div class="bg-white_y pb-5">
            <div class="container pb-5"> 
                <!---------------------------------------- プライマリーコース ---------------------------------------->
                <div class="row py-4">
                    <div class="col-md-5">
                        <h3 class="h5 py-3 text-center font-weight-bold fadeInUp" style="color: #e366ba;">プライマリーコース</h3>
                        <div class="h6 fadeInUp">
                            <p>対象学年：幼児～小学校低学年</p>
                            <p>テキストを見ながら、動くロボットを自らの手で作りあげることで、自然と文字を読む力・数を数える力を養います。</p>
                        </div>
                        <div class="text-center robo-img fadeInUp"> <img src="img/p_robo.png" alt="" class="w-75" style="border: 5px solid #e366ba;"> </div>
                    </div>
                    <div class="col-md-7 fadeInUp"> <img src="img/image010.jpg" alt="" class="img-thumbnail shadow-sm rounded-0"> </div>
                </div>
                <!---------------------------------------- ベーシックコース ---------------------------------------->
                <div class="row py-4">
                    <div class="col-md-5 order-md-2">
                        <h3 class="h5 py-3 text-center font-weight-bold fadeInUp" style="color: #f3b20a;">ベーシックコース</h3>
                        <div class="h6 fadeInUp">
                            <p>対象学年：小学生</p>
                            <p>テキストを見ながら、ロボットを正確に製作することで構造や動きの仕組みを学び、自分だけのロボットに改造出来るようになります。</p>
                        </div>
                        <div class="text-center robo-img fadeInUp"> <img src="img/b_robo.png" alt="" class="w-75" style="border: 5px solid #f3b20a;"> </div>
                    </div>
                    <div class="col-md-7 fadeInUp"> <img src="img/image020.jpg" alt="" class="img-thumbnail shadow-sm rounded-0"> </div>
                </div>
                <!---------------------------------------- ミドルコース ---------------------------------------->
                <div class="row py-4 fadeInUp">
                    <div class="col-md-5">
                        <h3 class="h5 py-3 text-center font-weight-bold fadeInUp" style="color: #49aa48;">ミドルコース</h3>
                        <div class="h6 fadeInUp">
                            <p>対象学年：小学生</p>
                            <p>より複雑な構造のロボットを製作。<br>
                                タブレットを用いて初歩的なプログラム作成にも取り組み、基礎的なプログラミングを理解した上でロボットを制御できるようになります。</p>
                        </div>
                        <div class="text-center robo-img fadeInUp"> <img src="img/m_robo.png" alt="" class="w-75" style="border: 5px solid #49aa48;"> </div>
                    </div>
                    <div class="col-md-7 fadeInUp"> <img src="img/image030.jpg" alt="" class="img-thumbnail shadow-sm rounded-0"> </div>
                </div>
                <!---------------------------------------- アドバンスコース ---------------------------------------->
                <div class="row py-4">
                    <div class="col-md-5 order-md-2">
                        <h3 class="h5 py-3 text-center font-weight-bold fadeInUp" style="color: #2ca8ee;">アドバンスコース</h3>
                        <div class="h6 fadeInUp">
                            <p><span>対象学年：</span><span>小学校中学年～</span><span>（ミドルコース修了生）</span></p>
                            <p>ロボットが思い通りの動きをするように、ロボットやプログラムの調整を自ら考えながら進めます。実験や観察の内容もより高度になり、到達目標を明確にしてロボットやプログラムの開発ができるになります。</p>
                        </div>
                        <div class="text-center robo-img fadeInUp"> <img src="img/a_robo.png" alt="" class="w-75" style="border: 5px solid #2ca8ee;"> </div>
                    </div>
                    <div class="col-md-7 fadeInUp"> <img src="img/image035.jpg" alt="" class="img-thumbnail shadow-sm rounded-0"> </div>
                </div>
                <!---------------------------------------- ロボティクスプロフェッサーコース ---------------------------------------->
                <div class="row py-4">
                    <div class="col-md-5">
                        <h3 class="h5 py-3 text-center font-weight-bold fadeInUp" style="color: #1e5ea0;">ロボティクスプロフェッサーコース</h3>
                        <div class="h6 fadeInUp">
                            <p>対象学年：小学校高学年・中学生～</p>
                            <p>ロボット工学の基礎が習得できます。<br>
                                さまざまな処理を具体的に考えることにより、実践的な力が身につき、日本のこれからを支えるロボットクリエイターやロボット博士を育成します。</p>
                        </div>
                        <div class="text-center robo-img fadeInUp"> <img src="img/pro_robo.png" alt="" class="w-75" style="border: 5px solid #1e5ea0;"> </div>
                    </div>
                    <div class="col-md-7 fadeInUp"> <img src="img/robopro.jpg" alt="" class="img-thumbnail shadow-sm rounded-0"> </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- 教室の様子 -->
    <section class="position-relative pt-5" id="sec3">
        <div class="bg-lightblue half half-white"></div>
        <div class="container text-center position-relative bg-lightblue">
            <h2 class="h3 dot font-weight-bold pt-3 pb-5 px-0 mb-0 fadeInUp">教室のようす</h2>
        </div>
        <div class="continer-fluid pb-5 bg-lightblue">
            <div class="container pt-5">
                <div class="row mb-0 mb-md-3">
                    <div class="col-md-6 py-4 mb-5 mb-md-0 px-4 position-relative fadeInUp">
                        <div class="bg-green position-absolute rounded-circle d-flex justify-content-center align-items-center balloon">
                            <p class="text-white text-center pt-4 px-2">コメントを入れる予定。</p>
                        </div>
                        <img src="img/image050.jpg" alt="" class="w-100 rounded">
                    </div>
                    <div class="col-md-6 py-4 mb-5 mb-md-0 px-4 position-relative fadeInUp">
                        <div class="bg-green position-absolute rounded-circle d-flex justify-content-center align-items-center balloon">
                            <p class="text-white text-center pt-4 px-2">コメントを入れる予定。</p>
                        </div>
                        <img src="img/image070.jpg" alt="" class="w-100 rounded">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 py-4 mb-5 mb-md-0 px-4 position-relative fadeInUp">
                        <div class="bg-green position-absolute rounded-circle d-flex justify-content-center align-items-center balloon-s">
                            <p class="text-white text-center pt-4 px-2">コメントを入れる予定。</p>
                        </div>
                        <div class="position-absolute"> </div>
                        <img src="img/image040.jpg" alt="" class="w-100 rounded">
                    </div>
                    <div class="col-md-4 py-4 mb-5 mb-md-0 px-4 position-relative fadeInUp">
                        <div class="bg-green position-absolute rounded-circle d-flex justify-content-center align-items-center balloon-s">
                            <p class="text-white text-center pt-4 px-2">コメントを入れる予定。</p>
                        </div>
                        <div class="position-absolute"> </div>
                        <img src="img/image060.jpg" alt="" class="w-100 rounded">
                    </div>
                    <div class="col-md-4 pt-4 mb-5 mb-md-0 px-4 position-relative fadeInUp">
                        <div class="bg-green position-absolute rounded-circle d-flex justify-content-center align-items-center balloon-s">
                            <p class="text-white text-center pt-4 px-2">コメントを入れる予定。</p>
                        </div>
                        <div class="position-absolute"> </div>
                        <img src="img/image080.jpg" alt="" class="w-100 rounded">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- お知らせ -->
    <section class="position-relative pt-5" id="sec4">
        <div class="bg-white_y half half-lightblue"></div>
        <div class="text-center position-relative">
            <h2 class="h3 dot font-weight-bold pt-3 pb-5 px-0 mb-0 fadeInUp">お知らせ</h2>
        </div>
        <div class="mb-0 mod-light-blue bg-white_y">
            <div class="container">
                <div class="row fadeInUp">
                    <div class="col-md-5 py-3"> <img src="img/zenchan.jpg" alt="" class="w-100 rounded"> </div>
                    <div class="col-md-7 py-5 info">
                        <h4 class="mb-3 text-center font-weight-bold">「ザ！鉄腕！DASH！！」の実験企画に制作・出演している北沢善一先生のサイエンスショー</h4>
                        <h5 class="text-center mb-3">子どもも大人も必見！　善ちゃんの笑ってダメになるサイエンスショー～びっくり静電気実験から人工衛星「はやぶさ」のイオンエンジン体験～</h5>
                        <h5 class="font-weight-bold mb-3 text-center" style="line-height: 1.8rem">日　時：2016年2月7日（日）<br> 第一部10:30～11:30 第二部13:00～14:00<br>
                            場　所：アクトシティ研修交流センター<br>
                            　　　　(62会議室)楽器博物館建物内<br>
                            会　費：大人1,000円 子ども（園児・小学生）500円<br>
                            定　員：一部・二部いずれも２００名　限定
                        </h5>
                        <p class="h6">TERAKOYA浜松　主催<br>
                            浜松市教育委員会　後援<br>
                            INFILL PLUS　協賛<br></p>
                        <p class="h6">お申し込み期間　2016年1月31日(日)まで<br>
                            お問い合わせ　050-5275-1166　または<br>
                            <a target=”_blank” href="https://ssl.form-mailer.jp/fms/9bdbaef3406026">https://ssl.form-mailer.jp/fms/9bdbaef3406026</a><br>
                            <br>
                            ※　「チケットぴあ」からもご購入できます！<br>
                            <a target=”_blank” href="http://ticket.pia.jp/pia/event.ds?eventCd=1600485">http://ticket.pia.jp/pia/event.ds?eventCd=1600485</a></p>
                    </div>
                </div>

                <!-- <div class="row">
                    <div class="col-md-5 py-3"> <img src="img/image090.jpg" alt="" class="w-100 rounded"> </div>
                    <div class="col-md-7 py-5">
                        <h3 class="mb-3 text-center font-weight-bold">タイトルが入ります</h3>
                        <h4 class="text-center mb-3">サブタイトルが入りますサブタイトルが入ります</h4>
                        <h5 class="font-weight-bold mb-3 text-center" style="line-height: 1.8rem">日　時：〇〇月〇〇日（土）9:00～12:00<br>
                            場　所：〇〇〇園　おゆうぎ<br>
                            持ち物：〇〇〇、〇〇〇、〇〇〇、〇〇〇</h5>
                        <p class="h6">親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。なぜそんな無闇をしたと聞く人があるかも知れぬ。別段深い理由でもない。新築の二階から首を出していたら、次は抜かさずに飛んで見せますと答えた。（青空文庫より）</p>
                        <p class="h6 mb-3">※お車でお越しの際は、駅周辺の駐車場をご利用ください。</p>
                    </div>
                </div> -->
                <div class="row pt-5 border-bottom fadeInUp">
                    <div class="col-4 col-sm-3 col-md-2 h5 font-weight-normal">2020.7.30</div>
                    <div class="col-4 col-sm-3 col-md-2 h6 text-center"><span class="badge badge-pill badge-danger px-3 py-1">おねがい</span></div>
                    <div class="col-md-8 h6">コロナウイルスが流行っています。こまめにうがい、手洗いを行ってください。</div>
                </div>
                <div class="row pt-3 border-bottom fadeInUp">
                    <div class="col-4 col-sm-3 col-md-2 h5 font-weight-normal">2020.7.20</div>
                    <div class="col-4 col-sm-3 col-md-2 h6 text-center"><span class="badge badge-pill badge-success px-3 py-1">イベント</span></div>
                    <div class="col-md-8 h6">イベントの文章を入れる予定。</div>
                </div>
                <div class="row pt-3 mb-5 border-bottom fadeInUp">
                    <div class="col-4 col-sm-3 col-md-2 h5 font-weight-normal">2020.7.10</div>
                    <div class="col-4 col-sm-3 col-md-2 h6 text-center"><span class="badge badge-pill badge-warning px-3 py-1">おしらせ</span></div>
                    <div class="col-md-8 h6">新しいウナギが仲間になりました。お友達募集中です。</div>
                </div>
                <div class="row"></div>
            </div>
        </div>
    </section>
    
    <!-- 月の予定 -->
    <section class="position-relative pt-5" id="sec5">
        <div class="bg-lightblue half half-white"></div>
        <div class="container text-center position-relative bg-lightblue">
            <h2 class="h3 dot font-weight-bold pt-3 pb-5 px-0 mb-0 fadeInUp">今月の予定</h2>
        </div>
        <div class="continer-fluid bg-lightblue pb-3" style="padding-top:0.7em;">
            <div class="container pb-5">
                <div>
                    <ul class="px-0 fadeInUp">
                        <li class="d-inline-block"><i class="fas fa-circle" style="color:#e366ba;"></i>...プライマリーコース</li>
                        <li class="d-inline-block"><i class="fas fa-circle" style="color:#f3b20a;"></i>...ベーシックコース</li>
                        <li class="d-inline-block"><i class="fas fa-circle" style="color:#49aa48;"></i>...ミドルコース</li>
                        <li class="d-inline-block"><i class="fas fa-circle" style="color:#2ca8ee;"></i>...アドバンスコース</li>
                        <li class="d-inline-block"><i class="fas fa-circle" style="color:#1e5ea0;"></i>...ロボティクスプロフェッサーコース</li>
                    </ul>
                </div>
                <table class="table bg-white_y fadeInUp">
                    <tr>
                        <th>３日（土）</th>
                        <td>予定の内容が入ります。</td>
                        <td>予定の詳細が入ります。</td>
                    </tr>
                    <tr>
                        <th>７日（水）</th>
                        <td>予定の内容が入ります。</td>
                        <td>予定の詳細が入ります。</td>
                    </tr>
                    <tr>
                        <th>〇日（〇）</th>
                        <td>予定の内容が入ります。</td>
                        <td>予定の詳細が入ります。</td>
                    </tr>
                    <tr>
                        <th>〇〇日（〇）</th>
                        <td>予定の内容が入ります。</td>
                        <td>予定の詳細が入ります。</td>
                    </tr>
                    <tr>
                        <th>〇〇日（〇）</th>
                        <td>予定の内容が入ります。</td>
                        <td>予定の詳細が入ります。</td>
                    </tr>
                    <tr>
                        <th>〇〇日（〇）</th>
                        <td>予定の内容が入ります。</td>
                        <td>予定の詳細が入ります。</td>
                    </tr>
                    <tr>
                        <th>〇〇日（〇）</th>
                        <td>予定の内容が入ります。</td>
                        <td>予定の詳細が入ります。</td>
                    </tr>
                    <tr>
                        <th>〇〇日（〇）</th>
                        <td>予定の内容が入ります。</td>
                        <td>予定の詳細が入ります。</td>
                    </tr>
                    <tr>
                        <th>〇〇日（〇）</th>
                        <td>予定の内容が入ります。</td>
                        <td>予定の詳細が入ります。</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
    <!-- アクセス -->
    <section class="text-center position-relative" id="sec6">
        <div class="bg-white_y half half-lightblue"></div>
        <div class="text-center position-relative">
            <h2 class="h3 dot font-weight-bold pt-3 pb-5 px-0 mb-0 fadeInUp">アクセス</h2>
        </div>
        <div class="row  bg-white_y access">
            <div class="col-lg-6 order-lg-2 fadeInUp">
                <h3>浜松中央教室</h3>
                <p>〒430-0933</p>
                <p><span>静岡県浜松市中区鍛冶町100-1</span><span>ザザシティ浜松中央館5F</span><span>浜松こども館ギャラリー2</span></p>
                <p><i class="fas fa-phone"></i> 電話番号<br><span>本部：0120-919-404</span>　<span>教室連絡先：050-5275-1166</span></p>
                <p><i class="far fa-clock"></i> 受付時間<br><span>10:00～18:00 (日・祝日を除く。)</span></p>
                <div class="mt-5 text-center"> <a class="btn btn-success badge-pill text-center px-4" href="https://kids.athuman.com/search/detail/?store_id=990"  target=”_blank”>体験授業お申し込みはこちら</a> </div>
            </div>
            <div class="col-lg-6 fadeInUp">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.000394914718!2d137.72809631530282!3d34.705169980433304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601ade7b9924da1f%3A0x57f42703fb86f15d!2z44GT44GT44O744GE772e44KJ!5e0!3m2!1sja!2sjp!4v1595492609939!5m2!1sja!2sjp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
        <!---------------------------------------- ワークピア磐田教室 ---------------------------------------->
        <div class="row  bg-white_y access">
            <div class="col-lg-6 fadeInUp">
                <h3>ワークピア磐田教室</h3>
                <p>〒438-0086</p>
                <p><span>静岡県磐田市見付2989-3</span><span>ワークピア磐田　会議室</span></p>
                <p><i class="fas fa-phone"></i> 電話番号<br><span>本部：0120-919-404</span>　<span>教室連絡先：050-5275-1166</span></p>
                <p><i class="far fa-clock"></i> 受付時間<br><span>10:00～18:00 (日・祝日を除く。)</span></p>
                <div class="mt-5 text-center"> <a class="btn btn-success badge-pill text-center px-4" href="https://kids.athuman.com/search/detail/?store_id=1026&code=140000"  target=”_blank”>体験授業お申し込みはこちら</a> </div>
            </div>
            <div class="col-lg-6 fadeInUp">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3279.452755802268!2d137.85250531546026!3d34.718980380337236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601ae4322de5a901%3A0xb9624aa9ac725f08!2z56OQ55Sw5biCIOODr-ODvOOCr-ODlOOCouejkOeUsA!5e0!3m2!1sja!2sjp!4v1595507830338!5m2!1sja!2sjp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
        <!---------------------------------------- 袋井月見の里教室 ---------------------------------------->
        <div class="row  bg-white_y access">
            <div class="col-lg-6 order-lg-2 fadeInUp">
                <h3>袋井月見の里教室</h3>
                <p>〒437-0125</p>
                <p><span>静岡県袋井市上山梨四丁目3-7</span><span>袋井市 月見の里学遊館内</span></p>
                <p><i class="fas fa-phone"></i> 電話番号<br><span>本部：0120-919-404</span>　<span>教室連絡先：050-5275-1166</span></p>
                <p><i class="far fa-clock"></i> 受付時間<br><span>10:00～20:00 (日・祝日を除く。)</span></p>
                <div class="mt-5 text-center"> <a class="btn btn-success badge-pill text-center px-4" href="https://kids.athuman.com/search/detail/?store_id=1396&code=140000"  target=”_blank”>体験授業お申し込みはこちら</a> </div>
            </div>
            <div class="col-lg-6 fadeInUp">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6553.491502333169!2d137.89806205918234!3d34.78717537823319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601ae341d631bceb%3A0xc2f6b280be9375f!2z6KKL5LqV5biC5pyI6KaL44Gu6YeM5a2m6YGK6aSo!5e0!3m2!1sja!2sjp!4v1595501179081!5m2!1sja!2sjp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
        <!---------------------------------------- 湖西中央教室 ---------------------------------------->
        <div class="row  bg-white_y access">
            <div class="col-lg-6 fadeInUp">
                <h3>湖西中央教室</h3>
                <p>〒431-0303</p>
                <p><span>静岡県湖西市新居町浜名519-1</span><span>新居地域センター内</span></p>
                <p><i class="fas fa-phone"></i> 電話番号<br><span>本部：0120-919-404</span>　<span>教室連絡先：050-5275-1166</span></p>
                <p><i class="far fa-clock"></i> 受付時間<br><span>10:00～18:00 (日・祝日を除く。)</span></p>
                <div class="mt-5 text-center"> <a class="btn btn-success badge-pill text-center px-4" href="https://kids.athuman.com/search/detail/?store_id=1767&code=140000"  target=”_blank”>体験授業お申し込みはこちら</a> </div>
            </div>
            <div class="col-lg-6 fadeInUp">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.6605608092336!2d137.5589293153026!3d34.68851548043758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601ad631913b29d7%3A0xedf058ba2c2e0a49!2z5rmW6KW_5biC5paw5bGF5Zyw5Z-f44K744Oz44K_44O8!5e0!3m2!1sja!2sjp!4v1595501850940!5m2!1sja!2sjp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </section>
</main>
<footer class="position-relative pt-5"> 
    <!-- フッターナビ -->
    <div class="half-white half bg-green"></div>
    <div class="bg-green pb-3 position-relative">
        <div class="container mt-3">
            <ul class="d-md-flex justify-content-center justify-content-md-between flex-wrap h6 list-unstyled pb-4">
                <li class="mb-3 mb-md-0"><a href="#sec0" class="text-white mr-1">トップ</a></li>
                <span class="text-white d-none d-md-block">|</span>
                <li class="mb-3 mb-md-0"><a href="#sec1" class="text-white mr-1">ロボット教室とは</a></li>
                <span class="text-white d-none d-md-block">|</span>
                <li class="mb-3 mb-md-0"><a href="#sec2" class="text-white mx-1">コース紹介</a></li>
                <span class="text-white d-none d-md-block">|</span>
                <li class="mb-3 mb-md-0"><a href="#sec3" class="text-white mx-1">教室のようす</a></li>
                <span class="text-white d-none d-md-block">|</span>
                <li class="mb-3 mb-md-0"><a href="#sec4" class="text-white mx-1">お知らせ</a></li>
                <span class="text-white d-none d-md-block">|</span>
                <li class="mb-3 mb-md-0"><a href="#sec5" class="text-white mx-1">今月の予定</a></li>
                <span class="text-white d-none d-md-block">|</span>
                <li class="mb-3 mb-md-0"><a href="#sec6" class="text-white mx-1">アクセス</a></li>
                <span class="text-white d-none d-md-block">|</span>
                <li class="mb-3 mb-md-0"><a target=”_blank” href="https://kids.athuman.com/robo" class="text-white ml-1">ヒューマンアカデミー</a></li>
            </ul>
            <div class="row px-md-0">
                <div class="col-md-6">
                    <p class="text-white h6">TERAKOYA浜松</p>
                    <p class="text-white mb-0">〒123-4567</p>
                    <p class="text-white">東京都千代田区千代田１−１</p>
                </div>
                <div class="col-md-6">
                    <p class="text-white mb-1"><i class="fas fa-phone mr-2"></i>0120-919-404</p>
                    <p class="text-white mb-1"><i class="far fa-envelope mr-2"></i>info@example.com</p>
                    <p class="text-white mb-1"><i class="fab fa-facebook-square"></i> <a href="https://www.facebook.com/terakoya.hamamatsu/" target="_blank" style="color:#fff;">@terakoya.hamamatsu</a></p>
                </div>
            </div>
        </div>
        <hr style="border-color: #fff;">
        <p class="mb-0 pt-2 text-white text-center mod-copyright">2020 &copy; TERAKOYA浜松</p>
        <div class="row"> </div>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>