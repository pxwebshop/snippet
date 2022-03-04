<?php
function my_validation_rule( $Validation, $data, $Data ) {
    $Validation->set_rule( 'names', 'noEmpty', array( 'message' => '※必須項目を入力してください。' ) );
    $Validation->set_rule( 'company-name', 'noEmpty', array( 'message' => '※必須項目を入力してください。' ) );
    $Validation->set_rule( 'tel', 'noEmpty', array( 'message' => '※必須項目を入力してください。' ) );
    $Validation->set_rule( 'email', 'noEmpty', array( 'message' => '※必須項目を入力してください。' ) );
    return $Validation;
}
  add_filter( 'mwform_validation_mw-wp-form-70', 'my_validation_rule',10,3);