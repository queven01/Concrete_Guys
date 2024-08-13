<?php 
    $title = get_sub_field('title');
    $cards = get_sub_field('cards');

    $number_of_columns = get_sub_field('number_of_columns');
    $small_container = get_sub_field('small_container');

    $padding = get_sub_field('padding');
    $margin = get_sub_field('margin');

    $section_id = get_sub_field('section_id');
    
    if($number_of_columns == 1){
        $column_Div = '<div class="col-12">';
    } elseif($number_of_columns == 2){
        $column_Div = '<div class="col-12 col-md-6">';
    } elseif($number_of_columns == 3){
        $column_Div = '<div class="col-12 col-md-4">';
    } elseif($number_of_columns == 4){ 
        $column_Div = '<div class="col-12 col-md-3">';
    }
?>
<section class="card-component <?php if($margin){echo 'margin-'.$margin;}?> <?php if($padding){echo 'padding-'.$padding;}?>" <?php echo 'id="'.$section_id.'"'?> <?php echo 'id="'.$section_id.'"'?>>
    <div class="container <?php if($small_container){echo 'small-container';}?>">
        <?php if($title):?>
        <div class="intro-content">
            <?php echo '<h2 class="section-title">'. $title .'</h2>';?>
        </div>
        <?php endif; ?>
        <div class="row g-5">
            <?php foreach($cards as $card): 
                echo $column_Div;?>
                    <?php get_template_part( 
                        'components/cards/card', 'default', 
                        array(
                            'cardValue'	=> $card,
                        ) 
                    ); ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>