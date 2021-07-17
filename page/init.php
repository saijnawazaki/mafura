<?php
define('DEFAULT_COLOR_PATTERN', array(
  'primary' => 'primary',
  'primary-lighten' => 'primary-lighten',
  'primary-darken' => 'primary-darken',

  'secondary' => 'secondary',
  'secondary-lighten' => 'secondary-lighten',
  'secondary-darken' => 'secondary-darken',

  'success' => 'success',
  'success-lighten' => 'success-lighten',
  'success-darken' => 'success-darken',

  'danger' => 'danger',
  'danger-lighten' => 'danger-lighten',
  'danger-darken' => 'danger-darken',

  'warning' => 'warning',
  'warning-lighten' => 'warning-lighten',
  'warning-darken' => 'warning-darken',

  'info' => 'info',
  'info-lighten' => 'info-lighten',
  'info-darken' => 'info-darken',

  'light' => 'light',
  'light-lighten' => 'light-lighten',
  'light-darken' => 'light-darken',

  'dark' => 'dark',
  'dark-lighten' => 'dark-lighten',
  'dark-darken' => 'dark-darken',

  'muted' => 'muted',
  'black' => 'black',
  'white' => 'white',
));

function codeBlock($string) {
  return '<code><pre class="bg-light p-3">'.htmlentities($string).'</pre></code>';
}

function codePreview($string) {
  return '<div class="border-1 p-3 bc-light-darken mb-4">'.$string.'</div>';
}
