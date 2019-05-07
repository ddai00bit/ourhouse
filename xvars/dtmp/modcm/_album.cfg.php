<?php
$_album = array (
  'kid' => 'album',
  'pid' => 'docs',
  'title' => '相册',
  'enable' => '1',
  'etab' => '0',
  'deep' => '1',
  'cfgs' => 'parts=1',
  'f' => 
  array (
    'exid' => 
    array (
      'kid' => 'exid',
      'title' => '平台码',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '0',
      'vreg' => 'nul:',
      'vtip' => '',
      'vmax' => '48',
      'fmsize' => '240',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'lpid' => 
    array (
      'kid' => 'lpid',
      'title' => '关联模型',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '24',
      'dbdef' => '',
      'vreg' => 'nul:',
      'vtip' => '',
      'vmax' => '24',
      'fmsize' => 'house.1',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => 'pick',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'aflag' => 
    array (
      'kid' => 'aflag',
      'title' => '标记',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '12',
      'dbdef' => '',
      'vreg' => 'tit:0-6',
      'vtip' => '',
      'vmax' => '6',
      'fmsize' => '90',
      'fmline' => '0',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'title' => 
    array (
      'kid' => 'title',
      'title' => '图片标题',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => 'tit:2-60',
      'vtip' => '标题2-60字符',
      'vmax' => '60',
      'fmsize' => '360',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'color' => 
    array (
      'kid' => 'color',
      'title' => '标题颜色',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '12',
      'dbdef' => '',
      'vreg' => 'nul:str:4-7',
      'vtip' => '如:#FF00FF',
      'vmax' => '8',
      'fmsize' => '',
      'fmline' => '0',
      'fmtitle' => '0',
      'fmextra' => 'color',
      'fmexstr' => 'title',
      'cfgs' => '',
    ),
    'ndb_repeat' => 
    array (
      'kid' => 'ndb_repeat',
      'title' => '检查重复',
      'etab' => '0',
      'type' => 'repeat',
      'dbtype' => 'nodb',
      'dblen' => '0',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '0',
      'fmsize' => '',
      'fmline' => '0',
      'fmtitle' => '0',
      'fmextra' => 'repeat',
      'fmexstr' => '',
      'cfgs' => 'news,title',
    ),
    'mpic' => 
    array (
      'kid' => 'mpic',
      'title' => '缩略图',
      'etab' => '0',
      'type' => 'file',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => 'fix:uri',
      'vtip' => 'gif/jpg/jpeg/png格式.',
      'vmax' => '255',
      'fmsize' => '320',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
  ),
  'i' => 
  array (
    'a1012' => 
    array (
      'kid' => 'a1012',
      'pid' => '0',
      'title' => '户型图',
      'deep' => '1',
      'frame' => '0',
      'char' => 'H',
      'cfgs' => '',
    ),
    'a1016' => 
    array (
      'kid' => 'a1016',
      'pid' => '0',
      'title' => '室内图',
      'deep' => '1',
      'frame' => '0',
      'char' => 'S',
      'cfgs' => '',
    ),
    'a1018' => 
    array (
      'kid' => 'a1018',
      'pid' => '0',
      'title' => '小区图',
      'deep' => '1',
      'frame' => '0',
      'char' => 'X',
      'cfgs' => '',
    ),
    'a1020' => 
    array (
      'kid' => 'a1020',
      'pid' => '0',
      'title' => '周边图',
      'deep' => '1',
      'frame' => '0',
      'char' => 'Z',
      'cfgs' => '',
    ),
  ),
);
?>