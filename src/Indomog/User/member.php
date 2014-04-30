<?php namespace Indomog\User;

class Member
{
	private $id;

	private $name;

	private $email;

	public function getid()
	{
		return $this->id;
	}

	public function getname()
	{
		return $this->name;
	}

	public function getemail()
	{
		return $this->email;
	}

	public function setid()
	{
		$this->id = $id;
		return $this;
	}

	public function setid()
	{
		$this->id = $id;
		return $this;
	}

	public function setname()
	{
		$this->name = $name;
		return $this;
	}

	public function setemail()
	{
		$this->email = $email;
		return $this;
	}
}