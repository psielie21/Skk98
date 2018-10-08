<?php
return [
    'BE' => [
        'debug' => false,
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => '$P$CbYRPQAxP0MXVgGYPWGxaow/2l.SkK/',
        'loginSecurityLevel' => 'rsa',
    ],
    'DB' => [
        'database' => 'db720986183',
        'host' => 'db720986183.db.1and1.com',
        'password' => 'Roflkopter123.',
        'port' => 3306,
        'username' => 'dbo720986183',
    ],
    'EXT' => [
        'extConf' => [
            'fluidcontent' => 'a:0:{}',
            'fluidpages' => 'a:3:{s:8:"autoload";s:1:"1";s:8:"doktypes";s:0:"";s:33:"pagesLanguageConfigurationOverlay";s:1:"0";}',
            'flux' => 'a:4:{s:9:"debugMode";s:1:"0";s:7:"compact";s:1:"0";s:17:"listNestedContent";s:1:"0";s:12:"handleErrors";s:1:"0";}',
            'realurl' => 'a:6:{s:10:"configFile";s:26:"typo3conf/realurl_conf.php";s:14:"enableAutoConf";s:1:"1";s:14:"autoConfFormat";s:1:"0";s:17:"segTitleFieldList";s:0:"";s:12:"enableDevLog";s:1:"0";s:10:"moduleIcon";s:1:"0";}',
            'rsaauth' => 'a:1:{s:18:"temporaryDirectory";s:0:"";}',
            'saltedpasswords' => 'a:2:{s:3:"BE.";a:4:{s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\PhpassSalt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}s:3:"FE.";a:5:{s:7:"enabled";i:1;s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\PhpassSalt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}}',
            'scheduler' => 'a:4:{s:11:"maxLifetime";s:4:"1440";s:11:"enableBELog";s:1:"1";s:15:"showSampleTasks";s:1:"1";s:11:"useAtdaemon";s:1:"0";}',
            'skk_provider' => 'a:0:{}',
            'vhs' => 'a:1:{s:20:"disableAssetHandling";s:1:"0";}',
        ],
    ],
    'EXTCONF' => [
        'lang' => [
            'availableLanguages' => [
                'de',
            ],
        ],
    ],
    'FE' => [
        'cHashIncludePageId' => true,
        'debug' => false,
        'loginSecurityLevel' => 'rsa',
    ],
    'GFX' => [
        'colorspace' => 'sRGB',
        'im' => 1,
        'im_mask_temp_ext_gif' => 1,
        'im_path' => '/usr/bin/',
        'im_path_lzw' => '/usr/bin/',
        'im_v5effects' => 1,
        'im_version_5' => 'im6',
        'image_processing' => 1,
        'jpg_quality' => '80',
    ],
    'INSTALL' => [
        'wizardDone' => [
            'TYPO3\CMS\Install\Updates\AccessRightParametersUpdate' => 1,
            'TYPO3\CMS\Install\Updates\BackendUserStartModuleUpdate' => 1,
            'TYPO3\CMS\Install\Updates\Compatibility6ExtractionUpdate' => 1,
            'TYPO3\CMS\Install\Updates\ContentTypesToTextMediaUpdate' => 1,
            'TYPO3\CMS\Install\Updates\FileListInAccessModuleListUpdate' => 1,
            'TYPO3\CMS\Install\Updates\FileListIsStartModuleUpdate' => 1,
            'TYPO3\CMS\Install\Updates\FilesReplacePermissionUpdate' => 1,
            'TYPO3\CMS\Install\Updates\LanguageIsoCodeUpdate' => 1,
            'TYPO3\CMS\Install\Updates\MediaceExtractionUpdate' => 1,
            'TYPO3\CMS\Install\Updates\MigrateMediaToAssetsForTextMediaCe' => 1,
            'TYPO3\CMS\Install\Updates\MigrateShortcutUrlsAgainUpdate' => 1,
            'TYPO3\CMS\Install\Updates\OpenidExtractionUpdate' => 1,
            'TYPO3\CMS\Install\Updates\PageShortcutParentUpdate' => 1,
            'TYPO3\CMS\Install\Updates\ProcessedFileChecksumUpdate' => 1,
            'TYPO3\CMS\Install\Updates\TableFlexFormToTtContentFieldsUpdate' => 1,
            'TYPO3\CMS\Install\Updates\WorkspacesNotificationSettingsUpdate' => 1,
            'TYPO3\CMS\Rtehtmlarea\Hook\Install\DeprecatedRteProperties' => 1,
            'TYPO3\CMS\Rtehtmlarea\Hook\Install\RteAcronymButtonRenamedToAbbreviation' => 1,
        ],
    ],
    'MAIL' => [
        'transport_sendmail_command' => '/usr/sbin/sendmail -t -i',
    ],
    'SYS' => [
        'caching' => [
            'cacheConfigurations' => [
                'extbase_object' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'frontend' => 'TYPO3\\CMS\\Core\\Cache\\Frontend\\VariableFrontend',
                    'groups' => [
                        'system',
                    ],
                    'options' => [
                        'defaultLifetime' => 0,
                    ],
                ],
            ],
        ],
        'clearCacheSystem' => false,
        'devIPmask' => '',
        'displayErrors' => 0,
        'enableDeprecationLog' => false,
        'encryptionKey' => 'a68861c8c7dff6b4752ddf2f6ed5018afd6aadc1f0905ec4065df4303f74b2b3d22ffd95d4a89cfb3a674afb10c219d3',
        'exceptionalErrors' => 20480,
        'isInitialDatabaseImportDone' => true,
        'isInitialInstallationInProgress' => false,
        'sitename' => 'Skk 98 Poing Kegeln',
        'sqlDebug' => 0,
        'systemLogLevel' => 2,
        't3lib_cs_convMethod' => 'mbstring',
        't3lib_cs_utils' => 'mbstring',
    ],
];
