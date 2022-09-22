<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB ;

class postSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->insert([

           [
            'id'=>'1',
            'title'=>'Post One',
            'body'=>'This is the post body'
            ],  
        
            [
            'id'=>'2',
            'title'=>'Post Two',
            'body'=>'This is second the post body'
            ]    
        ]);          
        
    }





}
