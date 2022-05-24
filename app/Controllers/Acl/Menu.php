<?php

namespace App\Controllers\Acl;

use App\Controllers\BaseController;

class Menu extends BaseController
{
    public function __construct()
    {

    }

    /*
    * Menu
    */

    public function index()
    {
        echo view('tema/header');
        echo view('acl/menu/index');
        echo view('tema/footer');
    }

    public function simpan_menu()
    {
        $this->index();
    }

    public function edit_menu($menu_id = '')
    {
        echo view('tema/header');
        echo view('acl/menu/menu_edit');
        echo view('tema/footer');
    }

    public function update_menu()
    {
        $this->index();
    }

    public function delete_menu($menu_id = '')
    {

    }
    
    /*
    * Sub Menu
    */

    public function menu_sub($id = '')
    {
        echo view('tema/header');
        echo view('acl/menu/sub_menu');
        echo view('tema/footer');
    }

    public function simpan_sub_menu()
    {

    }

    public function edit_sub_menu($menu_id = '', $sub_menu_id = '')
    {
        echo view('tema/header');
        echo view('acl/menu/sub_menu_edit');
        echo view('tema/footer');
    }

    public function update_sub_menu()
    {

    }

    public function delete_sub_menu($menu_id = '', $sub_menu_id = '')
    {

    }

    /*
    * Sub Sub Menu
    */

    public function menu_sub_sub($menu_id = '', $sub_menu_id = '')
    {
        echo view('tema/header');
        echo view('acl/menu/sub_sub_menu');
        echo view('tema/footer');
    }

    public function simpan_sub_submenu()
    {

    }

    public function edit_sub_submenu($id_menu = '', $menu_id = '', $sub_menu_id = '')
    {
        echo view('tema/header');
        echo view('acl/menu/sub_sub_menu_edit');
        echo view('tema/footer');
    }

    public function update_sub_submenu()
    {

    }

    public function delete_sub_submenu($id_menu = '', $menu_id = '', $sub_menu_id = '')
    {

    }

}
