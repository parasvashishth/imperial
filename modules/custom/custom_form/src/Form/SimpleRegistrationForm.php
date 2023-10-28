<?php
 
namespace Drupal\custom_form\Form;
 
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Database\Database;
use Symfony\Component\DependencyInjection\ContainerInterface;
 
class SimpleRegistrationForm extends FormBase {

   /**
   * Database connection.
   *
   * @var \Drupal\Core\Database\Connection
   */
      protected $database;

      /**
       * Class constructor.
       */
      public function __construct() {
        $this->database = Database::getConnection();
      }

  /**
   * {@inheritdoc}
   */

 public function getFormId() {
   // Here we set a unique form id
   return 'simple_form';
 }
 
 public function buildForm(array $form, FormStateInterface $form_state, $username = NULL) {
    // Textfield form element.
   $form['first_name'] = array(
     '#type' => 'textfield',
     '#title' => t('First Name:'),
     '#required' => TRUE,
   );
    // Textfield form element.
   $form['last_name'] = array(
     '#type' => 'textfield',
     '#title' => t('Last Name:'),
     '#required' => TRUE,
   );
    // Textfield form element.
   $form['email_id'] = array(
     '#type' => 'email',
     '#title' => t('Email ID:'),
     '#required' => TRUE,
   );
    // Textfield form element.
   $form['mobile_number'] = array (
     '#type' => 'tel',
     '#title' => t('Mobile no'),
   );
    // Textfield form element.
   $form['dob'] = array (
     '#type' => 'date',
     '#title' => t('DOB'),
     '#required' => TRUE,
   );
   // select form element.
   $form['gender'] = array (
     '#type' => 'select',
     '#title' => ('Gender'),
     '#options' => array(
       'Female' => t('Female'),
       'male' => t('Male'),
     ),
   );
   // Radio buttons form elements.
   $form['confirmation'] = array (
     '#type' => 'radios',
     '#title' => ('Are you above 18 years old?'),
     '#options' => array(
       'Yes' =>t('Yes'),
       'No' =>t('No')
     ),
   );
   //submit button.
   $form['actions']['submit'] = array(
     '#type' => 'submit',
     '#value' => $this->t('Save'),
     '#button_type' => 'primary',
   );
   return $form;
 }
 public function validateForm(array &$form, FormStateInterface $form_state) {
   if (strlen($form_state->getValue('mobile_number')) < 10) {
     $form_state->setErrorByName('mobile_number', $this->t('Mobile number too short.'));
   }
 }
/**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $name = $form_state->getValue('first_name');

    // Insert data into the custom table.
    $this->database->insert('simple_custom__form_table')
      ->fields([
        'name' => $name,
      ])
      ->execute();

    // Display a message.
    $this->messenger()->addMessage($this->t('Form submitted successfully.'));
  }
}