<?php

namespace Drupal\card_test\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\Core\Entity\EntityPublishedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Card entities.
 *
 * @ingroup card_test
 */
interface CardInterface extends ContentEntityInterface, EntityChangedInterface, EntityPublishedInterface, EntityOwnerInterface {

  /**
   * Add get/set methods for your configuration properties here.
   */

  /**
   * Gets the Card name.
   *
   * @return string
   *   Name of the Card.
   */
  public function getName();

  /**
   * Sets the Card name.
   *
   * @param string $name
   *   The Card name.
   *
   * @return \Drupal\card_test\Entity\CardInterface
   *   The called Card entity.
   */
  public function setName($name);

  /**
   * Gets the Card creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Card.
   */
  public function getCreatedTime();

  /**
   * Sets the Card creation timestamp.
   *
   * @param int $timestamp
   *   The Card creation timestamp.
   *
   * @return \Drupal\card_test\Entity\CardInterface
   *   The called Card entity.
   */
  public function setCreatedTime($timestamp);

}
