<?php
namespace Base;
class Base {
	public static $UserId = 1;
	public $ba;
	public $bb;
	public function myecho() {

		echo "hello base";
	}

	protected function pfoo() {
		echo "protected foo ";
	}

	public function UserId() {

		return static::$UserId;
	}

	public function classname() {
		echo "Base" . __CLASS__;
	}

	public function info() {

		echo "Base" . __CLASS__;
	}

}