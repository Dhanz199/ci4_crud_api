<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ProdukModel;


class Produk extends ResourceController
{
    // Routes Api/Produk
    protected $modelName = '\App\Models\ProdukModel';

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        // Menampilkan Data Produk
        return $this->respond([
            'status' => true,
            'data' => $this->model->findAll()
        ], 200);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        // Menampilkan Data Produk berdasarkan Id produk
        return $this->respond([
            'status' => true,
            'data' => $this->model->find($id)
        ], 200);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        // Membuat Data Produk
        $data = [
            'nama_produk' => $this->request->getVar('nama_produk'),
            'harga' => $this->request->getVar('harga')
        ];

        if ($this->model->save($data)) {
            return $this->respond([
                'status' => true,
                'message' => 'Data Produk Berhasil ditambahkan'
            ], 200);
        } else {
            return $this->respond([
                'status' => false,
                'errors' => $this->model->errors()
            ], 422);
        };
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        // Mengubah Data Produk Berdasarkan Id

        if (!$this->model->find($id)) {
            return $this->respond(['status' => false, 'messages' => 'Data Produk Tidak Ditemukan']);
        }

        $data = [
            'nama_produk' => $this->request->getVar('nama_produk'),
            'harga' => $this->request->getVar('harga')
        ];

        if ($this->model->update($id, $data)) {
            return $this->respond([
                'status' => true,
                'message' => 'Data Produk Berhasil diubah'
            ], 200);
        } else {
            return $this->respond([
                'status' => false,
                'errors' => $this->model->errors()
            ], 422);
        };
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        // Menghapus Data Produk Berdasarkan Id
        $this->model->delete($id);

        return $this->respond([
            'status' => true,
            'message' => 'Data Produk Berhasil dihapus'
        ], 200);
    }
}
