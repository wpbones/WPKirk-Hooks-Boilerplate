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
    <?php wpkirk_section(__('Overview', 'wp-kirk')); ?>

    <p><?php _e('The hooks are PHP files that are automatically loaded into the folder:', 'wp-kirk'); ?></p>

    <?php wpkirk_code("/plugin/hooks", false, 'sh'); ?>

    <p><?php _e('These can be functions, classes, anything.', 'wp-kirk'); ?></p>

    <!-- ----------------------------------------------------- -->
    <?php wpkirk_section(__('Basic Usage', 'wp-kirk')); ?>

    <p><?php _e('This is an example of how to use hooks in your plugin.', 'wp-kirk'); ?></p>

    <p><?php _e('In this example, you will find a file named', 'wp-kirk'); ?></p>

    <?php wpkirk_code("/plugin/hooks/my-first-hooks.php", false, 'sh'); ?>

    <p><?php _e('with the following content:', 'wp-kirk'); ?></p>

    <?php wpkirk_code('@/plugin/hooks/my-first-hooks.php', false, 'php'); ?>

    <p>
      <?php wpkirk_code("my_hooks();", true, 'php'); ?>
    </p>

    <p><?php _e('Try to modify the file', 'wp-kirk'); ?></p>

    <?php wpkirk_code("/plugin/hooks/my-first-hooks.php", false, 'sh'); ?>

    <!-- ----------------------------------------------------- -->
    <?php wpkirk_section(__('Advanced Usage', 'wp-kirk')); ?>

    <p><?php wpkirk_md(__("Another interesting example is in `/plugin/hooks/use-option.php`", 'wp-kirk')); ?></p>

    <?php wpkirk_code('@/plugin/hooks/use-option.php', false, 'php'); ?>

    <p><?php wpkirk_md(__("and then use", 'wp-kirk')); ?></p>

    <?php wpkirk_code("[\$value, \$setValue] = useOption('hello', 'default');
echo \$value;", true, 'php'); ?>

    <?php wpkirk_code("[\$value, \$setValue] = useOption('siteurl', 'default');
\$value = $setValue(time());
echo \$value;", true, 'php'); ?>

    <?php delete_option('test') ?>

  </div>

  <?php wpkirk_toc('Hooks') ?>

</div>