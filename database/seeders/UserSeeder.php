<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $Super1 = new User;
       $Super1->name = "Spiderman";
       $Super1->email = "sp@gmail.com";
       $Super1->password = Hash::make ("Sp123");
       $Super1->save();

       $Super2 = new User;
       $Super2->name = "Hulk";
       $Super2->email = "hu@gmail.com";
       $Super2->password = Hash::make ("Hu123");
       $Super2->save();

       $Super3 = new User;
       $Super3->name = "Capitan America";
       $Super3->email = "ca@gmail.com";
       $Super3->password = Hash::make ("Ca123");
       $Super3->save();

       $Super4 = new User;
       $Super4->name = "SuperMan";
       $Super4->email = "sm@gmail.com";
       $Super4->password = Hash::make ("Sm123");
       $Super4->save();

       $Super5 = new User;
       $Super5->name = "Batman";
       $Super5->email = "bm@gmail.com";
       $Super5->password = Hash::make ("Bm123");
       $Super5->save();

       $Super6 = new User;
       $Super6->name = "Scarlet Spider";
       $Super6->email = "ss@gmail.com";
       $Super6->password = Hash::make ("Ss123");
       $Super6->save();

       $Super7 = new User;
       $Super7->name = "Wonder Woman";
       $Super7->email = "Wm@gmail.com";
       $Super7->password = Hash::make ("Wm123");
       $Super7->save();

       $Super8 = new User;
       $Super8->name = "Doomsday";
       $Super8->email = "dd@gmail.com";
       $Super8->password = Hash::make ("Dd123");
       $Super8->save();

       $Super9 = new User;
       $Super9->name = "Scarlet Wich";
       $Super9->email = "sw@gmail.com";
       $Super9->password = Hash::make ("Sw123");
       $Super9->save();

       $Super10 = new User;
       $Super10->name = "Night Wins";
       $Super10->email = "nw@gmail.com";
       $Super10->password = Hash::make ("Nw123");
       $Super10->save();
    }
}
