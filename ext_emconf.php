<?php

/*********************************************************************
* Extension configuration file for ext "realurl".
*
* Generated by ext 16-03-2015 08:46 UTC
*
* https://github.com/t3elmar/Ext
*********************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'RealURL: speaking paths for TYPO3',
  'description' => 'Creates nice looking URLs for TYPO3 pages: converts http://example.com/index.phpid=12345&L=2 to http://example.com/path/to/your/page/. Please, ask for free support in TYPO3 mailing lists or contact the maintainer for paid support.',
  'category' => 'fe',
  'shy' => 0,
  'dependencies' => '',
  'conflicts' => 'cooluri,simulatestatic',
  'priority' => '',
  'loadOrder' => '',
  'module' => '',
  'state' => 'stable',
  'internal' => 0,
  'uploadfolder' => 0,
  'createDirs' => '',
  'modify_tables' => 'pages,sys_domain,pages_language_overlay,sys_template',
  'clearCacheOnLoad' => 1,
  'lockType' => '',
  'author' => 'Dmitry Dulepov',
  'author_email' => 'dmitry.dulepov@gmail.com',
  'author_company' => '',
  'CGLcompliance' => '',
  'CGLcompliance_note' => '',
  'version' => '1.13.5',
  '_md5_values_when_last_written' => 'a:19:{s:9:"ChangeLog";s:4:"3408";s:10:"_.htaccess";s:4:"9ab3";s:20:"class.ext_update.php";s:4:"9794";s:20:"class.tx_realurl.php";s:4:"0cea";s:29:"class.tx_realurl_advanced.php";s:4:"f387";s:32:"class.tx_realurl_autoconfgen.php";s:4:"f227";s:28:"class.tx_realurl_tcemain.php";s:4:"2983";s:16:"ext_autoload.php";s:4:"a6ff";s:21:"ext_conf_template.txt";s:4:"c890";s:12:"ext_icon.gif";s:4:"ea80";s:17:"ext_localconf.php";s:4:"e297";s:14:"ext_tables.php";s:4:"7182";s:14:"ext_tables.sql";s:4:"150c";s:17:"locallang_csh.xml";s:4:"369d";s:16:"locallang_db.xml";s:4:"584a";s:14:"doc/manual.sxw";s:4:"3b3d";s:38:"modfunc1/class.tx_realurl_modfunc1.php";s:4:"d3a6";s:41:"modfunc1/class.tx_realurl_pagebrowser.php";s:4:"60b1";s:22:"modfunc1/locallang.xml";s:4:"7e4f";}',
  'constraints' =>
  array (
    'depends' =>
    array (
      'php' => '5.3.2-5.999.999',
      'typo3' => '4.5.40-7.9.999',
      'lowlevel' => '1.0.0-100.0.0',
    ),
    'conflicts' =>
    array (
      'cooluri' => '',
      'simulatestatic' => '',
    ),
    'suggests' =>
    array (
      'static_info_tables' => '2.0.2-',
    ),
  ),
  'suggests' =>
  array (
  ),
  'user' => 'dmitry',
  'comment' => 'TYPO3 7.6.0 compatibility',
);

?>
