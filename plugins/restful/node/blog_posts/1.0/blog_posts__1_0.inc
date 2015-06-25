<?php
$plugin = array(
  'label' => t('Blog Posts'),
  'resource' => 'articles',
  'name' => 'blog_posts__1_0',
  'entity_type' => 'node',
  'bundle' => 'blog_post',
  'description' => t('Fourword blog posts using view modes'),
  'class' => 'RestfulEntityBaseNode',
  'authentication_types' => TRUE,
  'authentication_optional' => TRUE,
  'view_mode' => array(
    'name' => 'default',
    'field_map' => array(
      'body' => 'body',
      'field_blog_categories_term_tree' => 'categories',
      'field_lead_image' => 'lead_image',
    ),
  ),
);
