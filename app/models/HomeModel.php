<?php
class HomeModel {
    protected $_table = 'products';

    public function getList() {
        $data = [
            'items1',
            'items2',
            'items'
        ];
        return $data;
    }
}
