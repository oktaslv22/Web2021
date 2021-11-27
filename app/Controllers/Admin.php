<?php
namespace App\Controllers;

class Admin extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }
    public function index()
    {
        return view('dashboard');
    }
    public function view()
    {
        $id = $this->request->uri->getSegment(3);

        $barangModel = new \App\Models\BarangModel();

        $barang = $barangModel->find($id);

        return view('barang/view.php',[
            'barang' => $barang,
        ]);
    }

    public function create()
    {
        if($this->request->getPost())
        {
            $data = $this->request->getPost();
            $this->validation->run($data, 'barang');
            $errors = $this->validation->getErrors();

            if(!$errors)
            {
                //simpan datanya
                $barangModel = new \App\Models\BarangModel();

                $barang = new \App\Entities\Barang();

                $barang->fill($data);
                $barang->gambar = $this->request->getFile('gambar');
                $barang->created_by = $this->session->get('id');
                $barang->created_date = date("Y-m-d H:i:s");

                $barangModel->save($barang);

                $id = $barangModel->insertID();

                $segments = ['admin', 'view', $id];
                //barang/view/id
                return redirect()->to(site_url($segments));
            }
        }
        return view('barang/create');
    }

    public function update()
    {
        $BarangModel = model("BarangModel");
		$data = $this->request->getPost();
		$BarangModel->update($data);
		return redirect()->to(base_url('/admin'));
    }

    public function delete()
    {

    }

}