<?php namespace Indomog\User;

class Merchant
{
	private $id;

	private $name;

	private $email;

	public function setId($id)
	{
		$this->id=$id;
		return $this;
	}

	public function setName($name)
	{
		$this->name=$name;
		return $this;
	}

	public function setEmail($email)
	{
		$this->email=$email;
		return $this;
	}

}