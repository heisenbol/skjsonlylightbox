<?php
$EM_CONF[$_EXTKEY] = array(
  'title' => 'JS only Lightbox GLightbox',
  'description' => 'Provides the pure Javascript GLightbox for text with image and tx_news. Based on jn_lighterbox',
  'category' => 'plugin',
  'author' => 'Stefanos Karasavvidis',
  'author_email' => 'sk@karasavvidis.gr',
  'state' => 'stable',
  'uploadfolder' => false,
  'createDirs' => '',
  'version' => '0.5.0',
  'constraints' => [
    'depends' => [
        'typo3' => '12.4.0-13.4.99',
        'fluid_styled_content' => '12.4.0-13.4.99'
    ],
    'conflicts' => [],
    'suggests' => []
  ],
  'clearCacheOnLoad' => true
);
