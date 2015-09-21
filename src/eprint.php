<?php
/*
 * author    zzengineer <contact@zzengineer.com>
 * date      2015-09-21
 * github    https://github.com/zzengineer/eprint
 * licencse  MIT http://opensource.org/licenses/MIT
 * version   0.9
 *
 * eprint.php -- Kernighan style eprint utility functions for php
 */
 
define('PIDPAD_SIZE',5);

/* print an error to stderr and exit */
function eprint($msg) {
  uprint($msg,'error');
  exit(2);
}

/* print a notice to stderr */
function nprint($msg) {
  uprint($msg,'notice');
}

/* print a warning to stderr */
function wprint($msg) {
  uprint($msg,'warning');
}

/* utility print */
function uprint($msg,$level) {
  $date = date("Y-m-d H:i:s");
  $file = basename(__FILE__, '.php');
  $pid  = str_pad(getmypid(),PIDPAD_SIZE,' ', STR_PAD_LEFT);
  $msg  = str_replace("\n", "\n\t", trim($msg));
  fwrite(STDERR, "$date $file [$pid] $level: $msg\n");
}
