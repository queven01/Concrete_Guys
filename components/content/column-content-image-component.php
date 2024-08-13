<?php 
    $content = get_sub_field('content');
    $image = get_sub_field('image');
    $flip_image = get_sub_field('flip_image');
    $button_1 = get_sub_field('button_1');
    $button_2 = get_sub_field('button_2');

    $section_id = get_sub_field('section_id');
?>
<section class="column content-image <?php if($flip_image){ echo 'flip_image'; } ?>" >
    <div class="container">
        <div class="row">
            <div class="col-md-6 content-side">
                <div class="content">
                    <?php echo $content; ?>
                    <?php if($button_1){ echo '<a class="btn" href="'.$button_1['url'].'">'.$button_1['title'].'</a>'; }?>
                    <?php if($button_2){ echo '<a class="btn" href="'.$button_2['url'].'">'.$button_2['title'].'</a>'; }?>
                </div>
            </div>
            <div class="col-md-6 image-side">
                <img src="<?php echo $image['url']; ?>" alt="">
            </div>
        </div>
    </div>
</section>