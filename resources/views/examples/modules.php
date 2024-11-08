<!--
 |
 | In $plugin you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->
<?php



ob_start()
?>

<div class="wp-kirk wrap wp-kirk-sample">

  <div class="wp-kirk-toc-content">

    <!-- ----------------------------------------------------- -->

    <?php wpkirk_section(__('Modules', 'wp-kirk')); ?>

    <p><?php _e('Modules are similar to hooks, but unlike hooks, they must be explicitly loaded. Modules are also PHP files and must be located within the folder:', 'wp-kirk'); ?></p>

    <?php wpkirk_code("/plugin/modules", false, 'sh'); ?>

    <p><?php _e('To load the modules, you can use the function:', 'wp-kirk'); ?></p>

    <?php wpkirk_code("wpbones_modules('filename');", false, 'php'); ?>

    <p><?php wpkirk_md(__("In the `filename`, it is possible to omit the `.php` extension.", 'wp-kirk')); ?></p>

    <?php wpkirk_section(__('Basic Usage', 'wp-kirk')); ?>

    <p><?php wpkirk_md(__("For example, you can create in the `/plugin/modules/my-simple-function.php`", 'wp-kirk')); ?></p>

    <?php wpkirk_code('@/plugin/modules/my-simple-function.php', false, 'php'); ?>

    <p><?php wpkirk_md(__("and then use", 'wp-kirk')); ?></p>

    <?php wpkirk_code("wpbones_modules('my-simple-function');

my_simple_function();", true); ?>

    <!--   -->
    <?php wpkirk_section(__('Advanced Use Case', 'wp-kirk')); ?>

    <p><?php wpkirk_md(__("The modules can also be used for more interesting and advanced cases like the following.", 'wp-kirk')); ?></p>

    <p><?php wpkirk_md(__("For example, you can create in the `/plugin/modules/my-awesome-function.php`", 'wp-kirk')); ?></p>

    <?php wpkirk_code('@/plugin/modules/my-awesome-function.php', false, 'php'); ?>

    <?php wpkirk_code("\$func = wpbones_modules('my-awesome-function');

\$func();", true); ?>

    <!--   -->
    <h3><?php _e('If you like ReactJS', 'wp-kirk'); ?></h3>
    <p><?php wpkirk_md(__("Another interesting example is in `/plugin/modules/config.php`", 'wp-kirk')); ?></p>

    <?php wpkirk_code('@/plugin/modules/config.php', false, 'php'); ?>

    <?php wpkirk_code("\$config = wpbones_modules('config');
echo \$config['controller'];", true, 'php'); ?>

    <p><?php wpkirk_md(__("and also", 'wp-kirk')); ?></p>

    <?php wpkirk_code("['controller' => \$value] = wpbones_modules('config');
echo \$value;", true, 'php'); ?>

    <p><?php wpkirk_md(__("same for the function", 'wp-kirk')); ?></p>

    <?php wpkirk_code("['mul' => \$mul] = wpbones_modules('config');
echo \$mul(5,4);", true, 'php'); ?>

  </div>

  <?php wpkirk_toc('Modules') ?>

</div>