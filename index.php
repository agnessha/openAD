<?php get_header();
?>

<section class="main__slider">
    <div class="slider">
        <?php
        $images = get_field('slider__photo');
        foreach ($images as $image) : ?>
            <div class="slider__slick">
                <img class="slider__photo" src="<?php echo $image['url'] ?>" alt="">
            </div>
        <?php endforeach; ?>
    </div>
<!--        <div class="slider__slick">-->
<!--            <img class="slider__photo" src="img/slider-1.jpg" alt="">-->
<!--        </div>-->
<!--        <div class="slider__slick">-->
<!--            <img class="slider__photo" src="img/slider-2.jpg" alt="">-->
<!--        </div>-->
<!--        <div class="slider__slick">-->
<!--            <img class="slider__photo" src="img/slider-3.jpeg" alt="">-->
<!--        </div>-->
<!--        <div class="slider__slick">-->
<!--            <img class="slider__photo" src="img/slider-4.jpeg" alt="">-->
<!--        </div>-->
<!--        <div class="slider__slick">-->
<!--            <img class="slider__photo" src="img/slider-5.jpg" alt="">-->
<!--        </div>-->
<!--        <div class="slider__slick">-->
<!--            <img class="slider__photo" src="img/slider-6.jpg" alt="">-->
<!--        </div>-->
    </div>
</section>
<section>
    <div class="text">
        <?php the_field('slider__text')?>

    </div>
</section>
<!--<script src="libs/jquery/jquery.js"></script>-->
<!--<script src="libs/slick/slick.min.js"></script>-->
<!--<script src="vue/vue.js"></script>-->
<!--<script src="js/main.js"></script>-->
<?php get_footer();

$image = get_field('myimage');
print($image); ?>
