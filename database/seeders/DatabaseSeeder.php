<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $coordinador_user = User::factory()->create([
            'name' => 'Coordinador',
            'email' => 'coordinador@coordinador.com',
        ]);
        $estudiante_user = User::factory()->create([
            'name' => 'Estudiante',
            'email' => 'estudiante@estudiante.com',
        ]);

        $coordinador_role = Role::create(['name' => 'coordinador']);
        $estudiante_role = Role::create(['name' => 'estudiante']);

        $coordinador_user->assignRole($coordinador_role);
        $estudiante_user->assignRole($estudiante_role);
    }
}
