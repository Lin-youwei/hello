<?php
namespace Model;
use Base\Api;
use Base\Base;
use Model\UserInfo AS UI;

class User extends Base implements Api {

	public static $UserId = 10;

	public $UserBase;

	public $UserName = "wuwei";

	public function __construct() {
		$this->UserBase = new Base();
	}

	public function action() {

		$this->info();
	}

	public function getId() {

		return self::$UserId;
	}

	public function getName() {

		return self::$UserName;
	}

	public function foo() {

		(new UI())->info();
		$this->pfoo();
	}

	public function classname() {
		echo __CLASS__;
	}

	public function info() {
		parent::info();
		echo __CLASS__;
	}

}
