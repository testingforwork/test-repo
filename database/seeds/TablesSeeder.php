<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
//use todoparrot\Todolist;

use App\District;
use App\Customer;
use App\Category;
use Illuminate\Support\Facades\DB;

class TablesSeeder extends Seeder {

    public function run() {
        DB::table('Customer')->delete();
        DB::table('District')->delete();
        DB::table('Category')->delete();

        District::create([
            'id' => 'DST01',
            'distName' => 'Tusen Wan'
        ]);

        Customer::create([
            'id' => 'CUS01',
            'custName' => 'FTY',
            'custGender' => 'M',
            'custDOB' => '01-01-2015',
            'custTel' => '91234567',
            'custAddr' => 'Hong Kong',
            'distId' => 'DST01'
        ]);

        Category::create([
            'id' => 'CAT01',
            'catName' => 'Table'
        ]);

        Category::create([
            'id' => 'CAT02',
            'catName' => 'Good Table',
            'catParentId' => 'CAT01'
        ]);

        Category::create([
            'id' => 'CAT03',
            'catName' => 'Bad Table',
            'catParentId' => 'CAT01'
        ]);
    }
}