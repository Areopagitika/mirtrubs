<?php
$arUrlRewrite=array (
  10 => 
  array (
    'CONDITION' => '#^/fitingi/fitingi-elektrosvarnyie/([\\w,-]+)/([^/]*)#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => 'bitrix:catalog.element',
    'PATH' => '/fitingi/fitingi-elektrosvarnyie/detail.php',
    'SORT' => 100,
  ),
  11 => 
  array (
    'CONDITION' => '#^/fitingi/(.+?)/(.+?)/\\??(.*)#',
    'RULE' => 'SECTION_CODE_PATH=$1&SMART_FILTER_PATH=$2&$3',
    'ID' => 'bitrix:catalog.smart.filter',
    'PATH' => '/fitingi/fitingi-elektrosvarnyie/index.php',
    'SORT' => 100,
  ),
  7 => 
  array (
    'CONDITION' => '#^/svarochnoe-oborudovanie/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/svarochnoe-oborudovanie/index.php',
    'SORT' => 100,
  ),
  8 => 
  array (
    'CONDITION' => '#^/polietilenovie-trubi/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/polietilenovie-trubi/index.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^/kontakti/filialyi/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/kontakti/filialyi/index.php',
    'SORT' => 100,
  ),
  6 => 
  array (
    'CONDITION' => '#^/kontakti/dileryi/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/kontakti/dileryi/index.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/o-kompanii/foto/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/o-kompanii/foto/index.php',
    'SORT' => 100,
  ),
  9 => 
  array (
    'CONDITION' => '#^/trubyi-mirtekt/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/trubyi-mirtekt/index.php',
    'SORT' => 100,
  ),
  3 => 
  array (
    'CONDITION' => '#^/vakansii/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/vakansii/index.php',
    'SORT' => 100,
  ),
  2 => 
  array (
    'CONDITION' => '#^/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/news/index.php',
    'SORT' => 100,
  ),
);
