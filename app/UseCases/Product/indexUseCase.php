<?php

namespace App\UseCases\Product;

/**
 * 商品一覧
 */
class IndexUseCase
{
    /**
     * 商品一覧の処理を実行
     * 
     * @param string|null $category カテゴリー名
     * @param string|null $subcategory サブカテゴリー名
     * @return array パンくずリストの配列
     */
    public function __invoke(?string $category = null, ?string $subcategory = null): array
	{
        // パンくずリストを生成
        $breadcrumbs = $this->getPanCrumbs($category, $subcategory);

        return $breadcrumbs;
    }

    /**
     * パンくずリストを生成
     */
    private function getPanCrumbs(?string $category = null, ?string $subcategory = null): array
    {
        // カテゴリーもサブカテゴリーも指定がない場合
        if (!$category && !$subcategory) {
            $breadcrumbs = [
                ['name' => 'コスメナビ', 'url' => '/'],
                ['name' => 'カテゴリー', 'url' => null]
            ];
        }

        // カテゴリーのみ指定されている場合
        if ($category && !$subcategory) {
            $breadcrumbs = [
                ['name' => 'コスメナビ', 'url' => '/'],
                ['name' => 'カテゴリー', 'url' => route('products.index')],
                ['name' => $category, 'url' => null]
            ];
        }

        // カテゴリーとサブカテゴリーが指定されている場合
        if ($category && $subcategory) {
            $breadcrumbs = [
                ['name' => 'コスメナビ', 'url' => '/'],
                ['name' => 'カテゴリー', 'url' => route('products.index')],
                ['name' => $category, 'url' => route('products.index', ['category' => $category])],
                ['name' => $subcategory, 'url' => null]
            ];
        }

        return $breadcrumbs;
    }
}
