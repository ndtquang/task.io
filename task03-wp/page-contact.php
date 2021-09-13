<?php get_header(); ?>
<section class="c-pagebanner">
           <div class="c-pagebanner__img">
               <img src="<?php echo get_template_directory_uri(); ?>/img/contact_banner.png" alt="">
               <div class="c-pagebanner__title">
                <p>お問い合わせ</p>
            </div>
           </div>          
</section>

<?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post();  ?>
   
   

       <div class="c-pagename">
           <p><a href="">トップページ </a>&nbsp; <span> <i class="fas fa-caret-right"></i></span>&nbsp;</p>
           <p><a href=""> &nbsp;お問い合わせ</a></p>
       </div>

       <div class="c-title ">   
            <div class="c-title__lower">
                <p>ご質問やご相談は、お電話または下記お問い合わせフォームにてお寄せください。<br>
                    後日、担当者よりご連絡させていただきます。
                   <br>よくご質問いただく内容については
                     <br>「よくあるご質問」に掲載しておりますので、ご覧ください。</p>
            </div>
        </div>

        <section class="c-cotainfo">
            <div class="c-cotainfo__content">
                <p class="c-cotainfo__content--txt1"> お電話でのお問い合わせ</p>
                <p class="c-cotainfo__content--txt2"><i class="fas fa-phone-alt"></i> 0120-581-056 <span>10:00~18:00 / 水曜日定休</span> </p>
              
            </div> 
        </section>

        <section class="c-form">
            <div class="c-form__title">
                <p>※すべて入力必須項目となります。</p>
            </div>

            <div class="c-form__info">
                <div class="c-form__label">
                    <p>お名前</p>
                </div>
                <div class="c-form__input">
                    <input type="text" placeholder="大和 太郎">
                 
                </div>
                <div class="c-form__warning">
                    <p>必須項目です</p>
                </div>
                

                <div class="c-form__label">
                    <p>ふりがな</p>
                </div>
                <div class="c-form__input">
                    <input type="text" placeholder="やまと たろう">
                </div>

                <div class="c-form__label">
                    <p class=" label3">電話番号</p>
                </div>
                <div class="c-form__input">
                    <input type="text" placeholder="09012345678">
                </div>

                <div class="c-form__label">
                    <p class=" label4">メールアドレス</p>
                </div>
                <div class="c-form__input">
                    <input type="text" placeholder="yamato@example.com">
                </div>

                <div class="c-form__label">
                    <p class=" label3">お問い合わせ種類</p>
                </div>
                <div class="c-form__input">
                   <select name="" id="">
                       <option value="">選択してください</option>
                   </select>
                </div>

                <div class="c-form__label">
                    <p class=" label3">お問い合わせ内容</p>
                </div>
               <textarea name="" id="">ここにお問い合わせ内容を入力してください
               </textarea>
            </div>

        </section>

        <div class="c-about small">
            <p><a href="">確認する <i class="fas fa-chevron-right"></i></a></p>
        </div>
		
  


  <?php  endwhile; ?>
<?php endif; ?>


<?php get_footer();?>