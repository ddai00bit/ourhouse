<?php
$_huxing = array (
  'kid' => 'huxing',
  'pid' => 'docs',
  'title' => '户型图',
  'enable' => '1',
  'etab' => '0',
  'deep' => '1',
  'cfgs' => 'parts=1',
  'f' => 
  array (
    'lpid' => 
    array (
      'kid' => 'lpid',
      'title' => '关联楼盘',
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
    'aflag' => 
    array (
      'kid' => 'aflag',
      'title' => '标记',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '12',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '12',
      'fmsize' => '',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'title' => 
    array (
      'kid' => 'title',
      'title' => '户型编号',
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
    'hxroom' => 
    array (
      'kid' => 'hxroom',
      'title' => '居室',
      'etab' => '0',
      'type' => 'hidden',
      'dbtype' => 'int',
      'dblen' => '12',
      'dbdef' => '0',
      'vreg' => 'n+i',
      'vtip' => '',
      'vmax' => '12',
      'fmsize' => '',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'hxs' => 
    array (
      'kid' => 'hxs',
      'title' => '房屋户型',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '24',
      'dbdef' => '1室1厅1卫1厨1阳',
      'vreg' => 'tit:1-24',
      'vtip' => '如:3室2厅1卫1厨1阳',
      'vmax' => '24',
      'fmsize' => '240',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'mjout' => 
    array (
      'kid' => 'mjout',
      'title' => '建筑面积',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'int',
      'dblen' => '12',
      'dbdef' => '0',
      'vreg' => 'n+i',
      'vtip' => '㎡',
      'vmax' => '12',
      'fmsize' => '90',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'mjin' => 
    array (
      'kid' => 'mjin',
      'title' => '套内',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'int',
      'dblen' => '12',
      'dbdef' => '0',
      'vreg' => 'n+i',
      'vtip' => '㎡',
      'vmax' => '12',
      'fmsize' => '90',
      'fmline' => '0',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'price' => 
    array (
      'kid' => 'price',
      'title' => '参考均价',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'int',
      'dblen' => '12',
      'dbdef' => '0',
      'vreg' => 'n+i',
      'vtip' => '单位：元/㎡',
      'vmax' => '12',
      'fmsize' => '90',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'pall' => 
    array (
      'kid' => 'pall',
      'title' => '总价',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'float',
      'dblen' => '12',
      'dbdef' => '0',
      'vreg' => 'n+d',
      'vtip' => '单位：万元',
      'vmax' => '12',
      'fmsize' => '90',
      'fmline' => '0',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'sales' => 
    array (
      'kid' => 'sales',
      'title' => '销售状态',
      'etab' => '0',
      'type' => 'select',
      'dbtype' => 'varchar',
      'dblen' => '12',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '12',
      'fmsize' => '90',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '1=待售
2=看房中
3=预订中
4=已售
',
    ),
    'cxtype' => 
    array (
      'kid' => 'cxtype',
      'title' => '房屋朝向',
      'etab' => '0',
      'type' => 'select',
      'dbtype' => 'varchar',
      'dblen' => '12',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '12',
      'fmsize' => '90',
      'fmline' => '0',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => 'fang.cx',
    ),
    'sotags' => 
    array (
      'kid' => 'sotags',
      'title' => '特色标签',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '48',
      'dbdef' => '',
      'vreg' => 'nul:',
      'vtip' => '',
      'vmax' => '48',
      'fmsize' => '420',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
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
      'vreg' => 'nul:fix:image',
      'vtip' => 'gif/jpg/jpeg/png格式.',
      'vmax' => '255',
      'fmsize' => '320',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'remark' => 
    array (
      'kid' => 'remark',
      'title' => '户型解读',
      'etab' => '0',
      'type' => 'text',
      'dbtype' => 'text',
      'dblen' => '0',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '0',
      'fmsize' => '420x5',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
  ),
  'i' => 
  array (
    'h1012' => 
    array (
      'kid' => 'h1012',
      'pid' => '0',
      'title' => '普通',
      'deep' => '1',
      'frame' => '0',
      'char' => 'P',
      'cfgs' => '',
    ),
    'h1016' => 
    array (
      'kid' => 'h1016',
      'pid' => '0',
      'title' => '主力',
      'deep' => '1',
      'frame' => '0',
      'char' => 'Z',
      'cfgs' => '',
    ),
    'h1018' => 
    array (
      'kid' => 'h1018',
      'pid' => '0',
      'title' => '推荐',
      'deep' => '1',
      'frame' => '0',
      'char' => 'T',
      'cfgs' => '',
    ),
  ),
);
?>