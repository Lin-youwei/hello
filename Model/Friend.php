<?php

namespace Model;

use Base\Api;

class Friend implements Api {

	public $UserName = "ersheng";
	public $UserId = 12;
	public function getId() {

		return $this->UserId . "F";
	}

	public function getName() {

		return $this->UserName . "F";
	}
}