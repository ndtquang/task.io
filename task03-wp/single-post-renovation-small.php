<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
<section class="c-pagebanner">
           <div class="c-pagebanner__img">
               <img src="<?php echo get_template_directory_uri(); ?>/img/reno_small_banner.png" alt="">
               <div class="c-pagebanner__title">
                <p class="s-txt">マンション修繕工事について</p>
                <p >設備・部分的修繕</p>
            </div>
           </div>
           
       </section>

        <div class="c-pagename">
            <p><a href="">トップページ </a>&nbsp; <span> <i class="fas fa-caret-right"></i> </span> &nbsp;</p>
            <p><a href=""> マンション修繕工事について</a> &nbsp; <span> <i class="fas fa-caret-right"></i> </span> &nbsp;</p>
            <p><a href="">設備・部分的修繕</a></p>
        </div>

        <div class="c-title">
            <div class="c-title__txt1">
                <p>設備・部分的修繕</p>
            </div>
            <div class="c-title__line">
                <hr>
            </div>
            <div class="c-title__lower">
                <p>建物部分と同様に、設備部分も定期的なメンテナンス・修繕工事を行い、
                  <br>  経年による劣化や破損など様々な不具合を防ぎます。<br>
                  マンションの状態によって、各部分工事のお見積り及び工事の実施を承ります。</p>
            </div>
            <div class="c-title__lower s-lowerreno">
                <p>大規模修繕と同様に、無駄な作業は省き <br>
                    工事を効率化することで費用の削減につなげています。</p>
            </div>
            <div class="c-title__lower s-lowerreno">
                <p>設備によっては数百万円の差が出る可能性もありますので、相見積もりもご依頼ください。</p>
            </div>
        </div>


        <section class="p-renosmall">
            <div class="c-title">
                <div class="c-title__txt1 s-titlereno">
                    <p>設備・部分的修繕の種類</p>
                </div>
                <div class="c-title__line">
                    <hr>
                </div>
            </div>

            <div class="c-renosmall1">
                <div class="c-renosmall1__content">
                    <div class="c-renosmall1__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/renosmall_pic1.png" alt="">
                    </div>
                    
                    <div class="c-renosmall1__txt">
                        <p class="c-renosmall1__txt--txt1">空調・換気設備</p>
                        <p>空調設備、換気設備</p>
                    </div>
                </div>

                <div class="c-renosmall1__content">
                    <div class="c-renosmall1__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/renosmall_pic2.png" alt="">
                    </div>
                    
                    <div class="c-renosmall1__txt">
                        <p class="c-renosmall1__txt--txt1">電灯設備等</p>
                        <p>電灯設備、配電盤類、幹線設備、避雷針設備、自家発電設備</p>
                    </div>
                </div>

                <div class="c-renosmall1__content">
                    <div class="c-renosmall1__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/renosmall_pic3.png" alt="">
                    </div>
                    
                    <div class="c-renosmall1__txt">
                        <p class="c-renosmall1__txt--txt1">情報・通信設備</p>
                        <p>電話設備、テレビ共聴設備、インターネット設備、インターホン設備等</p>
                    </div>
                </div>
            </div>
            <div class="c-renosmall2">
         
                <div class="c-renosmall2__content">
                    <div class="c-renosmall2__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/renosmall_pic4.png" alt="">
                    </div>
                    
                    <div class="c-renosmall2__txt">
                        <p class="c-renosmall2__txt--txt1">ガス設備</p>
                        <p class="c-renosmall2__txt--txt2">ガス管</p>
                    </div>
                </div>

                <div class="c-renosmall2__content">
                    <div class="c-renosmall2__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/renosmall_pic5.png" alt="">
                    </div>
                    
                    <div class="c-renosmall2__txt">
                        <p class="c-renosmall2__txt--txt1">消防用設備</p>
                        <p class="c-renosmall2__txt--txt2">屋内消火栓設備、自動火災報知機設備、連結送水管設備</p>
                    </div>
                </div>

                <div class="c-renosmall2__content">
                    <div class="c-renosmall2__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/renosmall_pic6.png" alt="">
                    </div>
                    
                    <div class="c-renosmall2__txt">
                        <p class="c-renosmall2__txt--txt1">その他</p>
                        <p class="c-renosmall2__txt--txt2">昇降機設備、立体駐車場設備、外構、付属施設
                            、その他</p>
                    </div>
                </div>
            </div>
        </section>

       

        <div class="c-renobot">
            <divc class="-renobot__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/renosmall_bot.png" alt="">
            </divc>
        </div>



<?php  endwhile; ?> <?php endif; ?>
<?php get_footer();?>