<?php

function useOption($name, $default = '')
{
  $value = get_option($name, $default);

  return [$value, function ($v) use ($name) {
    update_option($name, $v);
    return $v;
  }];
}
