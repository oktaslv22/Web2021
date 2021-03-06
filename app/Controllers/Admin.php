<?php
namespace App\Controllers;

use App\Models\BarangModel;

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
        
        $id = $this->request->uri->getSegments(3);
        
        $model = new BarangModel();
        $barangs = $model->findAll();
        $data=[
            'title'=>"Data Barang",
            'barangs'=>$barangs,
        ];
        echo view('dashboard', $data);
    }
    
    
    public function view()
    {
        $id = $this->request->uri->getSegments(3);
        
        $model = new BarangModel();
        $barangs = $model->findAll();
        $data=[
            'title'=>"Data Barang",
            'barangs'=>$barangs,
        ];
        echo view('barang/view', $data);
    }
    public function gambar()
    {
        $id = $this->request->uri->getSegments(3);
        
        $model = new BarangModel();
        $barangs = $model->findAll();
        $data=[
            'title'=>"Data Barang",
            'barangs'=>$barangs,
        ];
        echo view('products', $data);
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

   

    public function delete()
	{
		$id = $this->request->uri->getSegment(3);

		$modelBarang = new \App\Models\BarangModel();
		$delete = $modelBarang->delete($id);

		return redirect()->to(site_url('Admin/index'));
	}

   

    public function update()
	{
		$id = $this->request->uri->getSegment(3);

		$barangModel = new \App\Models\BarangModel();

		$barang = $barangModel->find($id);

		if($this->request->getPost())
		{
			$data = $this->request->getPost();
			$this->validation->run($data, 'barangupdate');
			$errors = $this->validation->getErrors();

			if(!$errors)
			{
				$b = new \App\Entities\Barang();
				$b->id = $id;
				$b->fill($data);

				if($this->request->getFile('gambar')->isValid()){
					$b->gambar = $this->request->getFile('gambar');
				}

				$b->updated_by = $this->session->get('id');
				$b->updated_date = date("Y-m-d H:i:s");

				$barangModel->save($b);
				
				$segments = ['Admin','view',$id];

				return redirect()->to(base_url($segments));
			}
		}

		return view('barang/update',[
			'barang' => $barang,
		]);
	}
}