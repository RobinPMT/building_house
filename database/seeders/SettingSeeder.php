<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $data = [
        [
            'name'      => 'Số điện thoại',
            'key'       => 'phone',
            'value'     => '1900 63 63 66',
            'active'    => 1
        ],
        [
            'name'      => 'Email',
            'key'       => 'mail',
            'value'     => 'info@consolar.vn',
            'active'    => 1
        ],
        [
            'name'      => 'Địa chỉ',
            'key'       => 'address',
            'value'     => '224, Mai Chí Thọ, P. An Phú, TP. Thủ Đức, TP.HCM',
            'active'    => 1
        ]
    ];

    public function run()
    {
        Setting::insert($this->data);
    }
}
