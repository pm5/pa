<?php

function book_export_import_form($form, &$form_state) {
  $form = array();
  $form['#attributes'] = array(
    'enctype' => "multipart/form-data",
  );

  $form['#prefix'] = '<p>' . t('You may import book content by pasting or uploading the code exported from Book export.') . '</p>';

  $form['upload'] = array(
    '#type' => 'fieldset',
    '#title' => t('Upload file'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE
  );
  $form['upload']['file'] = array(
    '#type' => 'file',
    '#description' => t('To clear this field, <a href="!reset">reset the form</a>.', array('!reset' => url($_GET['q'])))
  );

  $form['paste'] = array(
    '#type' => 'fieldset',
    '#title' => t('Paste code'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['paste']['code'] = array(
    '#type' => 'textarea',
    '#default_value' => '',
    '#rows' => 30,
    '#description' => t('Paste the code of a book export here.'),
    '#wysiwig' => FALSE,
  );

  $form['action'] = array(
    '#type' => 'actions',
    'submit' => array(
      '#type' => 'submit',
      '#value' => t('Import'),
    ),
    'reset' => array(
      '#markup' => l(t('Reset the form'), $_GET['q']),
    )
  );
  return $form;
}

function book_export_import_form_submit(&$form, &$form_state)
{
  global $_book_export_status;

  if ($form_state['values']['file']) {
    $file = unserialize($form_state['values']['file']);
    if (file_exists($file->uri)) {
      $code_string = file_get_contents($file->uri);
      unlink($file->uri);
    }
    file_delete($file);
  } elseif ($form_state['values']['code']) {
    $code_string = trim($form_state['values']['code']);
  }

  if (! isset($code_string)) {
    drupal_set_message(t('No code found in uploaded file or pasted code.'), 'error');
    return;
  }

  book_export_import_book(json_decode($code_string));

  drupal_set_message(t('Successfully imported !nodes nodes of !books books.', array(
    '!nodes' => $_book_export_status['success nodes'],
    '!books' => $_book_export_status['success books']
  )));
}

function book_export_import_form_validate($form, &$form_state)
{
  if ($form_state['clicked_button']['#id'] === 'edit-submit'
    && ! $_FILES['files']['name']['file']
    && ! $form_state['values']['code']
  ) {
    drupal_set_message(t('Please upload a file or paste code to import.'), 'error');
    form_set_error('', NULL);
  }

  if ($_FILES['files']['name']['file']) {
    $original = $_FILES['files']['name']['file'];
    $save = file_save_upload('file', array('file_validate_extensions' => array()));
    if (! $save) {
      drupal_set_message(t('Error: Book export could not save file.'), 'error');
    } else {
      $save->original = $original;
      form_set_value($form['upload']['file'], serialize($save), $form_state);
    }
  }
}
