<?php

namespace App\Services;

use App\Models\OderModel;
use Exception;

class OderService extends BaseService
{
    private $oder;
    function __construct()
    {
        parent::__construct();
        $this->oder = new OderModel();
        $this->oder->protect(false);
    }

    public function saveOrder($postData)
    {
        $orderData = [
            'name' => $postData['name'],
            'phone' => $postData['phone'],
            'address' => $postData['address'],
            'note' => $postData['note'],
            'total' => $postData['cart_total'],
        ];
   
        $result = $this->oder->save($orderData);
        if ($result) {
            return $this->oder->insertID();
        }
        return null;
    }
    public function getOderByID($oderID){
        return $this -> oder -> where('id',$oderID)->first();
    }
    private function calculateCartTotal($cart)
    {
        $total = 0;

        foreach ($cart as $item) {
            $total += $item['total'];
        }
        return $total;
    }




}
