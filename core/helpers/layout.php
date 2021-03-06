<?php

/**
 * Layout helper
 *
 * Crystallized layout generator.
 */

defined('PATH') or exit('No direct script access allowed');

/*
 * Layout generator
 *
 * `$layout`      => layout name
 * `$data`        => data file name
 * `$page_title`  => [optional] page title
 */

function layout($layout, $data, $page_title = '') {
  foreach (glob(LAYOUTS . "/$layout/i.*.php") as $item) {
    require_once $item;
  }

  require_once LAYOUTS . "/$layout/header.php";
  require_once DATA . "/$data.php";
  require_once LAYOUTS . "/$layout/footer.php";
}
