<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run()
    {
        $books = [
            ['title'=>'Atomic Habits','author'=>'James Clear','description'=>'A book about building good habits and breaking bad ones.'],
            ['title'=>'Clean Code','author'=>'Robert C. Martin','description'=>'A handbook of agile software craftsmanship.'],
            ['title'=>'The Pragmatic Programmer','author'=>'Andrew Hunt and David Thomas','description'=>'Tips and best practices for effective software development.'],
            ['title'=>'Deep Work','author'=>'Cal Newport','description'=>'Rules for focused success in a distracted world.'],
            ['title'=>'The Lean Startup','author'=>'Eric Ries','description'=>'How today’s entrepreneurs use continuous innovation to create radically successful businesses.'],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}