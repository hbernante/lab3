<?php

namespace App\Models;

use CodeIgniter\Model;

class GuestModel extends Model
{
	protected $table = 'hbernante_guest';
	
	public function getGuest()
	{
		return $this->findAll();
	}
}