<?php
class Product extends Eloquent {
  public static $rules = array(
 'name' => 'required',
 'price' => 'required:min:0'
 );
}
