<?php

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code of
 * the TYPO3 source package.
 *
 * The TYPO3 project - inspiring people to share!
 */

defined('TYPO3_MODE') || die();

call_user_func(function () {
    $extensionKey = 'site_package';
    // Force loading the TypoScript configuration
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
        $extensionKey,
        'setup',
        "@import 'EXT:site_package/Configuration/TypoScript/setup.typoscript'"
    );
});
