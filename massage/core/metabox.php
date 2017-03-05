<?php 


    function sh_custom_meta_boxes($post_type, $post) {
        add_meta_box(
            'sl-meta-box',
            __('Дополнительные опции'),
            'render_sl_meta_box',
            'post',
            'normal',
            'default'
        );
    }

    add_action('add_meta_boxes', 'sh_custom_meta_boxes', 10, 2);

    function render_sl_meta_box($post) {
            
            $discription = get_post_meta($post->ID, '_discription', true);
            $time_massage = get_post_meta($post->ID, '_time_massage', true);
            $price_massage = get_post_meta($post->ID, '_price_massage', true);
            
        ?>
        <p>
            <lable for="sl-discription">Описание</lable><br>
            
            <input type="text" name="sl-discription" id="sl-discription" value="<?php echo $discription; ?>">
        </p>
        <p>
            <lable for="sl-time_massage">Время массажа</lable><br>
            <input type="text" name="sl-time_massage" id="sl-time_massage" value="<?php echo $time_massage; ?>">
        </p>
        <p>
            <lable for="sl-price_massage">Цена</lable><br>
            <input type="text" name="sl-price_massage" id="sl-price_massage" value="<?php echo $price_massage; ?>">
        </p>
      
        
        <?php
    }

    function sh_save_postdata($post_id) {
        if (array_key_exists('sl-discription', $_POST)) {
            update_post_meta($post_id, '_discription', $_POST['sl-discription']);
        }

        if (array_key_exists('sl-time_massage', $_POST)) {
            update_post_meta($post_id, '_time_massage', $_POST['sl-time_massage']);
        }

        if (array_key_exists('sl-price_massage', $_POST)) {
            update_post_meta($post_id, '_price_massage', $_POST['sl-price_massage']);
        }

        
    }

    add_action('save_post', 'sh_save_postdata');