<?php
$EM_CONF[$_EXTKEY] = array(
    'title' => 'Web>Functions: Sort pages',
    'description' => 'A little utility to rearrange the sorting order of pages in the backend.',
    'category' => 'module',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'author' => 'Kasper Skaarhoj',
    'author_email' => 'kasperYYYY@typo3.com',
    'author_company' => 'Curby Soft Multimedia',
    'version' => '8.0.0',
    'constraints' => array(
        'depends' => array(
            'typo3' => '8.0.0-8.0.99',
            'func' => '8.0.0-8.0.99',
        ),
        'conflicts' => array(),
        'suggests' => array(),
    ),
);
