<div>
    <div class="container">
        <div class="row">
            <br/>
            <div class="col text-center">
                <h2><?php _e('Counter','welearner'); ?></h2>
                <p><?php _e('counter to count up to a target number','welearner'); ?></p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col">
                <div class="counter">
                    <i class="fa fa-code fa-2x"></i>
                    <h2 class="timer count-title count-number" data-to="<?php echo welearner_theme_panel_value('number1', '#'); ?>" data-speed="<?php echo welearner_theme_panel_value('speed', '#'); ?>"></h2>
                    <p class="count-text "><?php echo welearner_theme_panel_value('text1', '#'); ?></p>
                </div>
            </div>

        </div>
    </div>
</div>