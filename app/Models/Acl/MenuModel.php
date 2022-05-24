<?php

namespace App\Models\Acl;

use CodeIgniter\Model;

class MenuModel extends Model
{
	protected $table = 'core_menu';
	protected $primaryKey = 'id';
	protected $returnType = 'object';
	protected $useSoftDeletes = false;
	protected $allowedFields = ['nm_menu','url', 'api_url', 'sts', 'order'];
	protected $useTimestamps = false;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';
	protected $validationRules    = [];
	protected $validationMessages = [];
	protected $skipValidation     = true;

}