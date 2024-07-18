<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\dienthoai>
 */
class dienthoaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tenDT = $this->faker->randomElement(['Oppo XA', 'Iphone XS Max', 'Nokia Pro']);
        
        if ($tenDT == 'Oppo XA') {
            $gia = $this->faker->numberBetween(700000, 1000000);
        } elseif ($tenDT == 'Iphone XS Max') {
            $gia = $this->faker->numberBetween(500000, 800000);
        } else {
            $gia = $this->faker->numberBetween(250000, 500000);
        }

        return [
            'tenDT' => $tenDT,
            'moTa' => $this->faker->text(50),
            'ngayCapNhat' => $this->faker->date(),
            'gia' => $gia,
            'giaKM' => $this->faker->numberBetween($gia * 0.8, $gia), // Giá khuyến mãi có thể thấp hơn hoặc bằng giá gốc
            'urlHinh' => $this->faker->imageUrl(640, 480, 'phones', true),
            'soLuongTonkho' => $this->faker->numberBetween(1, 100),
            'hot' => $this->faker->boolean(),
            'anHien' => $this->faker->boolean(),
            'created_at' => now(),
            'updated_at' => now(),
            'baiViet' => $this->faker->text(200),
            'ghiChu' => $this->faker->text(50),
            'idLoai' => $this->faker->numberBetween(1, 10),
        ];
    }
}
