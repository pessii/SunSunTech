<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UseCases\Product\IndexUseCase;

/**
 * 商品一覧
 */
class ProductController extends Controller
{
    /**
     * 商品一覧を表示
     * 
     * @return \Illuminate\View\View
     */
    public function index(IndexUseCase $indexUseCase, ?string $category = null, ?string $subcategory = null)
    {
        //商品一覧の処理
        $breadcrumbs = $indexUseCase($category, $subcategory);

        return view('list.product', compact('breadcrumbs'));
    }
}
