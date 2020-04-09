<?php
defined('TYPO3_MODE') || die();

call_user_func(function () {
    /**
     * Extension key
     */
    $extensionKey = 'juku_siteconf';

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        $extensionKey,
        'Myplugin',
        'My Example Plugin'
    );
});