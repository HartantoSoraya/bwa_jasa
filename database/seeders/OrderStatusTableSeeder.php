<?php

namespace Database\Seeders;

use App\Models\OrderStatus;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class OrderStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $order_status = [
            [
                'name' => 'Approved',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
                'deleted_at' => date('Y-m-d h:i:s'),
            ],
            [
                'name' => 'Progres',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
                'deleted_at' => date('Y-m-d h:i:s'),
            ],
            [
                'name' => 'Rejected',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
                'deleted_at' => date('Y-m-d h:i:s'),
            ],
            [
                'name' => 'Waiting',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
                'deleted_at' => date('Y-m-d h:i:s'),
            ],
        ];

        OrderStatus::insert($order_status);
    }
}
