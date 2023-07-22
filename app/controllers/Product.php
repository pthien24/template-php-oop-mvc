<?php
class Product extends Controller{
    public $data = [];
    public function index(){
        $this->data['content'] = 'home/index';
        $this->data['sub_content'][''] = '';
thi        $this->render('layouts/client_layout',$this->data);

    }
    public function list_product() {
        $product =$this->model('ProductModel');
        $dataprod =   $product->getProductList();
        $title = 'dash sach san phamet';
        $this->data['page_title']= $title;
        $this->data['sub_content']['title'] = $title;
        $this->data['sub_content']['product_list'] = $dataprod;
        //render view list product
        $this->data['content'] = 'products/list';
        $this->render('layouts/client_layout',$this->data);
    }
    public function detail($id=0) {
        $product =$this->model('ProductModel');
        $this->data['page_title']= 'chi tiet san pham';
        $this->data['sub_content']['info'] = $product->getDetali($id);
        $this->data['sub_content']['title'] = 'chi tiet san pham';
        $this->data['content'] = 'products/detail';
        $this->render('layouts/client_layout' ,$this->data);
    }
}