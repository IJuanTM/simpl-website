<?php

namespace app\Pages;

/**
 * Page specific code goes here, look at it as a controller for the page
 */
class DownloadPage
{
    public $releases = [
        [
            'version' => '1.0.0',
            'date' => '2023-09-18',
            'notes' => 'Initial release',
            'url' => 'simpl_1.0.0_2023-09-18.zip',
            'add-ons-url' => 'simpl_add-ons_1.0.0_2023-09-18.zip'
        ],
        [
            'version' => '1.1.1',
            'date' => '2023-12-20',
            'notes' => 'Fixed small issues and added remember me functionality',
            'url' => 'simpl_1.1.1_2023-12-20.zip',
            'add-ons-url' => 'simpl_add-ons_1.1.1_2023-12-20.zip'
        ],
        [
            'version' => '1.2.0',
            'date' => '2024-01-29',
            'notes' => 'Added .env support and fixed some bugs',
            'url' => 'simpl_1.2.0_2024-01-29.zip',
            'add-ons-url' => 'simpl_add-ons_1.2.0_2024-01-29.zip'
        ],
        [
            'version' => '1.3.0',
            'date' => '2024-06-19',
            'notes' => 'Switched to TypeScript and updated sample database file',
            'url' => 'simpl_1.3.0_2024-06-19.zip',
            'add-ons-url' => 'simpl_add-ons_1.3.0_2024-06-19.zip'
        ],
        [
            'version' => '1.4.0',
            'date' => '2025-10-04',
            'notes' => 'Big update with new UI and rewritten core functionalities and improvements to the auth add-on',
            'url' => 'simpl_1.4.0_2025-10-04.zip',
            'add-ons-url' => 'simpl_add-ons_1.4.0_2025-10-04.zip'
        ]
    ];
}
