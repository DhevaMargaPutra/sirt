<?php

namespace App\Controllers\Acl;

use App\Controllers\BaseController;
use App\Models\Acl\MenuModel;
use App\Models\Acl\MenuSubModel;
use App\Models\Acl\MenuSubSubModel;

class Menu extends BaseController
{
    public function __construct()
    { }

    /*
    * Menu
    */

    public function index()
    {
        $menuModel = new MenuModel();
        $data['menu_list'] = $menuModel->findAll();

        echo view('tema/header');
        echo view('acl/menu/index', $data);
        echo view('tema/footer');
    }

    public function simpan_menu()
    {
        // dd($this->request->getVar());
        $menuModel = new MenuModel();
        $menuModel->insert($this->request->getVar());
        session()->setFlashdata('pesan', 'Menu berhasil disimpan');
        return $this->response->redirect(site_url('/acl/menu'));
    }

    public function edit_menu($menu_id = '')
    {
        // dd($menu_id);
        $menuModel = new MenuModel();
        $data['menu'] = $menuModel->where('id', $menu_id)->first();
        $data['menu_list'] = $menuModel->findAll();

        echo view('tema/header');
        echo view('acl/menu/menu_edit', $data);
        echo view('tema/footer');
    }

    public function update_menu()
    {
        $menuModel = new MenuModel();
        $id = $this->request->getVar('id');
        $menuModel->update($id, $this->request->getVar());
        session()->setFlashdata('pesan', 'Menu berhasil diupdate');
        return $this->response->redirect(site_url('/acl/menu'));
    }

    public function delete_menu($menu_id = '')
    {
        $menuModel = new MenuModel();
        $menuModel->where('id', $menu_id)->delete($menu_id);
        session()->setFlashdata('pesan', 'Menu berhasil dihapus');
        return $this->response->redirect(site_url('/acl/menu'));
    }

    /*
    * Sub Menu
    */

    public function menu_sub($id = '')
    {
        $menuModel = new MenuModel();
        $menuSubModel = new MenuSubModel();

        $data['menu'] = $menuModel->where('id', $id)->first();
        $data['id_menu'] = $id;
        $data['sub_menu_list'] = $menuSubModel->where('id_menu', $id)->findAll();

        echo view('tema/header');
        echo view('acl/menu/sub_menu', $data);
        echo view('tema/footer');
    }

    public function simpan_sub_menu()
    {
        $menuSubModel = new MenuSubModel();
        $idMenu = $this->request->getVar('id_menu');
        $menuSubModel->insert($this->request->getVar());

        session()->setFlashdata('pesan', 'Sub Menu berhasil disimpan');
        return $this->response->redirect(site_url('/acl/menu/menu_sub/' . $idMenu));
    }

    public function edit_sub_menu($menu_id = '', $sub_menu_id = '')
    {

        $menuModel = new MenuModel();
        $subMenuModel = new MenuSubModel();
        $data['menu'] = $menuModel->where('id', $menu_id)->first();
        $data['sub_menu'] = $subMenuModel->where('id', $sub_menu_id)->first();
        $data['id_menu'] = $menu_id;
        $data['id_sub_menu'] = $sub_menu_id;
        $data['sub_menu_list'] = $subMenuModel->findAll();

        echo view('tema/header');
        echo view('acl/menu/sub_menu_edit', $data);
        echo view('tema/footer');
    }

    public function update_sub_menu()
    {
        $subMenuModel = new MenuSubModel();
        $id = $this->request->getVar('id');
        $idMenu =  $this->request->getVar('id_menu');
        $subMenuModel->update($id, $this->request->getVar());
        session()->setFlashdata('pesan', 'Sub Menu berhasil diupdate');
        return $this->response->redirect(site_url('/acl/menu/menu_sub/' . $idMenu));
    }

    public function delete_sub_menu($menu_id = '', $sub_menu_id = '')
    {
        $subMenuModel = new MenuSubModel();
        $subMenuModel->where('id', $sub_menu_id)->delete($sub_menu_id);
        session()->setFlashdata('pesan', 'Sub Menu berhasil dihapus');
        return $this->response->redirect(site_url('/acl/menu/menu_sub/' . $menu_id));
    }

    /*
    * Sub Sub Menu
    */

    public function menu_sub_sub($menu_id = '', $sub_menu_id = '')
    {
        $menuModel = new MenuModel();
        $menuSubModel = new MenuSubModel();
        $menuSubSubModel = new MenuSubSubModel();

        $data['sub_menu'] = $menuSubModel->where('id', $sub_menu_id)->first();
        $data['id_menu'] = $menu_id;
        $data['id_menu_sub'] = $menu_id;
        $data['sub_sub_menu_list'] = $menuSubSubModel->where('id_menu', $menu_id)->where('id_menu_sub', $sub_menu_id)->findAll();

        echo view('tema/header');
        echo view('acl/menu/sub_sub_menu', $data);
        echo view('tema/footer');
    }

    public function simpan_sub_sub_menu()
    {
        $menuSubSubModel = new MenuSubSubModel();
        $idMenu = $this->request->getVar('id_menu');
        $idMenuSub = $this->request->getVar('id_menu_sub');
        $menuSubSubModel->insert($this->request->getVar());

        session()->setFlashdata('pesan', 'Sub Menu berhasil disimpan');
        return $this->response->redirect(site_url('/acl/menu/menu_sub_sub/' . $idMenu . '/' . $idMenuSub));
    }

    public function edit_sub_sub_menu($menu_id = '', $menu_sub_id = '', $menu_sub_sub_id = '')
    {
        // $menuModel = new MenuModel();
        $menuSubModel = new MenuSubModel();
        $menuSubSubModel = new MenuSubSubModel();

        // $data['menu'] = $menuModel->where('id', $menu_id)->first();
        $data['sub_menu'] = $menuSubModel->where('id', $menu_sub_id)->first();
        $data['sub_sub_menu'] = $menuSubSubModel->where('id', $menu_sub_sub_id)->first();
        $data['id_menu'] = $menu_id;
        $data['id_menu_sub'] = $menu_sub_id;
        $data['sub_sub_menu_list'] = $menuSubSubModel->findAll();

        echo view('tema/header');
        echo view('acl/menu/sub_sub_menu_edit', $data);
        echo view('tema/footer');
    }

    public function update_sub_sub_menu()
    {
        $subSubMenuModel = new MenuSubSubModel();
        $id = $this->request->getVar('id');
        $idMenu =  $this->request->getVar('id_menu');
        $idMenuSub =  $this->request->getVar('id_menu_sub');
        $subSubMenuModel->update($id, $this->request->getVar());
        session()->setFlashdata('pesan', 'Sub Sub Menu berhasil diupdate');
        return $this->response->redirect(site_url('/acl/menu/menu_sub_sub/' . $idMenu . './' . $idMenuSub));
    }

    public function delete_sub_sub_menu($menu_id = '', $menu_sub_id = '', $menu_sub_sub_id = '')
    {
        $subSubMenuModel = new MenuSubSubModel();
        $subSubMenuModel->where('id', $menu_sub_sub_id)->delete($menu_sub_sub_id);
        session()->setFlashdata('pesan', 'Sub Sub Menu berhasil dihapus');
        return $this->response->redirect(site_url('/acl/menu/menu_sub_sub/' . $menu_id . './' . $menu_sub_id));
    }
}
