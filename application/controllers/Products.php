<?php
class Products extends CI_Controller {

    public function __construct() {
        parent::__construct();
        check_login();
        $this->load->model("Product_model");
        $this->load->library("upload");
    }

    public function index()
    {
        $data['title'] = "Produk";
        $data['products'] = $this->Product_model->get_all();
        $data['content'] = "products/index";
        $this->load->view("template", $data);
    }

    public function add()
    {
        $data['title'] = "Tambah Produk";
        $data['content'] = "products/add";
        $this->load->view("template", $data);
    }

    public function add_action()
    {
        // Upload image
        $image = "";
        if (!empty($_FILES['image']['name'])) {
            $config['upload_path'] = './uploads/products/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 2048;
            $config['file_name'] = time();

            $this->upload->initialize($config);
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data('file_name');
            }
        }

        $insert = [
            "name"    => $this->input->post("name"),
            "barcode" => $this->input->post("barcode"),
            "price"   => $this->input->post("price"),
            "stock"   => $this->input->post("stock"),
            "unit"    => $this->input->post("unit"),
            "image"   => $image
        ];

        $this->Product_model->insert($insert);
        redirect("products");
    }

    public function edit($id)
    {
        $data['title'] = "Edit Produk";
        $data['product'] = $this->Product_model->get($id);
        $data['content'] = "products/edit";
        $this->load->view("template", $data);
    }

    public function edit_action($id)
    {
        $product = $this->Product_model->get($id);
        $image = $product->image;

        // Upload baru jika ada
        if (!empty($_FILES['image']['name'])) {
            $config['upload_path'] = './uploads/products/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['file_name'] = time();

            $this->upload->initialize($config);
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data('file_name');
            }
        }

        $update = [
            "name"    => $this->input->post("name"),
            "barcode" => $this->input->post("barcode"),
            "price"   => $this->input->post("price"),
            "stock"   => $this->input->post("stock"),
            "unit"    => $this->input->post("unit"),
            "image"   => $image
        ];

        $this->Product_model->update($id, $update);
        redirect("products");
    }

    public function delete($id)
    {
        $this->Product_model->delete($id);
        redirect("products");
    }
}
