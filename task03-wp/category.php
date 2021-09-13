<?php get_header(); ?>


 <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
 <section class="c-pagebanner">
           <div class="c-pagebanner__img">
               <img src="<?php echo get_template_directory_uri();?>/img/service_management_banner.png" alt="">
               <div class="c-pagebanner__title">
                <p class="s-txt">やまとのマンション管理について</p>
                <p>マンション管理業務</p>
            </div>
           </div>
           
       </section>

 <div class="c-pagename">
            <p><a href="">トップページ </a>&nbsp; <span> <i class="fas fa-caret-right"></i> </span> &nbsp;</p>
            <p><a href="">やまとの分マンション管理について</a> &nbsp; <span> <i class="fas fa-caret-right"></i> </span> &nbsp;</p>
            <p><a href="">マンション管理業務</a></p>
        </div>

        <div class="c-title">
            <div class="c-title__txt1">
                <p>マンション管理業務について</p>
            </div>
            <div class="c-title__line">
                <hr>
            </div>
            <div class="c-title__lower">
                <p>管理会社としてマンション管理業務全般
                <br> （大規模修繕計画・施工、設備点検・メンテナンス・修繕工事、管理組合の運営・ <br>
                    会計サポート、緊急対応等）をお任せいただけます。 <br>
                    自主管理からの移行、現管理会社からの変更両方に対応が可能です。</p>
            </div>       
        </div>

        <section class="p-service p-sermana">
            <div class="c-title">
                <div class="c-title__txt1 s-titlereno">
                    <p>主なサービス内容</p>
                </div>
                <div class="c-title__line">
                    <hr>
                </div>      
            </div>
            <div class="c-serblock c-serblock2">          
                <div class="c-seragent">
                   <div class="c-seragent__left s-clgreen">
                       <p><a href="#">事務管理業務</a> </p>
                   </div>
                   <div class="c-seragent__right">
                    <ul>
                        <li>・会計業務（年度収支予算案及び決算書の作成）</li>
                        <li>・出納業務（管理費・修繕積立金・その他使用料の金銭出納、<br>
                            　管理費・修繕積立金などの滞納者に対する督促、通帳保管、<br>
                            　会計に関わる帳簿管理）</li>
                       
                    </ul>
                </div>
                </div>   
                
                <div class="c-seragent">
                    <div class="c-seragent__left s-clgreen">
                        <p><a href="<?php echo esc_url( home_url( '/' ) );?>./agent">管理員業務</a> </p>
                    </div>
                    <div class="c-seragent__right c-manaright" > 
                        <ul>
                            <li>・館内巡回、清掃</li>
                            <li>・設備点検、修繕工事、その他必要時の立会</li>
                            <li>・緊急時連絡業務</li>
                        </ul>
                    </div>
                 </div>
    
                 <div class="c-seragent">
                    <div class="c-seragent__left s-clgreen">
                        <p><a href="">清掃業務</a></p>
                    </div>
                    <div class="c-seragent__right c-manaright">
                        <ul>
                            <li>・建物内共用部の日常清掃</li>
                            <li>・エントランス、廊下、階段等の定期清掃</li>
                        
                        </ul>
                    </div>
                </div>

                <div class="c-seragent">
                    <div class="c-seragent__left s-clgreen">
                        <p><a href="<?php echo esc_url( home_url( '/' ) );?>./renovation-small"> 建物・<br>
                            設備管理業務</a></p>
                    </div>
                    <div class="c-seragent__right c-manaright">
                        <ul>
                            <li>・大規模修繕工事</li>
                            <li>・長期修繕計画書</li>
                            <li>・建物劣化調査</li>
                            <li>・共有部分保守点検</li>
                        </ul>
                    </div>
                </div>
            </div>
          
            <div class="c-lasttxt">
                <p>規模・サービス内容によってお見積りを作成いたします</p>
            </div>
            <div class="c-empty1"></div>

        </section>

        <section class="c-midcontain">
            <div class="c-midcontain__content1 s-manacontain1">
                <div class="c-midcontain__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/service_management_pic1.png" alt="">
                    <div class="c-midcontain__txt s-manatxtblock1">
                        <p class="c-midcontain__txt--txt1">管理会社＋αの付加価値</p>
                        <p class="c-midcontain__txt--txt2 s-sertxt2">当社では管理組合の運営アドバイスも行っており、管理組合様の状況を的確に把握した上で各種サポートをいたします。<br>
                            <span>ただ管理業務を行うのではなく、マンション管理組合様の状況を理解した上でオールマイティな視点でサポートを行い、管理組合様の負担軽減とスムーズな運営を縁の下で支えます。</span>
                        </p>
                      
                    </div>
                </div>   
            </div>

            <div class="c-midcontain__content2 s-manacontain2">
                <div class="c-midcontain__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/service_management_pic2.png" alt="">
                    <div class="c-midcontain__txt s-manatxtblock2">
                        <p class="c-midcontain__txt--txt1">大規模修繕工事の <br> <span>コンサルティングから施工も可能</span></p>
                        <p class="c-midcontain__txt--txt2 s-sertxt2">大規模修繕工事は当社が建設会社としても対応可能です。他社への相見積もりも可能で、透明性のある工事を提供します。
                            <br><span>当社では自社施工体制により中間コスト等余計な費用を削減し、質の高い工事を価格を抑えて施工が可能です。その為、管理組合様の業務負担を減らし、更に管理組合様の財政状況にも貢献できます。</span>
                        </p>     
                                        
                    </div>
                </div>           
            </div>

            <div class="c-midcontain__content1">
                <div class="c-midcontain__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/service_management_pic3.png" alt="">
                    <div class="c-midcontain__txt s-manatxtblock3">
                        <p class="c-midcontain__txt--txt1">自主管理の移行、現管理会社からの
                         <br>   変更手続きもお手伝い</p>
                        <p class="c-midcontain__txt--txt2 s-sertxt2">自主管理、他の管理会社に委託中の場合も、その変更手続きをお手伝いしますのでご安心いただけます
                        </p>
                
                    </div>
                </div>   
            </div>
        </section>
       
        <div class="c-renobot">
            <divc class="-renobot__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/service_agent_bot.png" alt="">
            </divc>
        </div>

<?php  endwhile; ?> <?php endif; ?>
<?php get_footer();?>