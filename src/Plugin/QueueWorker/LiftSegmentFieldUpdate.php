<?php
/**
 * @file
 * Contains \Drupal\acquia_lift_views\Plugin\QueueWorker\LiftSegmentFieldUpdate.
 */
namespace Drupal\acquia_lift_views\Plugin\QueueWorker;
use Drupal\Core\Queue\QueueWorkerBase;
use Drupal\acquia_lift_views\LiftSegmentsFieldInterface
/**
 * Processes Tasks for Acquia Lift Views integration.
 *
 * @QueueWorker(
 *   id = "lift_segment_field_update",
 *   title = @Translation("Lift Segment Field Update"),
 *   cron = {"time" = 60}
 * )
 */
class LiftSegmentFieldUpdate extends QueueWorkerBase {
  /**
   * {@inheritdoc}
   */
  public function processItem($process) {
    if ($process) {
      $lift_segments = LiftSegmentsFieldInterface::updateSegmentFieldOptions();
    }
  }
}
