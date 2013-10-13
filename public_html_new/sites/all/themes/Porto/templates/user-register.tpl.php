<?php 
  $form['actions']['submit']['#value']= 'Sign Up';
  $form['actions']['submit']['#attributes']['class'][]='form-submit btn remove btn-primary btn-large';
  print render($form['form_build_id']);
?>
<?php
  print render($form['field_companyname']);   
  print render($form['field_first_name']); // Your Drupal 7 profile field if any.
  print render($form['field_last_name']);
  print render($form['field_phone']);
  print render($form['account']['name']);
  print render($form['account']['mail']);
  print drupal_render($form['actions']); 

?>
		

	
