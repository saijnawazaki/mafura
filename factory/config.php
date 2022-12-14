<?php
date_default_timezone_set('Asia/Jakarta');
define('APP_CSS_OUTPUT','../dist/mafura.css');
define('APP_CSS_INPUT','css');

$app_theme_color = array(
    'primary-lighter' => '#AECEFE',
    'primary-light' => '#5D9DFD',
    'primary' => '#0d6efd',
    'primary-dark' => '#024AB6',
    'primary-darker' => '#012965',

    'success-lighter' => '#BAF2D8',
    'success-light' => '#75E6B1',
    'success' => '#30D98A',
    'success-dark' => '#1D9A60',
    'success-darker' => '#105635',

    'warning-lighter' => '#FFEBAD',
    'warning-light' => '#FFD65C',
    'warning' => '#ffc107',
    'warning-dark' => '#B88A00',
    'warning-darker' => '#664D00',

    'danger-lighter' => '#F6CBCF',
    'danger-light' => '#EA8690',
    'danger' => '#dc3545',
    'danger-dark' => '#AD1F2D',
    'danger-darker' => '#68121B',

    'info-lighter' => '#B1EFFB',
    'info-light' => '#64DEF7',
    'info' => '#0dcaf0',
    'info-dark' => '#0993AE',
    'info-darker' => '#055261',

    'white' => '#ffffff',
    'white-dark' => '#D6D6D6',
    'white-darker' => '#ADADAD',

    'black-lighter' => '#525252',
    'black-light' => '#292929',
    'black' => '#000000',
);

$app_theme_size = array(
    '0' => '0',
    '1' => '0.1rem',
    '2' => '0.2rem',
    '3' => '0.3rem',
    '4' => '0.4rem',
    '5' => '0.5rem'
);

$app_theme_size_percent = array(
    '0' => '0',
    '1' => '20%',
    '2' => '30%',
    '3' => '50%',
    '4' => '80%',
    '5' => '100%'
);

$app_theme_size_percent_dec = array(
    '0' => '0',
    '1' => '0.2',
    '2' => '0.3',
    '3' => '0.5',
    '4' => '0.8',
    '5' => '1'
);

$app_theme_size_scale = array(
    '0' => '0',
    '1' => '1',
    '2' => '2',
    '3' => '3',
    '4' => '4',
    '5' => '1'
);

$app_theme_breakpoint = array(
    '0' => array('id' => ''),
    '576px' => array('id' => '-sm'),
    '768px' => array('id' => '-md'),
    '992px' => array('id' => '-lg'),
    '1200px' => array('id' => '-xl'),
    '1400px' => array('id' => '-xxl'),
);

$app_theme_z_index = array(
    'dropdown' => '1000',
    'sticky' => '1020',
    'fixed-menu' => '1025',
    'fixed' => '1030',
    'offcanvas-backdrop' => '1040',
    'offcanvas' => '1045',
    'modal-backdrop' => '1050',
    'modal' => '1055',
    'popover' => '1070',
    'tooltip' => '1080',
);

$app_theme_size_scale_grid = array(
    '-auto' => 'auto',
    '-1' => '8.33333333%',
    '-2' => '16.66666667%',
    '-3' => '25%',
    '-4' => '33.33333333%',
    '-5' => '41.66666667%',
    '-6' => '50%',
    '-7' => '58.33333333%',
    '-8' => '66.66666667%',
    '-9' => '75%',
    '-10' => '83.33333333%',
    '-11' => '91.66666667%',
    '-12' => '100%',
);


$app_theme_root = array(
    'text-color' => '#212529',
    'background-color' => '#ffffff',
    'link-color' => '#0d6efd',
    'link-color-hover' => '#0a58ca',
);