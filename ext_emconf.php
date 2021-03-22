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

$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 v10 Site Package',
    'description' => 'TYPO3 v10 Site Package (frontend theme)',
    'category' => 'templates',
    'author' => 'Michael Schams',
    'author_email' => 'typo3@2020.schams.net',
    'author_company' => 'schams.net',
    'version' => '10.4.4',
    'state' => 'beta',
    'constraints' => [
        'depends' => [
            'typo3' => '10.0.0-10.4.99',
            'fluid_styled_content' => '10.0.0-10.4.99'
        ],
        'conflicts' => [
        ],
    ],
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1
];
