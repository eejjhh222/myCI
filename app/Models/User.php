<?php namespace Models;

use CodeIgniter\Model;

class User extends Model
{
	protected $table      = 'users';
	protected $primaryKey = 'idx';

	protected $returnType = 'array';
	protected $useSoftDeletes = true;

	protected $allowedFields = ['name', 'id'];

	protected $useTimestamps = true;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
//	protected $deletedField  = 'deleted_at';

	protected $validationRules    = [];
	protected $validationMessages = [];
	protected $skipValidation     = false;
}
