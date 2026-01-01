<?php

namespace app\Pages;

class DownloadPage
{
    public $releases = [
        [
            'version' => '1.0.0',
            'date' => '2023-09-18',
            'notes' => 'Initial release',
            'has_download' => false
        ],
        [
            'version' => '1.1.1',
            'date' => '2023-12-20',
            'notes' => 'Fixed small issues and added remember me functionality',
            'has_download' => false
        ],
        [
            'version' => '1.2.0',
            'date' => '2024-01-29',
            'notes' => 'Added .env support and fixed some bugs',
            'has_download' => false
        ],
        [
            'version' => '1.3.0',
            'date' => '2024-06-19',
            'notes' => 'Switched to TypeScript and updated sample database file',
            'has_download' => false
        ],
        [
            'version' => '1.4.0',
            'date' => '2025-10-04',
            'notes' => 'Rewritten core controllers and improved the auth add-on, also redesigned the UI',
            'has_download' => false
        ],
        [
            'version' => '1.5.0',
            'date' => '2025-12-28',
            'notes' => 'Rewritten database class and improved logging functionality, also added npx tools for installation',
            'has_download' => false
        ],
        [
            'version' => '1.5.1',
            'date' => '2025-12-30',
            'notes' => 'Small update to match new npx tools needs',
            'has_download' => false
        ],
        [
            'version' => '1.6.0',
            'date' => '2025-12-30',
            'notes' => 'Bug fix and definitive version with npx tools support',
            'has_download' => true
        ],
        [
            'version' => '1.6.1',
            'date' => '2026-12-31',
            'notes' => 'Minor improvements and bug fixes',
            'has_download' => true
        ]
    ];
}
