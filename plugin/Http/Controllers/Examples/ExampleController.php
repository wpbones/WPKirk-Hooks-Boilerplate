<?php

namespace WPKirk\Http\Controllers\Examples;

use WPKirk\Http\Controllers\Controller;

if (!defined('ABSPATH')) {
  exit();
}

class ExampleController extends Controller
{
  public function hooks()
  {
    return WPKirk()
      ->view('examples.hooks')
      ->withAdminStyle('prism')
      ->withAdminScript('prism')
      ->withAdminStyle('wp-kirk-common');
  }

  public function modules()
  {
    return WPKirk()
      ->view('examples.modules')
      ->withAdminStyle('prism')
      ->withAdminScript('prism')
      ->withAdminStyle('wp-kirk-common');
  }
}
