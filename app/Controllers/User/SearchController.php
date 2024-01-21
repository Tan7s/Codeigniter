<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Services\SearchService;

class SearchController extends BaseController
{
    private $searchService;

    public function __construct()
    {
        $this->searchService = new SearchService();
    }

    public function index()
    {
        return view('Home/test');
    }

    public function search()
    {
        $keyword = $this->request->getPost('keyword');
        $data['results'] = $this->searchService->search($keyword);
       
        if ($this->request->isAJAX()) {
            return view('Home/layout/header/ajax_search', $data);
        } else {
            return view('Home/search', $data);
        }
    }
}
