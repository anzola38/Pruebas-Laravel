<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class Cliente extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert(['nombre_completo' => 'GUSTAVO ALBERTO GÓMEZ AREIZA', 'documento' => '5116060', 'email' => 'dtantioquia@minproteccionsocial.gov.co', 'direccion' => 'Carrera 56A No. 51 - 81' ]);
        DB::table('clientes')->insert(['nombre_completo' => 'MARIO ALEXANDER PEREZ MOGOLLON  ( E )', 'documento' => '8852052', 'email' => 'dtarauca@minproteccionsocial.gov.co', 'direccion' => 'Carrera 22 No. 17-31' ]);
        DB::table('clientes')->insert(['nombre_completo' => 'CARLOS ALBERTO CASTELLANOS COLLANTE', 'documento' => '3581397', 'email' => 'dtatlantico@minproteccionsocial.gov.co', 'direccion' => 'Carrera 54 No. 68 - 80 Barrio el Prado' ]);
        DB::table('clientes')->insert(['nombre_completo' => 'OSVALDO DE JESUS ALTAMAR ALMENDRALES', 'documento' => '6223452', 'email' => 'oebarranca@minproteccionsocial.gov.co', 'direccion' => 'Calle 59 No. 27 - 35 Barrio Galán' ]);
        DB::table('clientes')->insert(['nombre_completo' => 'MARTHA MARINA SOLANO VASQUEZ', 'documento' => '6640266', 'email' => 'dtbolivar@minproteccionsocial.gov.co', 'direccion' => 'Carrera 10A No. 20 - 40  Edificio El Clarín piso 3 Centro La Matuna' ]);
        DB::table('clientes')->insert(['nombre_completo' => 'LYDA CONSUELO ZUÑIGA GALVIS', 'documento' => '7424150', 'email' => 'dtboyaca@minproteccionsocial.gov.co', 'direccion' => 'Carrera 8  No. 20 - 59' ]);
        DB::table('clientes')->insert(['nombre_completo' => 'FERNANDO EUGENIO OSORIO TIRADO', 'documento' => '8845585', 'email' => 'dtcaldas@minproteccionsocial.gov.co', 'direccion' => 'Calle 20 No. 22 - 27 piso 3 Edificio Cumanday' ]);
        DB::table('clientes')->insert(['nombre_completo' => 'JOSE EDGAR CASTELBLANCO CARDOSO', 'documento' => '4358411', 'email' => 'dtcaqueta@minproteccionsocial.gov.co', 'direccion' => 'Carrera 8a No. 7 - 88 /94  Barrio  La Estrella' ]);
        DB::table('clientes')->insert(['nombre_completo' => 'OSCAR HERNANDO TORRES LUNA', 'documento' => '8241832', 'email' => 'dtcauca@minproteccionsocial.gov.co', 'direccion' => 'Carrera  5 No. 3 -74  centro' ]);
        DB::table('clientes')->insert(['nombre_completo' => 'JULIO MIGUEL DE LA HOZ STEVENSON', 'documento' => '5847711', 'email' => 'dtcesar@minproteccionsocial.gov.co', 'direccion' => 'Calle 15 No. 9 - 56 centro' ]);
        DB::table('clientes')->insert(['nombre_completo' => 'LUZ MARINA AGUALIMPIA BENITEZ', 'documento' => '6711519', 'email' => 'dtchoco@minproteccionsocial.gov.co', 'direccion' => 'Calle 25 No. 4 - 38 piso 2  Barrio Pandeyuca' ]);
        DB::table('clientes')->insert(['nombre_completo' => 'VICTOR GONZALEZ HUMANEZ', 'documento' => '7825992', 'email' => 'dtcordoba@minproteccionsocial.gov.co', 'direccion' => 'Calle 28 No. 8 - 69 CENTRO' ]);
        DB::table('clientes')->insert(['nombre_completo' => 'PABLO EDGAR PINTO PINTO', 'documento' => '3305040', 'email' => 'dtcundinamarca@minproteccionsocial.gov.co', 'direccion' => 'Carrera 7A No. 32 - 63 piso 2' ]);
        DB::table('clientes')->insert(['nombre_completo' => 'OSIRIS DENARES DANIES PANA', 'documento' => '7273995', 'email' => 'dtguajira@minproteccionsocial.gov.co', 'direccion' => 'Calle 7 No. 5 - 25  Edificio Segunda' ]);
        DB::table('clientes')->insert(['nombre_completo' => 'ALBEY  CALDERON', 'documento' => '8723041', 'email' => 'dthuila@minproteccionsocial.gov.co', 'direccion' => 'Carrera 9  No. 7 - 34' ]);
        DB::table('clientes')->insert(['nombre_completo' => 'DANCY DE JESUS PALACIO FRIAS', 'documento' => '4210220', 'email' => 'dtmagdalena@minproteccionsocial.gov.co', 'direccion' => 'Calle 20 No. 3 - 22' ]);
        DB::table('clientes')->insert(['nombre_completo' => 'DALIA MARÍA AVILA REYES', 'documento' => '6733643', 'email' => 'dtmeta@minproteccionsocial.gov.co', 'direccion' => 'Calle 33B  No. 38 - 42  Barrio Barzal' ]);
        DB::table('clientes')->insert(['nombre_completo' => 'LEONARDO FRANCISCO ZARAMA ROSERO', 'documento' => '7236158', 'email' => 'dtnarino@minproteccionsocial.gov.co', 'direccion' => 'Calle 16 No. 23 - 57 piso 4  Edificio Autoservicio Abraham Delgado' ]);
        DB::table('clientes')->insert(['nombre_completo' => 'SOLANGE SUESCUN LEAL', 'documento' => '5719173', 'email' => 'dtnortedesantander@minproteccionsocial.gov.co', 'direccion' => 'Calle 12 No. 4 - 19  Edificio Panamericano Of. 406' ]);

    }
}
