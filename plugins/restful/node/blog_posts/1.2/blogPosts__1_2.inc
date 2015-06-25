<?php

$plugin = array(
  'label' => t('Blog Posts'),
  'resource' => 'blogposts',
  'name' => 'blogPosts__1_2',
  'entity_type' => 'node',
  'bundle' => 'blog_post',
  'description' => t('Fourword blog posts in HAL format'),
  'class' => 'RestfulFourwordBlogPostsResource__1_2',
  'authentication_types' => TRUE,
  'authentication_optional' => TRUE,
  'minor_version' => 2
);
