<?php

$plugin = array(
  'label' => t('Blog Posts'),
  'resource' => 'articles',
  'name' => 'blogPosts__1_1',
  'entity_type' => 'node',
  'bundle' => 'blog_post',
  'description' => t('Fourword blog posts in HAL format'),
  'class' => 'RestfulFourwordBlogPostsResource__1_1',
  'authentication_types' => TRUE,
  'authentication_optional' => TRUE,
  'minor_version' => 1
);
