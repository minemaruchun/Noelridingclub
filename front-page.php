<?php get_header() ?>
<main>
    <!-- fv -->
    <section class="front-fv">
        <img src="<?=get_template_directory_uri(); ?>/img/FirstViewimg.png" alt="ファーストビュー">
        <h2>
            馬と過ごす、<br>癒しの時間を作ってみませんか
        </h2>
    </section>
    <!-- fv -->
    <!-- news -->
    <section id="news" class="section-back front-news">
        <div class="inner-back news-inner">
            <div class="common-subtitle">
                <h3>新着情報<span class="common-pconly"> News</span></h3>
            </div>
            <div class="news-experience">
                <a href="experience"><h2>体験乗馬　随時受付中</h2></a>
            </div>

            <div class="news-scrollbox">
                <?php query_posts('posts_per_page=10'); ?> 
                <?php if( have_posts() ):
                    while( have_posts() ) : the_post(); ?>
                        <article class="front-news__wrap">
                            <a href="<?php the_permalink(); ?>">
                                <div class="front-news__wrap-inner">
                                    <time datetime="<?php the_time('Y-m-d'); ?>">
                                        <?php the_time('Y.m.d'); ?>
                                    </time>   
                                    <h3><?php the_title() ?></h3>
                                </div>
                                <div>
                                <i class="fas fa-caret-right  fa-2x"></i></div>
                            </a>
                        </article>
                    <?php endwhile; ?>
                <?php endif; ?>         
            </div>
            

            <div class="news-list">
                <a href="news"><h2>新着情報一覧はこちら<h2></a>
            </div>
        </div>
        
    </section>
    <!-- news -->     
    <!-- about -->
    <section id="about" class="section-back front-about">
        <div class="inner-back about-inner">
            <div class="common-subtitle">
                <h3>会社概要<span class="common-pconly"> About</span></h3>
            </div>
            <ul class="about-container">
                <li class="about-container__first"><img  src="<?=get_template_directory_uri(); ?>/img/aboutimg.png" alt="障碍飛越"></li>
                <li class="about-container__second">
                    <ul class="about-text">
                        <li>会社概要</li>
                        <li>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</li>
                    </ul>
                </li>
            </ul>
            <div class="common-btn-Contact">
                <a href="blog"><h3>スタッフブログ<br>Staff Blog</h3></a>
            </div>
        </div>
    </section>
    <!-- about -->    
    <!-- membership -->
    <section id="membership" class="section-back front-membership">
        <div class="inner-back membership-inner">            
            <div class="common-subtitle">
                <h3>会員制度<span class="common-pconly"> MemberShip</span></h3>
            </div>            
            <!-- membership-sp -->
            <div class="membership-sp">
                <div class="membership-table-left">
                    <table class="membership-table-sp_left">
                        <tr><th>会員種別</th></tr>
                        <tr><th>入会金</th></tr>            
                        <tr><th>月会費</th></tr>            
                        <tr><th>レッスン料</th></tr>            
                        <tr><th>概　要</th></tr>      
                    </table>
                </div>
                <div class="membership-table-right">
                    <!-- membership-sp swiper -->
                    <div class="swiper swiper-membership">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide swiper-slide-membership">
                                <table class="membership-dtail">
                                    <tr><td><p>正会員</P></td></tr> 
                                    <tr><td>100,000円</td></tr>
                                    <tr><td>30,000円</td></tr>
                                    <tr><td>1,750円</td></tr>
                                    <tr><td>休業日以外</br>1日2レッスン</br></td></tr>
                                </table>
                            </div>
                            <div class="swiper-slide swiper-slide-membership">
                                <table class="membership-dtail">
                                    <tr><td>平日会員</td></tr>                
                                    <tr><td>70,000円</td></tr>
                                    <tr><td>20,000円</td></tr>
                                    <tr><td>1,750円</td></tr>
                                    <tr><td>平日限定</br>1日1レッスン</br></td></tr>
                                </table>
                            </div>
                            <div class="swiper-slide swiper-slide-membership">
                                <table class="membership-dtail">
                                    <tr><td>週末会員</td></tr>                
                                    <tr><td>50,000円</td></tr>
                                    <tr><td>10,000円</td></tr>
                                    <tr><td>2,000円</td></tr>
                                    <tr><td>土・日・祝日限定</br>1日1レッスン</br></td></tr>
                                </table>
                            </div>
                            <div class="swiper-slide swiper-slide-membership">
                                <table class="membership-dtail">
                                    <tr><td>ジュニア会員</td></tr>                
                                    <tr><td>50,000円</td></tr>
                                    <tr><td>15,000円</td></tr>
                                    <tr><td>1,750円</td></tr>
                                    <tr><td><p>休業日以外</p>
                                            <p>1日2レッスン</p>
                                            <p>高校生まで</p></td></tr>
                                </table>
                            </div>
                        </div>
                        <div class="swiper-pagination swiper-pagination-membership"></div>
                    </div>
                    <!-- membership-sp swiper -->
                </div>
            </div>
            <!-- membership-sp -->
            <h4>詳細はお問い合わせください</h4>
        </div>
    </section>
    <!-- membership -->
    <!-- horses -->
    <section id="horses" class="section-back front-horses">
        <div class="inner-back horses-inner">            
            <div class="common-subtitle">
                <h3>馬たち<span class="common-pconly"> Horses</span></h3>
            </div>
            <!-- horses swiper -->
            <div class="swiper-container-horse">
                <div class="swiper swiper-horse">
                    <div class="swiper-wrapper swiper-wrapper-horse">
                        <div class="swiper-slide swiper-slide-horse">
                            <div class="horse-card">
                                <img src="<?=get_template_directory_uri(); ?>/img/snowwhite.png" alt="スノーホワイト" />
                                <img src="<?=get_template_directory_uri(); ?>/img/snowwhite-msg.png" alt="スノーホワイト" />
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-horse">
                            <div class="horse-card">
                                <img src="<?=get_template_directory_uri(); ?>/img/locky.png" alt="ロッキー" />
                                <img src="<?=get_template_directory_uri(); ?>/img/locky-msg.png" alt="ロッキー" />
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-horse">
                            <div class="horse-card">
                                <img src="<?=get_template_directory_uri(); ?>/img/noel.png" alt="ノエル" />
                                <img src="<?=get_template_directory_uri(); ?>/img/noel-msg.png" alt="ノエル" />
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-horse">
                            <div class="horse-card">
                                <img src="<?=get_template_directory_uri(); ?>/img/pony.png" alt="ポニー" />
                                <img src="<?=get_template_directory_uri(); ?>/img/pony-msg.png" alt="ポニー" />
                            </div>
                        </div>
                    </div> 
                </div>                
                <div class="swiper-pagination swiper-pagination-horse" style="bottom:-20px"></div>               
            </div>

            <!-- horses swiper -->
        </div>
    </section>
    <!-- horses -->
    <!-- facility -->
    <section id="facility" class="section-back front-facility">
        <div class="inner-back facility-inner">            
            <div class="common-subtitle">
                <h3>施設案内<span class="common-pconly"> Facility</span></h3>
            </div>
            <div class=facility-container>
                <div class="facility-container__card">
                    <div class="facility-container__card-img">
                        <img src="<?=get_template_directory_uri(); ?>/img/clubhouse.png" alt="クラブハウス" />
                    </div>                    
                    <div class="facility-container__card-text">
                        <h4>クラブハウス</h4>
                        <p>テキストテキストテキストテキストテキストテキストテキスト </p>
                    </div>
                </div>
                <div class="facility-container__card">
                    <div class="facility-container__card-img">
                        <img src="<?=get_template_directory_uri(); ?>/img/baba.png" alt="クラブハウス" />
                    </div>                    
                    <div class="facility-container__card-text">
                        <h4>馬場</h4>
                        <p>テキストテキストテキストテキストテキストテキストテキスト </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- facility -->
    <!-- access -->
    <section id="access" class="section-back front-access">
        <div class="inner-back access-inner">            
            <div class="common-subtitle">
                <h3>アクセス<span class="common-pconly"> Access</span></h3>
            </div>
            <div class="access-container">
                <div class="access-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21802.404602632905!2d139.76639513129916!3d35.67831106040739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bc65a92dd4b%3A0x88f7b02bba6a95b6!2z5p2x5Lqs6aeF5YWr6YeN5rSy5Lit5aSu5Y-j5LmX6ZmN5aC0!5e0!3m2!1sja!2sjp!4v1729314852841!5m2!1sja!2sjp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <ul class="access-text">
                    <li>住　　所 / 馬馬県馬馬市１ー２－３</li>
                    <li>電話番号 / 000-0000-0000</li>
                    <li>e-mail　 / noelRC@xxxxx.com</li>
                    <br/>
                    <li>HR馬馬駅より車で15分（送迎バスあり）</li>
                    <br/>
                    <li>休業日　 / 毎週　火曜日</li>
                    <li>営業時間 / 9:30～18:30</li>
                    <li>
                        <ul class="icon-container">
                            <li class="icon-container__card">
                                <a href="#"><img src="<?=get_template_directory_uri(); ?>/img/line.png" alt="lineロゴ" /></a>                         
                            </li>
                            <li  class="icon-container__card2">
                                <a href="#"><img src="<?=get_template_directory_uri(); ?>/img/logo_ig.png" alt="instagramロゴ" /></a>
                            </li>
                            <li>
                                <div class="common-btn-Contact access-btn-Contact">
                                    <a href="contact"><h3>お問い合わせ<br>Contact</h3></a>
                                </div>
                            </li>
                        </ul>
                    </li>                        
                </ul>
            </div>
        </div>
    </section>
    <!-- access -->
</main>
<?php get_footer() ?>