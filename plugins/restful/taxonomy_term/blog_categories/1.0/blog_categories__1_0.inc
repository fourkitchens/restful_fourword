<?php

$plugin = array(
  'label' => t('Blog Categories'),
  'resource' => 'blog_categories',
  'name' => 'blog_categories__1_0',
  'entity_type' => 'taxonomy_term',
  'bundle' => 'blog_categories',
  'description' => t('Export the "Blog Categories" taxonomy term.'),
  'class' => 'RestfulEntityTaxonomyTermBlog_Categories',
  'authentication_types' => TRUE,
  'authentication_optional' => TRUE,
);
