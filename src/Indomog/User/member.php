<?php namespace Indomog\User;

class Member
{
	private $id;

	private $name;

	private $email;

	public function getId()
	{
		return $this->id;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getEmail()
	{
		return $this->email;
	}
}