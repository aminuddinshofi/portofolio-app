<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PortfolioController extends BaseController
{
    public $helpers = [
        'form'
    ];    
    public function create()
    {
        if ($this->request->getMethod() === 'post' && $this->validate([
            'title' => 'required',
                'description' => 'required',
                'image' => 'uploaded[image]|ext_in[image,png,jpg,jpeg]'
        ])) {
             // menyimpan file gambar dari input file 
                    $imageFile = $this->request->getFile('image');
                    $imageFileName = $imageFile->getRandomName();
                    $imageFile->move(ROOTPATH . 'public/images/', $imageFileName);
    
                    // mengambil data entity portfolio dari request form
                    $portfolio  = new \App\Entities\Portfolio();
                    $portfolio->title = $this->request->getPost('title');
                    $portfolio->description = $this->request->getPost('description');
                    $portfolio->image = "images/" . $imageFileName;
    
                    // menyimpan data entity portfolio ke tabel portfolios
                    $model = model('App\Models\PortfolioModel');
                    $model->save($portfolio);
    
                    // redirect ke halaman dengan route `/portfolio` dengan mengeset flashdata untuk menampilkan pesan sukses
                    return redirect()->to('/portfolio')->with('success_message', 'Successfully create a new portfolio.');
            }
    
            echo view('portfolio/create');
    }
   
}
