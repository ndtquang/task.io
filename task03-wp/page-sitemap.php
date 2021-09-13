<?php get_header(); ?>
<section class="c-pagebanner">
           <div class="c-pagebanner__img">
               <img src="<?php echo get_template_directory_uri(); ?>/img/sitemap_banner.png" alt="">
               <div class="c-pagebanner__title">
                <p>サイトマップ</p>
            </div>
           </div>           
</section>
<?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post();  ?>
 <div class="c-pagename">
            <p><a href="">トップページ </a>&nbsp; <span> <i class="fas fa-caret-right"></i> </span> &nbsp;</p>
            <p><a href=""> サイトマップ</a></p>
        </div>

        <section class="c-sitecontain">
            <div class="c-sitecontain__table s-table1">
                <table>
                    <tr>
                        <td> <a href="" class="s-pad10">トップページ</a> </td>
                        <td><a href=""><i class="fas fa-chevron-circle-right"></i></a> </td>
                    </tr>
                    <tr class="s-bdyellow">
                        <td><a href="">やまとのマンション管理について</a> </td>
                        <td><a href=""> <i class="fas fa-chevron-circle-right"></i></a></td>
                    </tr>
                    <tr class="s-bdyellow">
                        <td><a class="s-pad40" href="">修繕工事</a> </td>
                        <td><a href=""><i class="fas fa-chevron-circle-right"></i></a> </td>
                    </tr>
                    <tr class="s-bdyellow">
                        <td><a class="s-pad40" href="">理事長代行・管理組合アドバイス</a></td>
                        <td><a href=""> <i class="fas fa-chevron-circle-right"></i></a></td>
                    </tr>
                    <tr class="s-bdyellow">
                        <td><a class="s-pad40" href="">マンション管理業務</a></td>
                        <td><a href=""> <i class="fas fa-chevron-circle-right"></i></a></td>
                    </tr>
                    <tr>
                        <td><a href="">施工事例</a></td>
                        <td><a href=""> <i class="fas fa-chevron-circle-right"></i></a></td>
                    </tr>
                    <tr>
                        <td><a href="">やまとのマンション管理コラム</a></td>
                        <td><a href=""> <i class="fas fa-chevron-circle-right"></i></a></td>
                    </tr>
                    <tr>
                        <td><a href="">会社概要</a></td>
                        <td><a href=""> <i class="fas fa-chevron-circle-right"></i></a></td>
                    </tr>
                    <tr>
                        <td><a href="">プライバシーポリシー</a></td>
                        <td><a href=""><i class="fas fa-chevron-circle-right"></i></a> </td>
                    </tr>
                </table>
               
            </div>

            <div class="c-sitecontain__table s-table2">
                <table>
                    <tr class="s-bdyellow s-bdbrown">
                        <td><a href="">マンション修繕工事について</a></td>
                        <td><a href=""><i class="fas fa-chevron-circle-right"></i></a> </td>
                    </tr>
                    <tr class="s-bdyellow">
                        <td><a class="s-pad40" href="">大規模修繕について</a></td>
                        <td><a href=""><i class="fas fa-chevron-circle-right"></i></a> </td>
                    </tr>
                    <tr class="s-bdyellow">
                        <td><a class="s-pad100" href="">屋上防水工事</a></td>
                        <td><a href=""><i class="fas fa-chevron-circle-right"></i></a> </td>
                    </tr>
                    <tr class="s-bdyellow">
                        <td><a class="s-pad100" href="">外壁塗装工事</a></td>
                        <td><a href=""><i class="fas fa-chevron-circle-right"></i></a> </td>
                    </tr>
                    <tr class="s-bdyellow">
                        <td><a class="s-pad40" href="">設備・部分的修繕</a></td>
                        <td><a href=""><i class="fas fa-chevron-circle-right"></i></a> </td>
                    </tr>
                    <tr>
                        <td><a href="">よくあるご質問</a></td>
                        <td><a href=""><i class="fas fa-chevron-circle-right"></i></a> </td>
                    </tr>
                    <tr>
                        <td><a href="">お問い合わせ</a></td>
                        <td><a href=""><i class="fas fa-chevron-circle-right"></i></a> </td>
                    </tr>
                    <tr>
                        <td><a href="">サイトマップ</a></td>
                        <td><a href=""><i class="fas fa-chevron-circle-right"></i></a> </td>
                    </tr>
                </table>              
              
            </div>
        </section>

<?php  endwhile; ?>
<?php endif; ?>
<?php get_footer();?>