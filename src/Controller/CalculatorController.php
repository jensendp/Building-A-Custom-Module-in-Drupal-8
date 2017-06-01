<?php

  namespace Drupal\calculator\Controller;

  class CalculatorController {

    public function add(int $first_digit, int $second_digit) {
      $sum = $first_digit + $second_digit;

      return array(
        '#title' => 'Sum',
        '#markup' => sprintf('The sum of <strong>%s</strong> and <strong>%s</strong> is <strong>%s</strong>', $first_digit, $second_digit, $sum)
      );
    }

    public function subtract(int $first_digit, int $second_digit) {
      $difference = $first_digit - $second_digit;

      return array(
        '#title' => 'Difference',
        '#markup' => sprintf('The difference of <strong>%s</strong> and <strong>%s</strong> is <strong>%s</strong>', $first_digit, $second_digit, $difference)
      );
    }

    public function multiply(int $first_digit, int $second_digit) {
      $product = $first_digit * $second_digit;

      return array(
        '#title' => 'Product',
        '#markup' => sprintf('The product of <strong>%s</strong> and <strong>%s</strong> is <strong>%s</strong>', $first_digit, $second_digit, $product)
      );
    }

    public function divide(int $first_digit, int $second_digit) {
      $quotient = $first_digit / $second_digit;

      return array(
        '#title' => 'Quotient',
        '#markup' => sprintf('The quotient of <strong>%s</strong> and <strong>%s</strong> is <strong>%s</strong>', $first_digit, $second_digit, $quotient)
      );
    }

  }

 ?>
