<?php
/*
Template Name: Museum
*/
?>
<?php get_header();?>
    <div class="museum-content">
        <h2 class="museum-content-title">Школьный музей</h2> 
        <div class="museum-content-info">
            <div class="museum-content-img">
                <div class="museum-content-img-wrapper"> 
                    <img src="http://school3.local/wp-content/uploads/2021/04/platok.jpg" alt="Школьный музей">
                </div>
            </div>
            <div class="museum-content-text">
                <p>Lorem ipsum dolor sit, amet consectetur 
                   adipisicing elit. Modi, id esse cumque 
                   quo sunt numquam provident dolorem ipsam 
                   non, animi distinctio assumenda aspernatur 
                   magni dicta, cum in repellendus architecto
                   illo possimus alias. Doloribus repellat harum 
                   atque at assumenda temporibus fugiat sequi 
                   amet similique deserunt unde qui 
                   repudiandae necessitatibus repellendus delectus aliquam iusto earum ut, a, perferendis voluptas ad dignissimos. Quisquam sapiente quis officiis aut obcaecati soluta non nisi laudantium, nemo assumenda enim quasi consequuntur quas est corporis corrupti mollitia sed fugit commodi doloribus! Nam vel at, laboriosam repellat dolorem officia accusamus. Fugit eligendi illo amet dignissimos ratione, laboriosam quidem suscipit.</p>
            </div>
            <div class="museum-content-news">

            <?php get_template_part( 'inc/museum','news' ); ?>
            
            </div>
        </div>
        <div class="museum-content-sidebar">
        <?php dynamic_sidebar( 'museum' ); ?>   
        </div>
    </div>

<?php get_footer(); ?>