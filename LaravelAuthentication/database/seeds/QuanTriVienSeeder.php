<?php

use Illuminate\Database\Seeder;

class QuanTriVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\QuanTriVien::create(['ten_dang_nhap'=>'admin','mat_khau'=>Hash::make('123456'),'ho_ten'=>'Quan tri vien']);
    }
}
