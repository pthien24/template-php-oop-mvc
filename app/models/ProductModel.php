<?php
class ProductModel {

    public function getProductList() {
        return  [
            'san pham 1',
            'san pham 1',
            'san pham 2',
            'san pham '
        ];
    }
    public function getDetali($id) {
       $data=  [
            'san pham 1',
            'san pham 2',
            'san pham 3',
            'san pham 4',
            'san pham 5'
        ];
        return $data[$id];
    }
}
