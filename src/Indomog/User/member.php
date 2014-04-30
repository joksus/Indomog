<?php namespace Indomog\User;
	

class Member
{
	private $id;

	private $name;

	private $email;

	public function setId()
	{
		$this->id = $id;
		return $this;
	}

	public function setName()
	{
		$this->name = $name;
		return $this;
	}

	public function setEmail()
	{
		$this->email = $email;
		return $this;
	}
	
	
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