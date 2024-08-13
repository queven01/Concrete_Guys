<?php 
    $content_columns = get_sub_field('content_columns');

    $background_color = get_sub_field('background_color');
    $small_container = get_sub_field('small_container');
    $number_of_columns = get_sub_field('number_of_columns');

    $padding = get_sub_field('padding');
    $margin = get_sub_field('margin');

    $dark_mode = get_sub_field('dark_mode');
    $vertical_align_center = get_sub_field('vertical_align_center');

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
<?php if($content_columns): ?>
<section <?php echo 'id="'.$section_id.'"'?> class="column content-editors <?php if($margin){echo 'margin-'.$margin;}?> <?php if($padding){echo 'padding-'.$padding;}?> <?php if($dark_mode){echo 'dark-mode';} ?>"  style="<?php if($background_color){echo 'background-color:'.$background_color.';';}?>" >
    <div class="container <?php if($small_container){echo 'small-container';};?>">
        <div class="row g-5 <?php if($vertical_align_center){echo 'vertical-align';} ?>">
            <?php foreach($content_columns as $card): 
                echo $column_Div;?>
                    <?php echo $card['editor']; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>