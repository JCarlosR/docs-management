<?php

use App\Category;
use App\Subcategory;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat_1 = Category::create(['name' => 'Compras']);
            Subcategory::create(['name' => 'Proveedor', 'category_id' => $cat_1->id]);
            Subcategory::create(['name' => 'Monto', 'category_id' => $cat_1->id]);
            Subcategory::create(['name' => 'Relación de...', 'category_id' => $cat_1->id]);

        $cat_2 = Category::create(['name' => 'Ventas']);
            Subcategory::create(['name' => 'Cliente', 'category_id' => $cat_2->id]);
            Subcategory::create(['name' => 'Monto', 'category_id' => $cat_2->id]);
            Subcategory::create(['name' => 'Relación de...', 'category_id' => $cat_2->id]);

        $cat_3 = Category::create(['name' => 'Gastos']);
            Subcategory::create(['name' => 'G. F.', 'category_id' => $cat_3->id]);
            Subcategory::create(['name' => 'G. A.', 'category_id' => $cat_3->id]);
            Subcategory::create(['name' => 'Otros', 'category_id' => $cat_3->id]);
    }
}
