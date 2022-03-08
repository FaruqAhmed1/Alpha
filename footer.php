<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php
                if (is_active_sidebar("sidebar-2")) {
                    dynamic_sidebar("sidebar-2");
                }

                ?>

            </div>
            <div class="col-md-6">
                <div class="footer">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footermenu',
                            'menu_id' => 'footermenucontainer',
                            'menu_class' => 'list-inline text-center',
                        )
                    )


                    ?>
                </div>

            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>

</html>