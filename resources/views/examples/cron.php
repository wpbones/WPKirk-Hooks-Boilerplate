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

  <h1 id="model">Cron Schedule Example</h1>

  <div class="wp-kirk-toc-content">

    <!-- ----------------------------------------------------- -->
    <?php wpkirk_section('schedule-provider', __('Schedule Provider', 'wp-kirk')); ?>

    <p>

    </p>


  </div>

  <?php wpkirk_toc() ?>

</div>