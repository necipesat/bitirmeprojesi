<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateDB extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
        Schema::create('p_blog', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable();
            $table->string('name')->nullable();
            $table->integer('view_count')->default(0);
            $table->integer('category_id')->nullable();
            $table->string('tag')->nullable();
            $table->string('more_link')->nullable();
            $table->string('author')->nullable();
            $table->integer('slug_id')->nullable();
            $table->text('seo_title')->nullable();
            $table->text('seo_description')->nullable();
            $table->text('keywords')->nullable();
            $table->text('short_description')->nullable();
            $table->integer('uid')->nullable();
            $table->integer('lang_id')->default(1);
            $table->integer('order_id')->nullable();
            $table->text('content')->nullable();
            $table->text('thumbnails')->nullable();
            $table->tinyInteger('publish')->default(0);
            $table->tinyInteger('deleted')->default(0);
            $table->integer('created_by')->nullable();
            $table->timestamp('create_date')->useCurrent();
        });

        Schema::create('p_category', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable();
            $table->integer('module_id')->nullable();
            $table->string('name')->nullable();
            $table->integer('slug_id')->nullable();
            $table->text('seo_title')->nullable();
            $table->text('seo_description')->nullable();
            $table->text('keywords')->nullable();
            $table->integer('lang_id')->default(1);
            $table->integer('order_id')->nullable();
            $table->integer('root_id')->nullable();
            $table->integer('uid')->nullable();
            $table->text('thumbnails')->nullable();
            $table->text('content')->nullable();
            $table->tinyInteger('publish')->default(0);
            $table->tinyInteger('deleted')->default(0);
            $table->integer('created_by')->nullable();
            $table->timestamp('create_date')->useCurrent();
        });

        Schema::create('p_lang', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable();
            $table->string('short')->nullable();
            $table->string('name')->nullable();
            $table->tinyInteger('deleted')->default(0);
            $table->timestamp('create_date')->useCurrent();
        });

        DB::table('p_lang')->insert([
            ['short' => 'tr', 'name' => 'Türkçe'],
            ['short' => 'en', 'name' => 'English'],
        ]);

        Schema::create('p_log', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable();
            $table->text('text')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('ip_address')->nullable();
            $table->timestamp('create_date')->useCurrent();
        });

        Schema::create('p_menu', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable();
            $table->string('name')->nullable();
            $table->integer('slug_id')->nullable();
            $table->tinyInteger('new_window')->nullable();
            $table->string('position')->nullable();
            $table->integer('lang_id')->default(1);
            $table->integer('uid')->nullable();
            $table->integer('root_id')->nullable();
            $table->integer('order_id')->nullable();
            $table->tinyInteger('deleted')->default(0);
            $table->integer('created_by')->nullable();
            $table->timestamp('create_date')->useCurrent();
        });

        Schema::create('p_message', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable();
            $table->string('email')->nullable();
            $table->string('type')->nullable();
            $table->text('content')->nullable();
            $table->string('ip_address')->nullable();
            $table->tinyInteger('deleted')->default(0);
            $table->timestamp('create_date')->useCurrent();
        });

        Schema::create('p_modules', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable();
            $table->string('name')->nullable();
            $table->string('schema_name')->nullable();
            $table->integer('order_id')->nullable();
            $table->string('url')->nullable();
            $table->text('svg')->nullable();
            $table->text('thumbnail_settings')->nullable();
            $table->tinyInteger('active')->default(1);
            $table->tinyInteger('categorizable')->default(0);
            $table->timestamp('create_date')->useCurrent();
        });

        DB::table('p_modules')->insert([
            [
                'name' => 'Blog', 
                'schema_name' => 'p_blog', 
                'url' => '/blog', 
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">        <rect x="0" y="0" width="24" height="24"/>        <path d="M5.5,2 L18.5,2 C19.3284271,2 20,2.67157288 20,3.5 L20,6.5 C20,7.32842712 19.3284271,8 18.5,8 L5.5,8 C4.67157288,8 4,7.32842712 4,6.5 L4,3.5 C4,2.67157288 4.67157288,2 5.5,2 Z M11,4 C10.4477153,4 10,4.44771525 10,5 C10,5.55228475 10.4477153,6 11,6 L13,6 C13.5522847,6 14,5.55228475 14,5 C14,4.44771525 13.5522847,4 13,4 L11,4 Z" fill="#000000" opacity="0.3"/>        <path d="M5.5,9 L18.5,9 C19.3284271,9 20,9.67157288 20,10.5 L20,13.5 C20,14.3284271 19.3284271,15 18.5,15 L5.5,15 C4.67157288,15 4,14.3284271 4,13.5 L4,10.5 C4,9.67157288 4.67157288,9 5.5,9 Z M11,11 C10.4477153,11 10,11.4477153 10,12 C10,12.5522847 10.4477153,13 11,13 L13,13 C13.5522847,13 14,12.5522847 14,12 C14,11.4477153 13.5522847,11 13,11 L11,11 Z M5.5,16 L18.5,16 C19.3284271,16 20,16.6715729 20,17.5 L20,20.5 C20,21.3284271 19.3284271,22 18.5,22 L5.5,22 C4.67157288,22 4,21.3284271 4,20.5 L4,17.5 C4,16.6715729 4.67157288,16 5.5,16 Z M11,18 C10.4477153,18 10,18.4477153 10,19 C10,19.5522847 10.4477153,20 11,20 L13,20 C13.5522847,20 14,19.5522847 14,19 C14,18.4477153 13.5522847,18 13,18 L11,18 Z" fill="#000000"/>    </g></svg>', 
                'thumbnail_settings' => '[{"title": "Fotoğraf", "name": "photo", "width": "100", "height": "200"}, {"title": "Öne Çıkan Fotoğraf", "name": "featured", "width": "150", "height": "250"}]', 
                'categorizable' => true, 
            ],
            [
                'name' => 'Kategoriler',
                'schema_name' => 'p_category', 
                'url' => '/category', 
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">        <rect x="0" y="0" width="24" height="24"/>        <path d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z" fill="#000000"/>        <path d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z" fill="#000000" opacity="0.3"/>    </g></svg>', 
                'thumbnail_settings' => '[{"title": "Fotoğraf", "name": "photo", "width": "100", "height": "200"}, {"title": "Öne Çıkan Fotoğraf", "name": "featured", "width": "150", "height": "250"}]', 
                'categorizable' => false, 
            ],
            [
                'name' => 'Etiketler', 
                'schema_name' => 'p_tag', 
                'url' => '/tag', 
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">        <rect x="0" y="0" width="24" height="24"/>        <rect fill="#000000" x="2" y="4" width="19" height="4" rx="1"/>        <path d="M3,10 L6,10 C6.55228475,10 7,10.4477153 7,11 L7,19 C7,19.5522847 6.55228475,20 6,20 L3,20 C2.44771525,20 2,19.5522847 2,19 L2,11 C2,10.4477153 2.44771525,10 3,10 Z M10,10 L13,10 C13.5522847,10 14,10.4477153 14,11 L14,19 C14,19.5522847 13.5522847,20 13,20 L10,20 C9.44771525,20 9,19.5522847 9,19 L9,11 C9,10.4477153 9.44771525,10 10,10 Z M17,10 L20,10 C20.5522847,10 21,10.4477153 21,11 L21,19 C21,19.5522847 20.5522847,20 20,20 L17,20 C16.4477153,20 16,19.5522847 16,19 L16,11 C16,10.4477153 16.4477153,10 17,10 Z" fill="#000000" opacity="0.3"/>    </g></svg>',
                'thumbnail_settings' => null, 
                'categorizable' => false, 
            ],
            [
                'name' => 'Markalar', 
                'schema_name' => 'p_brand', 
                'url' => '/brand', 
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">        <rect x="0" y="0" width="24" height="24"/>        <polygon fill="#000000" opacity="0.3" points="5 3 19 3 23 8 1 8"/>        <polygon fill="#000000" points="23 8 12 20 1 8"/>    </g></svg>', 
                'thumbnail_settings' => '[{"title": "Fotoğraf", "name": "photo", "width": "100", "height": "200"}, {"title": "Öne Çıkan Fotoğraf", "name": "featured", "width": "150", "height": "250"}]',
                'categorizable' => false, 
            ],
            [
                'name' => 'Menüler', 
                'schema_name' => 'p_menu', 
                'url' => '/menu', 
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">        <rect x="0" y="0" width="24" height="24"/>        <rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5"/>        <path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L18.5,10 C19.3284271,10 20,10.6715729 20,11.5 C20,12.3284271 19.3284271,13 18.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" fill="#000000" opacity="0.3"/>    </g></svg>',
                'thumbnail_settings' => null, 
                'categorizable' => false, 
            ],
            [
                'name' => 'Mesajlar', 
                'schema_name' => 'p_message', 
                'url' => '/message', 
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">        <rect x="0" y="0" width="24" height="24"/>        <path d="M5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000"/>    </g></svg>',
                'thumbnail_settings' => null, 
                'categorizable' => false, 
            ],
            [
                'name' => 'Sayfalar', 
                'schema_name' => 'p_page', 
                'url' => '/page', 
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">        <rect x="0" y="0" width="24" height="24"/>        <path d="M13.6855025,18.7082217 C15.9113859,17.8189707 18.682885,17.2495635 22,17 C22,16.9325178 22,13.1012863 22,5.50630526 L21.9999762,5.50630526 C21.9999762,5.23017604 21.7761292,5.00632908 21.5,5.00632908 C21.4957817,5.00632908 21.4915635,5.00638247 21.4873465,5.00648922 C18.658231,5.07811173 15.8291155,5.74261533 13,7 C13,7.04449645 13,10.79246 13,18.2438906 L12.9999854,18.2438906 C12.9999854,18.520041 13.2238496,18.7439052 13.5,18.7439052 C13.5635398,18.7439052 13.6264972,18.7317946 13.6855025,18.7082217 Z" fill="#000000"/>        <path d="M10.3144829,18.7082217 C8.08859955,17.8189707 5.31710038,17.2495635 1.99998542,17 C1.99998542,16.9325178 1.99998542,13.1012863 1.99998542,5.50630526 L2.00000925,5.50630526 C2.00000925,5.23017604 2.22385621,5.00632908 2.49998542,5.00632908 C2.50420375,5.00632908 2.5084219,5.00638247 2.51263888,5.00648922 C5.34175439,5.07811173 8.17086991,5.74261533 10.9999854,7 C10.9999854,7.04449645 10.9999854,10.79246 10.9999854,18.2438906 L11,18.2438906 C11,18.520041 10.7761358,18.7439052 10.4999854,18.7439052 C10.4364457,18.7439052 10.3734882,18.7317946 10.3144829,18.7082217 Z" fill="#000000" opacity="0.3"/>    </g></svg>', 
                'thumbnail_settings' => '[{"title": "Fotoğraf", "name": "photo", "width": "400", "height": "500"}]',
                'categorizable' => false, 
            ],
            [
                'name' => 'Çeviriler', 
                'schema_name' => 'p_translate', 
                'url' => '/translate', 
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"> <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <rect x="0" y="0" width="24" height="24"/> <path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3"/> <path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000"/> </g> </svg>', 
                'thumbnail_settings' => null, 
                'categorizable' => false
            ],
            [
                'name' => 'Ayarlar', 
                'schema_name' => 'p_settings', 
                'url' => '/settings', 
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"> <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"/><path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"/></g></svg>', 
                'thumbnail_settings' => null, 
                'categorizable' => false
            ],
            [
                'name' => 'Üyeler', 
                'schema_name' => 'users', 
                'url' => '/customer', 
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"> <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <polygon points="0 0 24 0 24 24 0 24"/> <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/> <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/> </g> </svg>', 
                'thumbnail_settings' => null,
                'categorizable' => false
            ],
        ]);

        Schema::create('p_page', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable();
            $table->string('name')->nullable();
            $table->integer('slug_id')->nullable();
            $table->text('seo_title')->nullable();
            $table->text('seo_description')->nullable();
            $table->text('keywords')->nullable();
            $table->text('short_description')->nullable();
            $table->integer('uid')->nullable();
            $table->integer('root_id')->nullable();
            $table->integer('lang_id')->default(1);
            $table->integer('order_id')->nullable();
            $table->text('content')->nullable();
            $table->text('thumbnails')->nullable();
            $table->tinyInteger('fixed')->nullable();
            $table->tinyInteger('publish')->default(0);
            $table->tinyInteger('deleted')->default(0);
            $table->integer('created_by')->nullable();
            $table->timestamp('create_date')->useCurrent();
        });


        Schema::create('p_slug', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable();
            $table->integer('module_id')->nullable();
            $table->string('name')->nullable();
            $table->tinyInteger('deleted')->default(0);
            $table->timestamp('create_date')->useCurrent();
        });

        Schema::create('p_tag', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable();
            $table->string('name')->nullable();
            $table->integer('slug_id')->nullable();
            $table->text('seo_title')->nullable();
            $table->text('seo_description')->nullable();
            $table->text('keywords')->nullable();
            $table->integer('lang_id')->default(1);
            $table->integer('order_id')->nullable();
            $table->integer('uid')->nullable();
            $table->text('content')->nullable();
            $table->tinyInteger('publish')->default(0);
            $table->tinyInteger('deleted')->default(0);
            $table->integer('created_by')->nullable();
            $table->timestamp('create_date')->useCurrent();
        });


        Schema::create('p_users', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->integer('group_id')->nullable();
            $table->tinyInteger('deleted')->default(0);
            $table->integer('created_by')->nullable();
            $table->timestamp('create_date')->useCurrent();
        });

        Schema::create('p_translate', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable();
            $table->string('language')->nullable();
            $table->string('key')->nullable();
            $table->text('value')->nullable();
            $table->tinyInteger('deleted')->default(0);
            $table->integer('created_by')->nullable();
            $table->timestamp('create_date')->useCurrent();
        });

        Schema::create('p_settings', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable();
            $table->string('name')->nullable();
            $table->string('group_name')->nullable();
            $table->text('content')->nullable();
            $table->tinyInteger('deleted')->default(0);
            $table->integer('created_by')->nullable();
            $table->timestamp('create_date')->useCurrent();
        });

        DB::table('p_settings')->insert([
            [
                'name' => 'Site Ayarları', 
                'group_name' => 'site_config', 
                'content' => '{"title":"","keywords":"","description":""}',
                'deleted' => false,
                'created_by' => -1
            ],
            [
                'name' => 'Sosyal Medya Ayarları', 
                'group_name' => 'site_social', 
                'content' => '{"facebook":"","instagram":"","twitter":"","linkedin":"","youtube":"","pinterest":""}',
                'deleted' => false,
                'created_by' => -1
            ],
            [
                'name' => 'İletişim Ayarları', 
                'group_name' => 'site_contact', 
                'content' => '{"phone":"","mail":"","address":""}',
                'deleted' => false,
                'created_by' => -1
            ],
        ]);

        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('password')->nullable();
            $table->integer('group_id')->nullable();
            $table->tinyInteger('confirm')->default(0);
            $table->tinyInteger('deleted')->default(0);
            $table->timestamp('create_date')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
