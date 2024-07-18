<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;


class ChenThanhVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ho = ['Nguyễn', 'Lê', 'Phan', 'Đỗ', 'Hồ', 'Võ', 'Bùi'];
        $lot = ['Thị', 'Văn', 'Đức', 'Ngọc', 'Hoàng', 'Minh', 'Kim',''];
        $ten = ['Tâm', 'Thảo', 'Hải', 'Hòa', 'Hảo', 'Thanh', 'Tú', 'Hậu', 'Phương'];
        for($i=0; $i<100; $i++){
            $ht = Arr::random($ho). ' ' . Arr::random($lot).' '. Arr::random($ten);
                DB::table('thanhvien')->insert([
                    'hoTen'=>$ht,
                    'email'=>Str::random (5).'@gmail.com',
                    'password' => bcrypt('hehe')
            ]);
        }//for
    }
}
