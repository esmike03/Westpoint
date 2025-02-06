<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'name'      => $row['product_name'], // Match column names in Excel
            'category'  => $row['category'],
            'brand'     => $row['brand'],
            'price'     => $row['price'],
            'details'   => $row['details'],
        ]);
    }
}
