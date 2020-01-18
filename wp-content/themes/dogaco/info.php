<?php
/*
Template Name: info
*/
?>
<?php get_header(); ?>
    <div id="main" class="container">
        <div class="main-bg fadeIn">
            <img id="view" src="<?php bloginfo('template_directory'); ?>/img/header-img01.png">
            <div id="next"></div>
    </div>
    <a name="staff"></a>
    <section class="about-section staff-section fadeIn">
        <h1 class="about-section__title">Staff</h1>
        <div class="staff-section__contents">
            <div class="staff-section__img">
                <img src="<?php bloginfo('template_directory'); ?>/img/staff-img.png" alt="staff">
            </div>
            <div class="staff-section__profile">
                <h2><span style="font-weight: bold;">|</span> Profile</h2>
                <p>名前 &nbsp;北野 静香</p>
                <p>出身地 &nbsp;大阪府富田林市</p>
                <p>尊敬する人 &nbsp;両親</p>
                <p>特技・趣味 &nbsp;サーフィン・スノーボード</p>
                <p>今まで飼った動物 &nbsp;犬、ハムスター、インコ</p>
            </div>
            <div class="staff-section__paragraph">
                <h2><span style="font-weight: bold;">|</span> Comments</h2>
                <p>大阪府堺市堺区に新しくオープンしたドッグサロンDog Aco（ドッグアコ）のオーナー北野静香と申します。</p>
                <p><br>当店はワンちゃんを綺麗にするだけではなく、ワンちゃんの性格やコンディションなどを考慮してトリミングを行います。ワンちゃんたちが少しでも健康に長生きできるようにお手伝いすることが、本来のトリマーの役目だと考えています。</p>
                <p><br>そしてお店に来るのがワンちゃんにとって、ひとつの楽しみとなるように心掛け施術させていただきます。</p>
                <p><br>皆様の大切なご家族が少しでも健康に長生きできるように、精一杯お手伝いをさせていただきますので、ご不安な点がございましたらお気軽にご質問ください。</p>
            </div>
        </div>
    </section>
    <a name="shop"></a>
    <section class="home-section about-section section-shop fadeIn">
        <h1 class="home-section__title">Shop</h1>
        <table>
            <tr>
                <th>店舗名</th>
                <td>DogAco</td>
            </tr>
            <tr>
                <th>住所</th>
                <td>〒590-0062<br>
                  大阪府堺市堺区北安井町1-28アネックス堺東<br>
                  <span><a href="https://www.google.co.jp/maps/place/Dog+Aco/@34.5727622,135.4735198,17z/data=!3m1!4b1!4m5!3m4!1s0x6000ddff8176a5d9:0xae975cb1a2c4f5a9!8m2!3d34.5727578!4d135.4757085?hl=ja" target="_blank">Google Mapへ</a></span>
                </td>
                </tr>
                <tr>
                    <th>アクセス</th>
                    <td>阪堺電軌阪堺線宿院駅から徒歩約9分<br>
                      南海高野線堺東駅から徒歩約10分<br>
                      ※お車でお越しの方<br>
                      中央環状線を宿院駅方面に向かって直進<br>
                      北安井町の交差点を左折して26号線に入るとすぐ​左手に見えます</td>
                </tr>
                <tr>
                    <th>営業時間</th>
                    <td>10:00〜19:00</td>
                </tr>
                <tr>
                    <th>定休日</th>
                    <td>水曜日<br>
                      ※1月1日〜３日は休業</td>
                </tr>
                <tr>
                    <th>動物取扱業<br>登録情報</th>
                    <td>第一種動物取扱責任者<br>
                      登録番号:堺動指第0797号</td>
                </tr>
        </table>
        <div class="shop-img">
            <img src="<?php bloginfo('template_directory'); ?>/img/shop-img.jpg" alt="shop" width="100%" height="auto">
        </div>
    </section>
    <a name="contact">
    <section class="home-section about-section section-contact fadeIn">
        <h1 class="home-section__title">Contact</h1>
        <p class="home-section__subtitle home-section__tel"><span>TEL</span>&nbsp;&nbsp;<a href="tel:072-242-3125">072-242-3125<a /></p>
        <p class="home-section__paragraph">メールでもご予約いただけます</p>
        <div class="section-contact__item">
            <a href="mailto:dogaco.ar24@gmail.com"><i class="far fa-envelope"></i></a>
            <a href="https://www.instagram.com/dogsalon.dogaco/" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
    </section>
<?php get_footer(); ?>
