<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function idx(){
        $listproduct = [
            ['id' => 1,
            'name' => 'Laptop',
            'desc' => 'This product is very very limited. With this, you can do all your works easily and can save tons of files.',
            'status' => 'SSR',
            'price' => 50000000],

            ['id' => 2,
            'name' => 'Mechanical Keyboard',
            'desc' => 'This brand new keyboard generation will make you do not want to stop typing. This will make you like a pro typer.',
            'status' => 'SR',
            'price' => 1000000],

            ['id' => 3,
            'name' => 'Mouse',
            'desc' => 'This newest product is a must buy. It is every programmers favorite mouse. Buy this and you will become a pro.',
            'status' => 'R',
            'price' => 200000],

            ['id' => 4,
            'name' => 'Smart Watch',
            'desc' => 'This product is a limited time sale only. You can call someone and text someone from this product.',
            'status' => 'SR',
            'price' => 4000000],
        ];

        return view('product', compact('listproduct'));
    }

    public function showdetail($id){
        $listproduct = [
            ['id' => 1,
            'name' => 'Laptop',
            'desc' => 'This product is very very limited. With this, you can do all your works easily and can save tons of files.',
            'status' => 'SSR',
            'price' => 50000000],

            ['id' => 2,
            'name' => 'Mechanical Keyboard',
            'desc' => 'This brand new keyboard generation will make you do not want to stop typing. This will make you like a pro typer.',
            'status' => 'SR',
            'price' => 1000000],

            ['id' => 3,
            'name' => 'Mouse',
            'desc' => 'This newest product is a must buy. It is every programmers favorite mouse. Buy this and you will become a pro.',
            'status' => 'R',
            'price' => 200000],

            ['id' => 4,
            'name' => 'Smart Watch',
            'desc' => 'This product is a limited time sale only. You can call someone and text someone from this product.',
            'status' => 'SR',
            'price' => 4000000],
        ];

        $product = [];
        foreach($listproduct as $pro){
            if($pro["id"] == $id){
                $product = $pro;
            }
        }
        return view('detail', compact('product'));
    }
}
