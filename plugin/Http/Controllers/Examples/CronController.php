<?php

namespace WPKirk\Http\Controllers\Examples;

use WPKirk\Http\Controllers\Controller;

if (!defined('ABSPATH')) {
  exit();
}

class CronController extends Controller
{
  public function index()
  {
    return WPKirk()
      ->view('examples.cron')
      ->withAdminStyle('prism')
      ->withAdminScript('prism')
      ->withAdminStyle('wp-kirk-common');
  }
}
