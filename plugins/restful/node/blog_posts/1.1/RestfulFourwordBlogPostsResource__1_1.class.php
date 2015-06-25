<?php

/**
 * @file
 * Contains RestfulFourwordBlogPostsResource__1_1.
 */

class RestfulFourwordBlogPostsResource__1_1 extends RestfulEntityBaseNode {

  /**
   * Overrides RestfulExampleArticlesResource::publicFieldsInfo().
   */
  public function publicFieldsInfo() {
    $public_fields = parent::publicFieldsInfo();

    $public_fields['body'] = array(
      'property' => 'body',
      'sub_property' => 'value',
    );

    return $public_fields;
  }
}
