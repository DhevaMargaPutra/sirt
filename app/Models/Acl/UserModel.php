<?php

namespace App\Models\Acl;

use CodeIgniter\Model;

class UserModel extends Model
{
	protected $table = 'core_users';
	protected $primaryKey = 'id';
	protected $returnType = 'object';
	protected $useSoftDeletes = false;
	protected $allowedFields = ['no_kk','email', 'username', 'password', 'sts'];
	protected $useTimestamps = false;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';
	protected $validationRules    = [];
	protected $validationMessages = [];
	protected $skipValidation     = true;

}
