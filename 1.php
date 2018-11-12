<?php

class A{
	public $name;
	public $sex;
	public function run(){
		echo "my name is".$this->name;
	}
}
$mod = new A();
$mod->run();