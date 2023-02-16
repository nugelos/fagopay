<?php

namespace Database\Seeders;

use App\Models\Term;
use App\Models\TermCategory;
use App\Models\TermMeta;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TermSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $terms = array(
            array('id' => '1','title' => 'How To Attract Top Talent In Competitive Industries','slug' => 'how-to-attract-top-talent-in-competitive-industries','type' => 'blog','status' => '1','featured' => '1','lang' => 'en','comment_status' => '1','meta' => NULL,'created_at' => '2022-07-31 14:59:43','updated_at' => '2022-07-31 14:59:43'),
            array('id' => '2','title' => '5 New Insights You Should Know','slug' => '5-new-insights-you-should-know','type' => 'blog','status' => '1','featured' => '1','lang' => 'en','comment_status' => '1','meta' => NULL,'created_at' => '2022-07-31 15:00:23','updated_at' => '2022-07-31 15:00:23'),
            array('id' => '3','title' => 'Monteno How to make blockcahin','slug' => 'monteno-how-to-make-blockcahin','type' => 'blog','status' => '1','featured' => '1','lang' => 'en','comment_status' => '1','meta' => NULL,'created_at' => '2022-07-31 15:00:56','updated_at' => '2022-07-31 15:00:56')
        );

        Term::insert($terms);

        $term_metas = array(
            array('id' => '1','term_id' => '1','key' => 'excerpt','value' => 'Dolor sit amet consectetur adipisicing elit. Eligendi ab illo ad incidunt unde cumque magnam iure numquam sed dicta voluptatum corrupti nulla non culpa vitae velit, quae autem facilis nam in. Debitis recusandae ratione molestiae facere voluptatibus quo ipsum modi sapiente incidunt minima, reprehenderit, id harum sequi illo eius? Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus facilis minima amet provident dolorum. Odit explicabo sint rerum dicta ab asperiores voluptas! Excepturi, ad eligendi?'),
            array('id' => '4','term_id' => '1','key' => 'preview','value' => 'uploads/1/22/07/62e681659c5b43107221659273573.jpg'),
            array('id' => '5','term_id' => '1','key' => 'description','value' => '<p style="margin-right: 0px; margin-left: 0px; padding: 0px; line-height: 1.7; color: rgb(33, 37, 41); font-size: 16px; font-family: &quot;Noto Sans&quot;, sans-serif;">Dolor sit amet consectetur adipisicing elit. Eligendi ab illo ad incidunt unde cumque magnam iure numquam sed dicta voluptatum corrupti nulla non culpa vitae velit, quae autem facilis nam in. Debitis recusandae ratione molestiae facere voluptatibus quo ipsum modi sapiente incidunt minima, reprehenderit, id harum sequi illo eius? Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus facilis minima amet provident dolorum. Odit explicabo sint rerum dicta ab asperiores voluptas! Excepturi, ad eligendi?</p><blockquote class="text-center" style="padding: 0px; color: rgb(33, 37, 41); font-family: &quot;Noto Sans&quot;, sans-serif; font-style: normal; letter-spacing: normal; background-color: rgb(255, 255, 255);"><h2 class="block-code-text" style="margin: 40px 0px; padding: 0px; font-weight: 400; line-height: 1.5; font-size: 28px; font-family: Chivo, sans-serif; color: rgb(50, 50, 93); text-transform: capitalize; letter-spacing: 1px;">“ There’s Going After Top Talent, And Then There’s Going After Top Talent Within Highly-Competitive Industries. “</h2></blockquote><p class="mb-30" style="margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; line-height: 1.7; color: rgb(33, 37, 41); font-size: 16px; font-family: &quot;Noto Sans&quot;, sans-serif;">Amet consectetur adipisicing elit. Eligendi ab illo ad incidunt unde cumque magnam iure numquam sed dicta voluptatum corrupti nulla non culpa vitae velit, quae autem facilis nam in. Debitis recusandae ratione molestiae facere voluptatibus quo ipsum modi sapiente incidunt minima, reprehenderit, id harum sequi illo eius? Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, sunt aperiam libero dolore perspiciatis excepturi exercitationem alias dolorum architecto deserunt.</p>'),
            array('id' => '6','term_id' => '2','key' => 'excerpt','value' => 'Dolor sit amet consectetur adipisicing elit. Eligendi ab illo ad incidunt unde cumque magnam iure numquam sed dicta voluptatum corrupti nulla non culpa vitae velit, quae autem facilis nam in. Debitis recusandae ratione molestiae facere voluptatibus quo ipsum modi sapiente incidunt minima, reprehenderit, id harum sequi illo eius? Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus facilis minima amet provident dolorum. Odit explicabo sint rerum dicta ab asperiores voluptas! Excepturi, ad eligendi?'),
            array('id' => '7','term_id' => '2','key' => 'metatag','value' => NULL),
            array('id' => '8','term_id' => '2','key' => 'metadescription','value' => NULL),
            array('id' => '9','term_id' => '2','key' => 'preview','value' => 'uploads/1/22/07/62e68165722793107221659273573.jpg'),
            array('id' => '10','term_id' => '2','key' => 'description','value' => '<p style="margin-right: 0px; margin-left: 0px; padding: 0px; line-height: 1.7; color: rgb(33, 37, 41); font-size: 16px; font-family: &quot;Noto Sans&quot;, sans-serif;">Dolor sit amet consectetur adipisicing elit. Eligendi ab illo ad incidunt unde cumque magnam iure numquam sed dicta voluptatum corrupti nulla non culpa vitae velit, quae autem facilis nam in. Debitis recusandae ratione molestiae facere voluptatibus quo ipsum modi sapiente incidunt minima, reprehenderit, id harum sequi illo eius? Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus facilis minima amet provident dolorum. Odit explicabo sint rerum dicta ab asperiores voluptas! Excepturi, ad eligendi?</p><blockquote class="text-center" style="padding: 0px; color: rgb(33, 37, 41); font-family: &quot;Noto Sans&quot;, sans-serif; font-style: normal; letter-spacing: normal; background-color: rgb(255, 255, 255);"><h2 class="block-code-text" style="margin: 40px 0px; padding: 0px; font-weight: 400; line-height: 1.5; font-size: 28px; font-family: Chivo, sans-serif; color: rgb(50, 50, 93); text-transform: capitalize; letter-spacing: 1px;">“ There’s Going After Top Talent, And Then There’s Going After Top Talent Within Highly-Competitive Industries. “</h2></blockquote><p class="mb-30" style="margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; line-height: 1.7; color: rgb(33, 37, 41); font-size: 16px; font-family: &quot;Noto Sans&quot;, sans-serif;">Amet consectetur adipisicing elit. Eligendi ab illo ad incidunt unde cumque magnam iure numquam sed dicta voluptatum corrupti nulla non culpa vitae velit, quae autem facilis nam in. Debitis recusandae ratione molestiae facere voluptatibus quo ipsum modi sapiente incidunt minima, reprehenderit, id harum sequi illo eius? Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, sunt aperiam libero dolore perspiciatis excepturi exercitationem alias dolorum architecto deserunt.</p>'),
            array('id' => '11','term_id' => '3','key' => 'excerpt','value' => 'Dolor sit amet consectetur adipisicing elit. Eligendi ab illo ad incidunt unde cumque magnam iure numquam sed dicta voluptatum corrupti nulla non culpa vitae velit, quae autem facilis nam in. Debitis recusandae ratione molestiae facere voluptatibus quo ipsum modi sapiente incidunt minima, reprehenderit, id harum sequi illo eius? Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus facilis minima amet provident dolorum. Odit explicabo sint rerum dicta ab asperiores voluptas! Excepturi, ad eligendi?'),
            array('id' => '12','term_id' => '3','key' => 'metatag','value' => NULL),
            array('id' => '13','term_id' => '3','key' => 'metadescription','value' => NULL),
            array('id' => '14','term_id' => '3','key' => 'preview','value' => 'uploads/1/22/07/62e6816541fb23107221659273573.jpg'),
            array('id' => '15','term_id' => '3','key' => 'description','value' => '<p style="margin-right: 0px; margin-left: 0px; padding: 0px; line-height: 1.7; color: rgb(33, 37, 41); font-size: 16px; font-family: &quot;Noto Sans&quot;, sans-serif;">Dolor sit amet consectetur adipisicing elit. Eligendi ab illo ad incidunt unde cumque magnam iure numquam sed dicta voluptatum corrupti nulla non culpa vitae velit, quae autem facilis nam in. Debitis recusandae ratione molestiae facere voluptatibus quo ipsum modi sapiente incidunt minima, reprehenderit, id harum sequi illo eius? Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus facilis minima amet provident dolorum. Odit explicabo sint rerum dicta ab asperiores voluptas! Excepturi, ad eligendi?</p><blockquote class="text-center" style="padding: 0px; color: rgb(33, 37, 41); font-family: &quot;Noto Sans&quot;, sans-serif; font-style: normal; letter-spacing: normal; background-color: rgb(255, 255, 255);"><h2 class="block-code-text" style="margin: 40px 0px; padding: 0px; font-weight: 400; line-height: 1.5; font-size: 28px; font-family: Chivo, sans-serif; color: rgb(50, 50, 93); text-transform: capitalize; letter-spacing: 1px;">“ There’s Going After Top Talent, And Then There’s Going After Top Talent Within Highly-Competitive Industries. “</h2></blockquote><p class="mb-30" style="margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; line-height: 1.7; color: rgb(33, 37, 41); font-size: 16px; font-family: &quot;Noto Sans&quot;, sans-serif;">Amet consectetur adipisicing elit. Eligendi ab illo ad incidunt unde cumque magnam iure numquam sed dicta voluptatum corrupti nulla non culpa vitae velit, quae autem facilis nam in. Debitis recusandae ratione molestiae facere voluptatibus quo ipsum modi sapiente incidunt minima, reprehenderit, id harum sequi illo eius? Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, sunt aperiam libero dolore perspiciatis excepturi exercitationem alias dolorum architecto deserunt.</p>')
        );
        TermMeta::insert($term_metas);
    }
}