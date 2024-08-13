<?php
    $card = $args['cardValue'];

    $image = $card['image'];
    $title = $card['title'];
    $description = $card['description'];
    $button = $card['button'];
    $button_color = $card['button_color'];
?>
<div class="card default">
    <a href="<?php echo get_permalink($id);?>" class="card-link">
        <div class="image-container">
            <img src="<?php echo $image['url']; ?>" alt="">
        </div>
        <div class="content">
            <h2 class="title"><?php echo $title ?></h2>
            <p><?php echo $description; ?></p>
            <span class="btn"><?php echo $button['title']?></span>
        </div>
    </a>
</div> 