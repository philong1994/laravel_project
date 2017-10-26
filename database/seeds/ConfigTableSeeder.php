<?php

use Illuminate\Database\Seeder;

class ConfigTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('config')->insert(
        		[
					'name_site'           => 'QuocTuan.Info',
					'title'               => 'Quốc Tuấn',
					'keywords'            => 'lập trình php,lập trình web',
					'description'         => 'Trung tâm đào tạo lập trình',
					'copyright'           => 'QuocTuan.Info',
					'author'              => 'Vũ Quốc Tuấn',
					'dc_created'          => '2017-08-30',
					'dc_rights_copyright' => 'QuocTuan.Info',
					'dc_creator_name'     => 'Vũ Quốc Tuấn',
					'dc_creator_email'    => 'contact.quoctuan@gmail.com',
					'dc_identifier'       => 'http://quoctuan.info/',
					'dc_language'         => 'vi-VN',
					'robots'              => 'index,follow',
					'geo_placename'       => 'Hồ Chí Minh,Việt Nam',
					'geo_region'          => 'VN-HCM',
					'geo_position'        => '10.823099;106.629664',
					'icbm'                => '10.823099, 106.629664',
					'revisit_after'       => 'days',
					'host'                => 'smtp.gmail.com',
					'email'               => 'abc@gmail.com',
					'pass'                => '12345',
					'port'                => 465,
					'item_page_news'      => 10,
					'item_page_product'   => 10,
					'facebook'            => 'https://www.facebook.com/',
					'youtube'             => 'https://www.youtube.com/',
					'twitter'             => 'https://twitter.com/',
					'linkedin'            => 'https://vn.linkedin.com/',
					'google_plus'         => 'https://plus.google.com/',
					'created_at'          => new \DateTime(),
        		]
        	);
    }
}
