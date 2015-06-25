<?php

/**
 * @file
 * Contains RestfulExampleArticlesResource__1_6.
 */

class RestfulFourwordBlogPostsResource__1_2 extends RestfulEntityBaseNode {

  /**
   * Overrides RestfulExampleArticlesResource::publicFieldsInfo().
   */
  public function publicFieldsInfo() {
    $public_fields = parent::publicFieldsInfo();

    $public_fields['lead_image'] = array(
      'property' => 'field_lead_image',
      'process_callbacks' => array(
        array($this, 'fourwordImageProcess'),
      ),
      'image_styles' => array('thumbnail', 'medium', 'large'),
    );

    $public_fields['categories'] = array(
      'property' => 'field_blog_categories_term_tree',
      'resource' => array(
        'blog_categories' => 'categories',
      ),
    );

    $public_fields['body'] = array(
      'property' => 'body',
      'sub_property' => 'value',
    );

    return $public_fields;
  }

  public function defaultSortInfo() {
    // Sort by 'id' in descending order.
    return array('id' => 'DESC');
  }
/**
 * Process callback, Remove Drupal specific items from the image array.
 *
 * @param array $value
 *   The image array.
 *
 * @return array
 *   A cleaned image array.
 */
protected function fourwordImageProcess($value) {

  return array(
    'id' => $value['fid'],
    'self' => file_create_url($value['uri']),
    'filemime' => $value['filemime'],
    'filesize' => $value['filesize'],
    'width' => $value['width'],
    'height' => $value['height'],
    'styles' => $value['image_styles'],
  );
}
}
