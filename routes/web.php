<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view ('Home', [
        "title" => "HOME"    ]);
});



Route::get('/about', function () {
    $about_posts = [
        [
        "judul" => "Biografi",
        "nama" => "Rizal",
        "latar belakang" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
        Fuga dolores omnis eligendi minima placeat adipisci. 
        Molestias obcaecati amet quo mollitia sequi aliquid consequatur perferendis hic deleniti soluta dignissimos,
         quaerat similique ratione iste dolorum officia id, ipsa a debitis earum culpa alias sapiente. 
         Id quisquam repellendus atque nostrum aspernatur eos praesentium eius voluptatem, doloribus eligendi adipisci, 
         et ea voluptate rem eum vitae quos, laborum nemo voluptates. Quos repellat nesciunt rerum commodi molestiae,
          magnam temporibus vel at sint illum eaque quisquam culpa sit recusandae adipisci sed sapiente!
           Pariatur quam ipsam ullam error assumenda. 
        Qui amet officiis quam cum laboriosam quaerat ipsa! Iusto."
    
    ],
    [
        "judul" => "Pendidikan",
        "nama" => "Efendi",
        "latar belakang" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
        Fuga dolores omnis eligendi minima placeat adipisci. 
        Molestias obcaecati amet quo mollitia sequi aliquid consequatur perferendis hic deleniti soluta dignissimos,
         quaerat similique ratione iste dolorum officia id, ipsa a debitis earum culpa alias sapiente. 
         Id quisquam repellendus atque nostrum aspernatur eos praesentium eius voluptatem, doloribus eligendi adipisci, 
         et ea voluptate rem eum vitae quos, laborum nemo voluptates. Quos repellat nesciunt rerum commodi molestiae,
          magnam temporibus vel at sint illum eaque quisquam culpa sit recusandae adipisci sed sapiente!
           Pariatur quam ipsam ullam error assumenda. Lorem ipsum dolor sit amet consectetur adipisicing elit. 
           Unde corrupti ducimus, hic ratione pariatur, 
           aliquid sed beatae quis itaque iure accusantium doloribus ea alias eos quas ab laborum ipsum totam.
        Qui amet officiis quam cum laboriosam quaerat ipsa! Iusto."
    
    ]
    ];
    return view ('About', [
        "title" => "ABOUT",
        "name" => "Rizal",

        "biografi" => $about_posts
    ]);
});


Route::get('/contact', function () {
    return view ('Contact', [
        "title" => "CONTACT",
        "email" => "rizalgaras@gmail.com",
    ]);
});