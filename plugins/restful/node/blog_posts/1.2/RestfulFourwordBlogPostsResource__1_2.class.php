<?php

/**
 * @file
 * Contains RestfulFourwordBlogPostsResource__1_2.
 */

class RestfulFourwordBlogPostsResource__1_2 extends RestfulEntityBaseNode {

  /**
   * Overrides RestfulExampleArticlesResource::publicFieldsInfo().
   */
  public function publicFieldsInfo() {
    $public_fields = parent::publicFieldsInfo();

    $public_fields['categories'] = array(
      'property' => 'field_blog_categories_term_tree',
      'resource' => array(
        'blog_categories' => 'blog_categories',
      ),
    );

    $public_fields['body'] = array(
      'property' => 'body',
      'sub_property' => 'value',
    );

    return $public_fields;
  }

}
