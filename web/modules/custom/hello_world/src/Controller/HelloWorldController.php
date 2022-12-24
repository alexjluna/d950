<?php

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller for salutation message
 */
class HelloWorldController extends ControllerBase {

  /**
   * Hello World
   *
   * @return array
   *  our message
   */
  public function helloWorld() {
    return [
      '#markup' => $this->t('Hello World'),
    ];
  }
}
