<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
 



class UsersImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        $existingProduct = Product::where([
            'title' => $row['title'],
            'user_id' => $row['user_id']
        ])->first();

        if ($existingProduct) {
            return null; // Skip this row
        }

        return new Product([
            'title' => $row['title'],
            'description' => $row['description'],
            'price' => $row['price'],
            'user_id' => $row['user_id']
        ]);
    }



    

// public function rules(): array
// {
//     return [
//         'title' => [
//             'required',
//             Rule::unique('products')->where(function ($query) {
//                 return $query->where('user_id', $this->user_id);
//             })
//         ],
//         // ... other rules ...
//     ];
// }

}


