<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "realurl".
 *
 * Auto generated 25-01-2018 22:20
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Speaking URLs for TYPO3',
  'description' => 'Makes TYPO3 URLs search engine friendly. Donations are welcome to dmitry.dulepov@gmail.com. They help to support the extension!',
  'category' => 'services',
  'version' => '2.3.1',
  'state' => 'stable',
  'uploadfolder' => true,
  'createDirs' => '',
  'clearcacheonload' => true,
  'author' => 'Dmitry Dulepov',
  'author_email' => 'dmitry.dulepov@gmail.com',
  'author_company' => '',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '6.2.0-8.7.999',
      'php' => '5.4.0-7.1.999',
      'scheduler' => '6.2.0-8.7.999',
    ),
    'conflicts' => 
    array (
      'cooluri' => '',
      'simulatestatic' => '',
    ),
    'suggests' => 
    array (
    ),
  ),
);

