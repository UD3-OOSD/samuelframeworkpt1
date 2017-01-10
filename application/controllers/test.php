<?php
use samuel\controllers\sf_core;
Class test extends sf_core{

public function happy(){
$this->load_page("test");
}

public function methodWithParams($params){
$data['params']=$params;
$this->load_page("test_with_param",$data);
}

}