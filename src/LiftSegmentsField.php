<?php
/**
 * @file
 * Contains \Drupal\acquia_lift_views\LiftSegmentsField.
 */
namespace Drupal\acquia_lift_views;

use Drupal\Core\Field\FieldItemListInterface;

/**
 * Provides the functionality to process and update Lift Segments in a field list.
 */
class LiftSegmentsField implements LiftSegmentsFieldInterface {

  /**
   * @inheritdoc
   */
  public function getNewSegments($reset = FALSE) {
    // cache the result for 1 hour, unless reset is true
    // get LiftWeb site_id
    // connect to api and retrieve list of segments
    // see: http://docs.lift.acquia.com/datamanagement/#segments_get
    // return array('segment_id' => 'Segment Name');
  }

  /**
   * @inheritdoc
   */
  public function getOldSegments() {
    // some variation of FieldItemListInterface & getSetting('allowed_values')  ???
  }

  /**
   * @inheritdoc
   */
  public function getDeletedSegments() {
    $new = $this->getNewSegments();
    $old = $this->getOldSegments();
    $comparison = $this->compareSegments($old, $new);
    return $comparison['deleted'];
  }

  /**
   * @inheritdoc
   */
  public function updateDeletedSegments() {
    $deleted = $this->getDeletedSegments();
    // get the
    //insert stuff to swap deleted segments
  }

  /**
   * @inheritdoc
   */
  public function updateSegmentFieldOptions() {
    $this->updateDeletedSegments();
    $new = $this->getNewSegments();

    // Use FieldTypePluginManager to change allowed values?
  }

  /**
   * Compare the old/stored segments to the new ones, and return a mixed array of results.
   * @param $old
   * @param $new
   */
  protected function compareSegments($old, $new) {

  }
}
