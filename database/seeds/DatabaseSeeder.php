<?php

use Illuminate\Database\Seeder;
use App\Habitacion;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
          self::seedHabitaciones();
          $this->command->info('Tabla habitaciones inicializada con datos!');
          self::seedUsers();
          $this->command->info('Tabla usuarios inicializada con datos!');
    }
    
    private static function seedUsers()
    {
        User::truncate();
        
        User::create([
                'name' => 'Usuario1',
                'email' => 'usuario1@hotel2mares.com',
                'password' => bcrypt('alumno')
        ]);
        User::create([
                'name' => 'Usuario2',
                'email' => 'usuario2@hotel2mares.com',
                'password' => bcrypt('alumno')
        ]);
    }
    private static function seedHabitaciones()
    {
        Habitacion::truncate();

        foreach( self::$arrayHabitaciones as $habitacion ) {
            $p = new Habitacion;
            $p->numero = $habitacion['numero'];
            $p->categoria = $habitacion['categoria'];
            $p->precio = $habitacion['precio'];
            $p->save();
        }
    }

    private static $arrayHabitaciones = array(
        array('numero' => 101, 'categoria' => 'Individual', 'precio' => 55),
        array('numero' => 102, 'categoria' => 'Individual', 'precio' => 55),
        array('numero' => 103, 'categoria' => 'Individual', 'precio' => 55),
        array('numero' => 104, 'categoria' => 'Individual', 'precio' => 55),
        array('numero' => 105, 'categoria' => 'Individual', 'precio' => 55),
        array('numero' => 106, 'categoria' => 'Individual', 'precio' => 55),
        array('numero' => 107, 'categoria' => 'Individual', 'precio' => 55),
        array('numero' => 108, 'categoria' => 'Individual', 'precio' => 55),
        array('numero' => 109, 'categoria' => 'Individual', 'precio' => 55),
        array('numero' => 110, 'categoria' => 'Individual', 'precio' => 55),
        array('numero' => 111, 'categoria' => 'Doble', 'precio' => 70),
        array('numero' => 112, 'categoria' => 'Doble', 'precio' => 70),
        array('numero' => 113, 'categoria' => 'Doble', 'precio' => 70),
        array('numero' => 114, 'categoria' => 'Doble', 'precio' => 70),
        array('numero' => 115, 'categoria' => 'Doble', 'precio' => 70),
        array('numero' => 116, 'categoria' => 'Doble', 'precio' => 70),
        array('numero' => 117, 'categoria' => 'Triple', 'precio' => 80),
        array('numero' => 118, 'categoria' => 'Triple', 'precio' => 80),
        array('numero' => 119, 'categoria' => 'Triple', 'precio' => 80),
        array('numero' => 120, 'categoria' => 'Triple', 'precio' => 80),
        array('numero' => 201, 'categoria' => 'Individual', 'precio' => 55),
        array('numero' => 202, 'categoria' => 'Individual', 'precio' => 55),
        array('numero' => 203, 'categoria' => 'Individual', 'precio' => 55),
        array('numero' => 204, 'categoria' => 'Individual', 'precio' => 55),
        array('numero' => 205, 'categoria' => 'Individual', 'precio' => 55),
        array('numero' => 206, 'categoria' => 'Individual', 'precio' => 55),
        array('numero' => 207, 'categoria' => 'Individual', 'precio' => 55),
        array('numero' => 208, 'categoria' => 'Individual', 'precio' => 55),
        array('numero' => 209, 'categoria' => 'Individual', 'precio' => 55),
        array('numero' => 210, 'categoria' => 'Individual', 'precio' => 55),
        array('numero' => 211, 'categoria' => 'Doble', 'precio' => 70),
        array('numero' => 212, 'categoria' => 'Doble', 'precio' => 70),
        array('numero' => 213, 'categoria' => 'Doble', 'precio' => 70),
        array('numero' => 214, 'categoria' => 'Doble', 'precio' => 70),
        array('numero' => 215, 'categoria' => 'Doble', 'precio' => 70),
        array('numero' => 216, 'categoria' => 'Doble', 'precio' => 70),
        array('numero' => 217, 'categoria' => 'Triple', 'precio' => 80),
        array('numero' => 218, 'categoria' => 'Triple', 'precio' => 80),
        array('numero' => 219, 'categoria' => 'Triple', 'precio' => 80),
        array('numero' => 220, 'categoria' => 'Triple', 'precio' => 80),
        array('numero' => 301, 'categoria' => 'Individual', 'precio' => 55),
        array('numero' => 302, 'categoria' => 'Individual', 'precio' => 55),
        array('numero' => 303, 'categoria' => 'Individual', 'precio' => 55),
        array('numero' => 304, 'categoria' => 'Individual', 'precio' => 55),
        array('numero' => 305, 'categoria' => 'Individual', 'precio' => 55),
        array('numero' => 306, 'categoria' => 'Individual', 'precio' => 55),
        array('numero' => 307, 'categoria' => 'Individual', 'precio' => 55),
        array('numero' => 308, 'categoria' => 'Individual', 'precio' => 55),
        array('numero' => 309, 'categoria' => 'Individual', 'precio' => 55),
        array('numero' => 310, 'categoria' => 'Individual', 'precio' => 55),
        array('numero' => 311, 'categoria' => 'Doble', 'precio' => 70),
        array('numero' => 312, 'categoria' => 'Doble', 'precio' => 70),
        array('numero' => 313, 'categoria' => 'Doble', 'precio' => 70),
        array('numero' => 314, 'categoria' => 'Doble', 'precio' => 70),
        array('numero' => 315, 'categoria' => 'Doble', 'precio' => 70),
        array('numero' => 316, 'categoria' => 'Doble', 'precio' => 70),
        array('numero' => 317, 'categoria' => 'Triple', 'precio' => 80),
        array('numero' => 318, 'categoria' => 'Triple', 'precio' => 80),
        array('numero' => 319, 'categoria' => 'Triple', 'precio' => 80),
        array('numero' => 320, 'categoria' => 'Triple', 'precio' => 80)
    );
}
