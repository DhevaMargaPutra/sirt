<?php

namespace App\Models\Acl;

use CodeIgniter\Model;

class MenuSubSubModel extends Model
{
	protected $table = 'core_menu_sub_sub';
	protected $primaryKey = 'id';
	protected $returnType = 'object';
	protected $useSoftDeletes = false;
	protected $allowedFields = ['icon', 'nm_menu_sub_sub', 'url', 'api_url', 'sts', 'order', 'id_menu', 'id_menu_sub'];
	protected $useTimestamps = false;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';
	protected $validationRules    = [];
	protected $validationMessages = [];
	protected $skipValidation     = true;
}
