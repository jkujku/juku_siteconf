<?php

defined('TYPO3_MODE') || die('Access denied.');

// Custom Routing Aspects Mapper
$GLOBALS['TYPO3_CONF_VARS']['SYS']['routing']['aspects']['MyValueMapper'] = \DelphiIMM\JukuSiteconf\Routing\Aspect\MyValueMapper::class;


\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'DelphiIMM.' . $_EXTKEY,
	'Myplugin',
	array(
		'My' => 'filter',

	),
	// non-cacheable actions
	array(
		'My' => 'filter',
	)
);