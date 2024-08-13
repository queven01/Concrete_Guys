<?php 
    $isTitle = get_field('title');

    $isBannerImage = isset(get_field('image')['url']);
    $banner_description = get_field('description');
    $banner_button = get_field('button');

    $banner_cta = get_field('call_to_action');
    $cta_1 = $banner_cta['cta_1'];
    $cta_2 = $banner_cta['cta_2'];
    $cta_3 = $banner_cta['cta_3'];
    
    if($isTitle){
        $banner_title = get_field('title');
    } else {
        $banner_title = get_the_title();
    }

    if($isBannerImage){
        $banner_image = get_field('image')['url'];
    } else {
        $banner_image = get_the_post_thumbnail_url();
    }
?>

<section class="banner banner-home">
    <div class="container">
        <div class="content">
            <h1 class="title typing-container"><?php echo $banner_title; ?></h1> 
            <?php if($banner_description){ echo '<p class="description">'.$banner_description.'</p>'; }?> 
            <?php if($banner_button): ?>
                <div class="btn-container">
                    <?php if($banner_button){ echo '<a class="btn green" href="'.$banner_button['url'].'">'.$banner_button['title'].'</a>'; }?> 
                    <?php if($banner_button){ echo '<a class="btn green" href="'.$banner_button['url'].'">'.$banner_button['title'].'</a>'; }?> 
                </div>
            <?php endif; ?>
        </div>
    </div>
    <img class="banner-bg-image" src="<?php echo $banner_image; ?>" alt="">
</section>
<section class="call_to_actions">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="">
                    <div class="card cta">    
                    <h2><?php echo $cta_1['title'];?></h2>
                    <p><?php echo $cta_1['description'];?></p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="">
                    <div class="card cta">    
                    <h2><?php echo $cta_2['title'];?></h2>
                    <p><?php echo $cta_2['description'];?></p>
                    </div>
                </a>
            </div>
            <div class="col-md-4"> 
                <a href="">
                    <div class="card cta">    
                    <h2><?php echo $cta_3['title'];?></h2>
                    <p><?php echo $cta_3['description'];?></p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>