<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$GLOBALS['VhsAssets'] = array();
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_fe.php']['contentPostProc-all'][] = 'EXT:vhs/Classes/ViewHelpers/AssetViewHelper.php:Tx_Vhs_ViewHelpers_AssetViewHelper->buildAll';
