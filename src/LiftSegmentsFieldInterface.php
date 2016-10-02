<?php

/**
 * @file
 * Contains \Drupal\acquia_lift_views\LiftSegmentsFieldInterface.
 */

namespace Drupal\acquia_lift_views;


/**
 * Provides an interface for managing the Lift Field Segments.
 *
 * @ingroup asset
 */
interface LiftSegmentsFieldInterface {

  /**
   * Connect through the API and retrieve the latest list of segments.
   *
   * @param $reset
   *   boolean
   *
   * @return array
   *   Array of segments with the id as the key.
   */
  public function getNewSegments($reset = TRUE);

  /**
   * Get a list of the old/current segments assigned to the field in the DB.
   *
   * @return array
   *   Array of segments with the id as the key.
   */
  public function getOldSegments();

  /**
   * Compare the new and old segments, and return an array of deleted segments
   *
   * @return array
   *   Array of segments with the id as the key.
   */
  public function getDeletedSegments();

  /**
   * Find any entities with a field reference to a now deleted segment, and change
   *   it to match the global deleted segment option (eg. "--DELETED--")
   *
   * @return boolean
   *   True is successful, false with exception if not.
   */
  public function updateDeletedSegments();

  /**
   * Update the saved field options with the new list of segments.
   *
   * @return boolean
   *   True is successful, false with exception if not.
   */
  public function updateSegmentFieldOptions();

}


