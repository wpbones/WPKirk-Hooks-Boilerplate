<?php

namespace WPKirk\Providers;

if (!defined('ABSPATH')) {
  exit();
}

use WPKirk\WPBones\Foundation\WordPressScheduleServiceProvider as ServiceProvider;

class ScheduleExampleProvider extends ServiceProvider
{

  protected $hook = 'schedule_example_event';

  protected $recurrence = 'twicedaily';

  public function boot()
  {
    // You may override this method to set the properties
    // $this->hook = 'schedule_example_event';
    // $this->recurrence = 'twicedaily';
  }

  /**
   * Run the scheduled event.
   *
   */
  public function run()
  {
    wpbones_logger()->info('Schedule example event triggered');
  }
}
