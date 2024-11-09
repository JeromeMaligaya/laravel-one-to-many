<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    public function run(): void
    {
        $types = [
            "full-stack",
            "front-end",
            "back-end",
            "database",
        ];

        foreach ($types as $typeName) {
            $type = new Type();
            $type->name = $typeName;
            $type->save();
        }
    }
}
