<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Services\GroupService;
use App\Services\ProductService;
use App\Services\CategoryService;

class CartController extends BaseController
{
    public $category;
    public $group;
    public $product;
    public function __construct()
    {
        $this->category = new CategoryService();
        $this->group = new GroupService();
        $this->product = new ProductService();
    }
    public function cart()
    {
        $data = [];

        $jsFiles = [
            'assets/js/custom.js'
        ];
        $dataCategory = array_merge($this->getHeaderData(), $this->getSidebarData());
        $dataCategory['group_spmoi'] = $this->group->getNameByID(1);
        $dataCategory['group_spnoibat'] = $this->group->getNameByID(2);
        $dataCategory['group_spbanchay'] = $this->group->getNameByID(3);
        $dataCategory['product_group'] = $this->product->getAllProductByGroup(1);
        $dataCategory['product_view'] = $this->product->getAllProductByView(10);
        $dataCategory['product_order'] = $this->product->getAllProductByOrder(10);
        $dataCategory['product_view'] = $this->product->getAllProductByView(5);
        $dataCategory['product_order'] = $this->product->getAllProductByOrder(5);
        if (session()->has('cart')) {
            $dataCategory['cart_list'] = array_values(session('cart'));
            $dataCategory['cart_total'] = $this->total();
        } else {
            $dataCategory['cart_list'] = [];
            $dataCategory['cart_total'] = 0;
        }

        $data = $this->loadLayout($data, 'Giỏ Hàng', 'Home/carts/cart_list', $dataCategory, [], $jsFiles);
        return view('Home/carts/cart', $data);
    }

    public function addcart()
    {
        $id = $this->request->getPost()['id'];
        $row = $this->product->getByID($id);
        if ($row) {
            $new_product = array(
                'name' => $row['name'],
                'id' => $id,
                'soluong' => 1,
                'price' => $row['price'],
                'image' => $row['image'],
                'total' => $row['price']
            );
            $session = session();
            if ($session->has('cart')) {
                $index = $this->exist($id);
                $cart = array_values(session('cart'));
                if ($index == -1) {
                    array_push($cart, $new_product);
                } else {
                    $cart[$index]['soluong']++;
                    $cart[$index]['total'] = $cart[$index]['soluong'] * $cart[$index]['price'];
                }
                $session->set('cart', $cart);
            } else {
                $cart = array($new_product);
                $session->set('cart', $cart);
            }
            return $this->response->redirect("cart");
        } else {
            return $this->response->redirect(site_url("Home/index"));
        }


    }
    public function exist($id)
    {
        $items = array_values(session('cart'));
        for ($i = 0; $i < count($items); $i++) {
            if ($items[$i]['id'] == $id) {
                return $i;
            }
        }
        return -1;
    }
    public function total()
    {
        $sum = 0;
        $items = array_values(session('cart'));
        foreach ($items as $item) {
            $sum += $item['total'];
        }
        return $sum;
    }
    public function remove($id)
    {
        $index = $this->exist($id);
        $cart = array_values(session('cart'));
        unset($cart[$index]);
        $session = session();
        $session->set('cart', $cart);


        if (empty($cart)) {
            $session->remove("cart");
        }

        return $this->response->redirect(site_url('cart'));
    }
    public function removeall()
    {
        $session = session();
        $session->remove("cart");
        return $this->response->redirect(site_url('cart'));
    }
    public function cart_update()
    {
        //dd($this->request->getPost());
        $cart = array_values(session('cart'));
        for ($i = 0; $i < count($cart); $i++) {
            $cart[$i]['soluong'] = $_POST['soluong'][$i];
            $cart[$i]['total'] = $cart[$i]['soluong'] * $cart[$i]['price'];
        }
        $session = session();
        $session->set('cart', $cart);
        return $this->response->redirect(site_url('cart'));
    }

    public function ajaxAction()
    {


        $id = $this->request->getPost('id');
        $soluong = $this->request->getPost('soluong');

        $index = $this->exist($id);
        $cart = array_values(session('cart')); //Danh sách cart trong session
        $cart[$index]['soluong'] = $soluong; //cart[index] = vị trí item sửa số lương trong danh sach cart
        $cart[$index]['total'] = $soluong * $cart[$index]['price'];
        $session = session();
        $session->set('cart', $cart);
        $result = ['result' => 'Data received: ' . $id . ', ' . $soluong];
        $data = [];
        $jsFiles = [
            'assets/js/custom.js'
        ];
        $dataCategory = array_merge($this->getHeaderData(), $this->getSidebarData());
        $dataCategory['group_spmoi'] = $this->group->getNameByID(1);
        $dataCategory['group_spnoibat'] = $this->group->getNameByID(2);
        $dataCategory['group_spbanchay'] = $this->group->getNameByID(3);
        $dataCategory['product_group'] = $this->product->getAllProductByGroup(1);
        $dataCategory['product_view'] = $this->product->getAllProductByView(10);
        $dataCategory['product_order'] = $this->product->getAllProductByOrder(10);
        $dataCategory['product_view'] = $this->product->getAllProductByView(5);
        $dataCategory['product_order'] = $this->product->getAllProductByOrder(5);
        if (session()->has('cart')) {
            $dataCategory['cart_list'] = array_values(session('cart'));
            $dataCategory['cart_total'] = $this->total();
        } else {
            $dataCategory['cart_list'] = [];
            $dataCategory['cart_total'] = 0;
        }
        //return view('Home/carts/cart', $data);
        $viewContent = view('Home/carts/cart_list', $dataCategory);
        return $this->response->setJSON(['cart_list' => $viewContent]);
     
    }

}
