<?php
class UserWidget extends CWidget{
	private $users;
	private $limit = 10;
	public function init(){
		$this->users = Register::model()->findAll();
	}
	public function getRecentUsers(){
		return $this->users;
	}
	public function run(){
		$this->render('recentUsers');
	}
}