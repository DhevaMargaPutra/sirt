<?php

namespace App\Models\Acl;

use CodeIgniter\Model;

class LevelaksesModel extends Model
{
	protected $table = 'core_level_akses';
	protected $primaryKey = 'id';
	protected $returnType = 'object';
	protected $useSoftDeletes = false;
	protected $allowedFields = ['level_id','menu_id', 'status', 'akses_c', 'akses_r', 'akses_u', 'akses_d'];
	protected $useTimestamps = false;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';
	protected $validationRules    = [];
	protected $validationMessages = [];
	protected $skipValidation     = true;
}
