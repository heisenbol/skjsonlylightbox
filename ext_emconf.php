<?php
$EM_CONF[$_EXTKEY] = array(
  'title' => 'JS only Lightbox GLightbox',
  'description' => 'Provides the pure Javascript GLightbox for text with image and tx_news. Based on jn_lighterbox',
  'category' => 'plugin',
  'author' => 'Stefanos Karasavvidis',
  'author_email' => 'sk@karasavvidis.gr',
  'state' => 'beta',
  'uploadfolder' => false,
  'createDirs' => '',
  'version' => '0.1.0',
  'constraints' => [
    'depends' => [
        'typo3' => '9.5.0-10.9.99',
        'fluid_styled_content' => '9.5.0-10.9.99'
    ],
    'conflicts' => [],
    'suggests' => []
  ],
  'clearCacheOnLoad' => true
);
