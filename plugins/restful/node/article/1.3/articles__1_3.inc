<?php
$plugin = array(
  'label' => t('Articles'),
  'resource' => 'articles',
  'name' => 'articles__1_3',
  'entity_type' => 'node',
  'bundle' => 'article',
  'description' => t('Fourword blog posts using view modes'),
  'class' => 'RestfulFourwordArticlesResource__1_3',
  'authentication_types' => TRUE,
  'authentication_optional' => TRUE,
  'minor_version' => 3,
);
