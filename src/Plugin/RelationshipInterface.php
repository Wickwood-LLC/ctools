<?php

/**
 * @file
 * Contains \Drupal\ctools\Plugin\RelationshipInterface.
 */

namespace Drupal\ctools\Plugin;

use Drupal\Component\Plugin\DerivativeInspectionInterface;
use Drupal\Core\Plugin\ContextAwarePluginInterface;

/**
 * Defines an interface for Relationship plugins.
 */
interface RelationshipInterface extends ContextAwarePluginInterface, DerivativeInspectionInterface {

  /**
   * Generates a context based on this plugin's configuration.
   *
   * @return \Drupal\Core\Plugin\Context\ContextInterface
   */
  public function getRelationship();

  /**
   * The name of the property used to get this relationship.
   *
   * @return string
   */
  public function getName();

  /**
   * Returns the literal value of the relationship instead of the full context.
   *
   * @return mixed
   */
  public function getRelationshipValue();
}