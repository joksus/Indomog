<?php namespace Indomog\User;
	

class Member
{
	private $id;

	private $name;

	private $email;

	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}

	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}

	public function setEmail($email)
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