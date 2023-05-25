<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Smart_adsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // add element to table smart_ads
        DB::table('smart_ads')->insert([
            'id' => 1,
            'name' => 'FirstRow',
            'slug' => 'FirstRow',
            'body' => '<a class="fr-container" href="http://firstrow2.es" target="_blank">
                            <img src="https://e1.pxfuel.com/desktop-wallpaper/942/595/desktop-wallpaper-38-android-nature-vertical-nature.jpg" 
                            alt="firstrow image" width="250px" height="400px">
                            <div class="fr-centered">
                                <h1 style="color:white;">
                                    FirstRow
                                </h1>
                                <p>
                                    Live the experience
                                </p>
                            </div>
                        </a>',
            'adType' => 'HTML',
            'placements' => '[{"style": "float:left;", "position": "afterbegin", "selector": ".firstrow"}]',
            'enabled' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('smart_ads')->insert([
            'id' => 2,
            'name' => 'IBM',
            'slug' => 'IBM',
            'body' => '<a href="https://www.ibm.com" target="_blank">
                            <img src="https://uploads-ssl.webflow.com/62176230ce1307d5713ca09a/6319bd3c418f6d8228d507c8_20.gif" alt="IBM animated banner">
                        </a>',
            'adType' => 'HTML',
            'placements' => '[{"style": "position: relative; display: flex; justify-content: center; margin-bottom: 20px;", "position": "beforebegin", "selector": ".ad-home"}]',
            'enabled' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('smart_ads')->insert([
            'id' => 3,
            'name' => 'microondas',
            'slug' => 'microondas',
            'body' => '<a href="https://youtu.be/dQw4w9WgXcQ" target="_blank">
                            <img src="https://blog.panasonic.es/wp-content/uploads/2017/12/paco_MW.jpg" alt="anuncio microondas" width="350px" heigth="350px" class="blink">
                        </a>',
            'adType' => 'HTML',
            'placements' => '[{"style": "float:left; position:static;margin-left:30px; margin-right:-100px;", "position": "beforebegin", "selector": ".ad-product"}]',
            'enabled' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('smart_ads')->insert([
            'id' => 4,
            'name' => 'Wordpress',
            'slug' => 'Wordpress',
            'body' => '<a href="https://wordpress.com/" target="_blank">
                            <img src="https://uploads-ssl.webflow.com/62176230ce1307d5713ca09a/63343932f69a8ed116ac841f_cta-wordpress.webp" loading="lazy" alt="cta wordpress banner">
                        </a>',
            'adType' => 'HTML',
            'placements' => '[{"style": "float: right; margin: 10px;", "position": "afterbegin", "selector": ".ad-inside-right"}]',
            'enabled' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('smart_ads')->insert([
            'id' => 5,
            'name' => 'Gucci',
            'slug' => 'Gucci',
            'body' => '<a href="https://www.gucci.com" target="_blank">
                            <img src="https://uploads-ssl.webflow.com/62176230ce1307d5713ca09a/6334392303a6094613eb2482_brandi-image-gucci.webp" loading="lazy" alt="gucci brand image banner">
                        </a>',
            'adType' => 'HTML',
            'placements' => '[{"style": "position: relative; display: flex; justify-content: center; margin-bottom: 20px; z-index: 1;", "position": "afterbegin", "selector": ".ad-before"}]',
            'enabled' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
