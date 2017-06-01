<?php

  namespace Drupal\calculator\Form;

  use Drupal\Core\Form\FormBase;
  use Drupal\Core\Form\FormStateInterface;

  class CalculatorForm extends FormBase {

    public function getFormId() {
      return 'my_calculator';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {
      $form['first_digit'] = array(
        '#type' => 'textfield',
        '#title' => t('First Digit'),
        '#required' => TRUE
      );

      $form['operation'] = array(
        '#type' => 'select',
        '#title' => t('Select Operation'),
        '#options' => [
          'add' => t('Add'),
          'subtract' => t('Subtract'),
          'multiply' => t('Multiply'),
          'divide' => t('Divide')
        ],
        '#required' => TRUE
      );

      $form['second_digit'] = array(
        '#type' => 'textfield',
        '#title' => t('Second Digit'),
        '#required' => TRUE
      );

      $form['submit'] = array(
        '#type' => 'submit',
        '#value' => t('Submit'),
      );

      return $form;
    }

    public function validateForm(array &$form, FormStateInterface $form_state) {
      if(!is_numeric($form_state->getValue('first_digit'))) {
        $form_state->setErrorByName('first_digit', t('The first digit must be a valid numeric value'));
      }

      if(!is_numeric($form_state->getValue('second_digit'))) {
        $form_state->setErrorByName('second_digit', t('The second digit must be a valid numeric value'));
      }
    }

    public function submitForm(array &$form, FormStateInterface $form_state) {
      $op = $form_state->getValue('operation');
      switch ($op) {
        case 'add':
          $form_state->setRedirect('calculator_add', ['first_digit' => $form_state->getValue('first_digit'), 'second_digit' => $form_state->getValue('second_digit')]);
          break;
        case 'subtract':
          $form_state->setRedirect('calculator_subtract', ['first_digit' => $form_state->getValue('first_digit'), 'second_digit' => $form_state->getValue('second_digit')]);
          break;
        case 'multiply':
          $form_state->setRedirect('calculator_multiply', ['first_digit' => $form_state->getValue('first_digit'), 'second_digit' => $form_state->getValue('second_digit')]);
          break;
        case 'divide':
          $form_state->setRedirect('calculator_divide', ['first_digit' => $form_state->getValue('first_digit'), 'second_digit' => $form_state->getValue('second_digit')]);
          break;
        default:
          break;
      }
    }
  }

 ?>
