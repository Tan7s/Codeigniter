<?php

namespace App\Services;

use App\Models\OderDetailModel;
use Exception;

class OderDetailService extends BaseService
{
    private $oder_detail;
    function __construct()
    {
        parent::__construct();
        $this->oder_detail = new OderDetailModel();
        $this->oder_detail->protect(false);
    }

    public function saveOrderDetails($orderId, $productIds, $quantities, $prices)
    {
        for ($i = 0; $i < count($productIds); $i++) {
            $orderExists = $this->oder_detail->where('id', $orderId)->countAllResults() > 0;
            $orderDetailData = [
                'order_id' => $orderId,
                'product_id' => $productIds[$i],
                'quantity' => $quantities[$i],
                'price' => $prices[$i],
            ];
            $this->oder_detail->save($orderDetailData);

        }
    }
    public function getOderDetailByID($orderId)
    {
        $this->oder_detail->select('*');
        $this->oder_detail->join('oder', 'oder_detail.order_id = oder.id', 'inner');
        $this->oder_detail->join('product', 'oder_detail.product_id = product.id', 'inner');
        $this->oder_detail->where('oder_detail.order_id', $orderId);

        $query = $this->oder_detail->get();

        return $query->getResult();
    }






}
