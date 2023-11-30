<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models as Database;
use App\Models\Products;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Schema::disableForeignKeyConstraints();
        DB::table('products')->truncate();

        $products = [
            [
                'Đồng hồ Philippe Auguste PA5008H', '2', 'Đồng hồ cơ', 'dong-ho-co13-119511.jpg', 'Philippe Auguste', '10778400',
                'Đường kính mặt
            40 mm
            Chống nước
            5 ATM
            Chất liệu mặt
            Tráng Sapphire
            Năng lượng sử dụng
            Automatic ( cơ tự động )
            Size dây
            20 mm
            Chất liệu dây
            Stainless Steel
            Chất liệu vỏ
            Stainless Steel
            Kiểu dáng
            Đồng hồ Nam
            Xuất xứ
            Áo
            Chế độ bảo hành
            Bảo hành quốc tế 02 năm
            Philippe Auguste sử dụng chủ yếu hai loại bộ máy đồng hồ của Nhật Bản là: Bộ máy Quartz (máy Miyota) và bộ máy Automatic (máy Seiko). Cả hai loại máy này đều đạt chuẩn chất lượng Nhật Bản, độ bền bỉ cao, vận hành tốt, dễ thay thế linh kiện hoặc sửa chữa và giá thành rất hợp lý.
             Philippe Auguste sử dụng bộ máy đồng hồ đạt chuẩn Nhật Bản
             Philippe Auguste sử dụng bộ máy đồng hồ đạt chuẩn Nhật Bản
             Chất liệu chế tác cao cấp
             Đồng hồ Philippe Auguste sử dụng các chất liệu được đánh giá khá tốt để chế tác sản phẩm, tiêu biểu có thể kể đến như: Thép không gỉ 316L, kính Sapphire, dây da bò,... Bên cạnh đó, hãng còn ứng dụng nhiều công nghệ hiện đại, tiên tiến giúp nâng cao trải nghiệm của người dùng.
             Dựa vào hai yếu tố trên, có thể thấy đồng hồ Philippe Auguste là một trong những cái tên xứng đáng để người dùng sở hữu trong “giỏ hàng" của mình bởi sự chất lượng từ vật liệu chế tác đến bộ máy bên trong.',
            'còn hàng', '1'
            ],
            // --------- //
            ['Đồng hồ Orient Bambino 41.5 mm Nam RA-AK0801S10B', '2', 'Đồng hồ cơ', 'orient-ra-ak0801s10b-nam-thumb-600x600.jpg', 'ORIENT', '11130000','

            Đối tượng sử dụng:Nam
            Đường kính mặt:41.5 mm
            Dây đeo: Da tổng hợp
            Độ rộng dây:21 mm
            Khung viền:Thép không gỉ
            Độ dày mặt:14.2 mm
            Chất liệu mặt kính:Kính khoáng (Mineral)
            Tên bộ máy:Caliber F6724
            Thời gian trữ dây cót:Khoảng 40 tiếng
            Thời gian sử dụng pin: Không có
            Kháng nước:3 ATM - Rửa tay, đi mưa
            Tiện ích:Đồng hồ Sun & MoonLịch ngày - thứ
            Nguồn năng lượng:Cơ tự động
            Loại máy:Cơ tự động
            Loại pin sử dụng:Không có
            Bộ sưu tập:Bambino
            Sản xuất tại:Thái Lan
            Thương hiệu của:Nhật Bản
            Hãng:ORIENT
            Sang trọng và đẳng cấp
            Đồng hồ Orient đem đến những sản phẩm ấn tượng chinh phục người nhìn một cách nhanh chóng. Đồng hồ Orient với những chất liệu cao cấp bóng bẩy nâng tầm đẳng cấp cho người sở hữu, phù hợp với doanh nhân thành đạt, dân văn phòng hay các giám đốc công ty. Phong cách thời thượng, sang trọng đầy sức thu hút đến từ đồng hồ Orient chắc chắn sẽ khiến bạn luôn hãnh diện với những người xung quanh.

            ', 'còn hàng', '1'
            ],
            // --------- //
            ['Đồng hồ Orient Bambino 41.5 mm Nam RA-AK0801S10B', '2', 'Đồng hồ cơ', 'img1.jpg', 'ORIENT', '11130000','

            Đối tượng sử dụng:Nam
            Đường kính mặt:41.5 mm
            Dây đeo: Da tổng hợp
            Độ rộng dây:21 mm
            Khung viền:Thép không gỉ
            Độ dày mặt:14.2 mm
            Chất liệu mặt kính:Kính khoáng (Mineral)
            Tên bộ máy:Caliber F6724
            Thời gian trữ dây cót:Khoảng 40 tiếng
            Thời gian sử dụng pin: Không có
            Kháng nước:3 ATM - Rửa tay, đi mưa
            Tiện ích:Đồng hồ Sun & MoonLịch ngày - thứ
            Nguồn năng lượng:Cơ tự động
            Loại máy:Cơ tự động
            Loại pin sử dụng:Không có
            Bộ sưu tập:Bambino
            Sản xuất tại:Thái Lan
            Thương hiệu của:Nhật Bản
            Hãng:ORIENT
            Sang trọng và đẳng cấp
            Đồng hồ Orient đem đến những sản phẩm ấn tượng chinh phục người nhìn một cách nhanh chóng. Đồng hồ Orient với những chất liệu cao cấp bóng bẩy nâng tầm đẳng cấp cho người sở hữu, phù hợp với doanh nhân thành đạt, dân văn phòng hay các giám đốc công ty. Phong cách thời thượng, sang trọng đầy sức thu hút đến từ đồng hồ Orient chắc chắn sẽ khiến bạn luôn hãnh diện với những người xung quanh.

            ', 'còn hàng', '1'
            ],
            //
            [
                'Đồng hồ Philippe Auguste PA5008H', '2', 'Đồng hồ cơ', 'rolex-black.jpg', 'Philippe Auguste', '10778400',
                'Đường kính mặt
            40 mm
            Chống nước
            5 ATM
            Chất liệu mặt
            Tráng Sapphire
            Năng lượng sử dụng
            Automatic ( cơ tự động )
            Size dây
            20 mm
            Chất liệu dây
            Stainless Steel
            Chất liệu vỏ
            Stainless Steel
            Kiểu dáng
            Đồng hồ Nam
            Xuất xứ
            Áo
            Chế độ bảo hành
            Bảo hành quốc tế 02 năm
            Philippe Auguste sử dụng chủ yếu hai loại bộ máy đồng hồ của Nhật Bản là: Bộ máy Quartz (máy Miyota) và bộ máy Automatic (máy Seiko). Cả hai loại máy này đều đạt chuẩn chất lượng Nhật Bản, độ bền bỉ cao, vận hành tốt, dễ thay thế linh kiện hoặc sửa chữa và giá thành rất hợp lý.
             Philippe Auguste sử dụng bộ máy đồng hồ đạt chuẩn Nhật Bản
             Philippe Auguste sử dụng bộ máy đồng hồ đạt chuẩn Nhật Bản
             Chất liệu chế tác cao cấp
             Đồng hồ Philippe Auguste sử dụng các chất liệu được đánh giá khá tốt để chế tác sản phẩm, tiêu biểu có thể kể đến như: Thép không gỉ 316L, kính Sapphire, dây da bò,... Bên cạnh đó, hãng còn ứng dụng nhiều công nghệ hiện đại, tiên tiến giúp nâng cao trải nghiệm của người dùng.
             Dựa vào hai yếu tố trên, có thể thấy đồng hồ Philippe Auguste là một trong những cái tên xứng đáng để người dùng sở hữu trong “giỏ hàng" của mình bởi sự chất lượng từ vật liệu chế tác đến bộ máy bên trong.',
            'còn hàng', '1'
            ],
            // --------- //
            ['Đồng hồ Orient Bambino 41.5 mm Nam RA-AK0801S10B', '2', 'Đồng hồ cơ', 'rolex-blu.jpg', 'ORIENT', '11130000','

            Đối tượng sử dụng:Nam
            Đường kính mặt:41.5 mm
            Dây đeo: Da tổng hợp
            Độ rộng dây:21 mm
            Khung viền:Thép không gỉ
            Độ dày mặt:14.2 mm
            Chất liệu mặt kính:Kính khoáng (Mineral)
            Tên bộ máy:Caliber F6724
            Thời gian trữ dây cót:Khoảng 40 tiếng
            Thời gian sử dụng pin: Không có
            Kháng nước:3 ATM - Rửa tay, đi mưa
            Tiện ích:Đồng hồ Sun & MoonLịch ngày - thứ
            Nguồn năng lượng:Cơ tự động
            Loại máy:Cơ tự động
            Loại pin sử dụng:Không có
            Bộ sưu tập:Bambino
            Sản xuất tại:Thái Lan
            Thương hiệu của:Nhật Bản
            Hãng:ORIENT
            Sang trọng và đẳng cấp
            Đồng hồ Orient đem đến những sản phẩm ấn tượng chinh phục người nhìn một cách nhanh chóng. Đồng hồ Orient với những chất liệu cao cấp bóng bẩy nâng tầm đẳng cấp cho người sở hữu, phù hợp với doanh nhân thành đạt, dân văn phòng hay các giám đốc công ty. Phong cách thời thượng, sang trọng đầy sức thu hút đến từ đồng hồ Orient chắc chắn sẽ khiến bạn luôn hãnh diện với những người xung quanh.

            ', 'còn hàng', '1'
            ],
            // --------- //
            ['Đồng hồ Rolex Nam ', '2', 'Đồng hồ cơ', 'rolex.jpg', 'ROLEX', '11130000','

            Đối tượng sử dụng:Nam
            Đường kính mặt:41.5 mm
            Dây đeo: Da tổng hợp
            Độ rộng dây:21 mm
            Khung viền:Thép không gỉ
            Độ dày mặt:14.2 mm
            Chất liệu mặt kính:Kính khoáng (Mineral)
            Tên bộ máy:Caliber F6724
            Thời gian trữ dây cót:Khoảng 40 tiếng
            Thời gian sử dụng pin: Không có
            Kháng nước:3 ATM - Rửa tay, đi mưa
            Tiện ích:Đồng hồ Sun & MoonLịch ngày - thứ
            Nguồn năng lượng:Cơ tự động
            Loại máy:Cơ tự động
            Loại pin sử dụng:Không có
            Bộ sưu tập:Bambino
            Sản xuất tại:Thái Lan
            Thương hiệu của:Nhật Bản
            Hãng:ORIENT
            Sang trọng và đẳng cấp
            Đồng hồ Orient đem đến những sản phẩm ấn tượng chinh phục người nhìn một cách nhanh chóng. Đồng hồ Orient với những chất liệu cao cấp bóng bẩy nâng tầm đẳng cấp cho người sở hữu, phù hợp với doanh nhân thành đạt, dân văn phòng hay các giám đốc công ty. Phong cách thời thượng, sang trọng đầy sức thu hút đến từ đồng hồ Orient chắc chắn sẽ khiến bạn luôn hãnh diện với những người xung quanh.

            ', 'còn hàng', '1'
            ],
        ];





        // \App\Models\Products::factory()->count(30)->create();
        // CREATE
        foreach ($products as $product) {
            Database\Products::create([
                'name' => $product[0],
                'category_id' => $product[1],
                'type' => $product[2],
                'image' => $product[3],
                'brand' => $product[4],
                'price' => $product[5],
                'description' => $product[6],
                'status' => $product[7],
                'feature' => $product[8]
            ]);
        }

        Schema::enableForeignKeyConstraints();
    }
}
