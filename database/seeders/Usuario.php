<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class Usuario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('usuarios')->insert(['nombre_completo' =>'Aguayo González Jaime Francisco' ,'email' =>'iabarc@yahoo.es','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'Chávez Heredia Andrea' ,'email' =>'maeillanes@hotmail.com','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'Cortés Lagunes Ruth Silvana' ,'email' =>'osabarca@hotmail.com','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'de jesús Ramos Ariana' ,'email' =>'cabrigo@garmendia.cl','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'Delgado Barrón Luis Felipe' ,'email' =>'Sb.nashxo.sk8@hotmail.com','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'Espejo Ramos Hansel Andres' ,'email' =>'fran.afull@live.cl','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'Flores Aguilar Aniyensy Sarai' ,'email' =>'carlosaguileram@hotmail.com','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'Flores Silva Karla Paulette' ,'email' =>'ikis_rojo@hotmail.com','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'García Arreguín Montserrat Carolina' ,'email' =>'daniela_aguilera_m500@hotmail.com','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'García Orozco Lisset Vianey' ,'email' =>'vizkala@hotmail.com','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'Gómez Vargas José Ignacio' ,'email' =>'alexus3@hotmail.com','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'GONZÁLEZ DÍAZ ROCIO' ,'email' =>'capitanaguilera@hotmail.com','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'González Trejo Cipriano Ariel' ,'email' =>'apalamosg@hotmail.com','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'Guerrero Padrés Miguel Alejandro' ,'email' =>'niikhox__@hotmail.com','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'GUILLEN MARIN KARINA' ,'email' =>'luuuuuuci@hotmail.com','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'Hernández González Danna Verónica' ,'email' =>'kristian_siempre_azul@hotmail.com','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'Hernández Palacios Jaime Daniel' ,'email' =>'mapuchin@hotmail.com','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'Hernández Prado Miguel Ángel' ,'email' =>'arahuetes@manquehue.net','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'Herrera Arias Luis Fernando' ,'email' =>'eduardo.arancibia@grange.cl','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'Lara Agapito Samanta' ,'email' =>'martacam2002@yahoo.com','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'Lunar Pérez Julia Andrea' ,'email' =>'andrea.geoplanet@gmail.com','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'Maximov Cortés María' ,'email' =>'faraya1910@hotmail.com','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'Meré Hidalgo Pablo' ,'email' =>'faraya@sprint.cl','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'Morales Gonzalez Diana Laura' ,'email' =>'leonor.araya@gmail.com','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'Moreno Chávez Yaír Jofrá' ,'email' =>'paulifran@hotmail.com','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'Moreno Huitrón Aelín' ,'email' =>'bad.girl.-@hotmail.es','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'Moreno Reveles Jessica Liliana' ,'email' =>'prueba@admin.com','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'Munguía González Eduardo Elihu' ,'email' =>'aargomedo@hecsa.cl','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'Nuñez Garcia Itzel' ,'email' =>'elizabetharmstrong39@gmail.com','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'Ornelas Guzmán Erandhi Claudel' ,'email' =>'c_arnes@hotmail.com','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'Ortega Romero Adriana Azzeneth' ,'email' =>'aarriagada@petrok.cl','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'Parga Fuentes Irma Carolina' ,'email' =>'joy_pao_@hotmail.com','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'Pérez Moreno Alejandra Berenice' ,'email' =>'carlosarteaga.pef@gmail.com','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'Reyes Báez Yail Tsayam' ,'email' =>'arquitectoasenjo@gmail.com','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'Reyes Saldaña Esteban' ,'email' =>'masenjog@gmail.com','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'Rodríguez Jiménez Abigali' ,'email' =>'Sergio.Aspe@adretail.cl','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'Rosiles Loeza Pablo Yamild' ,'email' =>'caspe@canal13.cl','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'Ruiz vasquez aranxa' ,'email' =>'bantomaui@gmail.com','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'SALDIVAR OMAÑA MITZI GUADALUPE' ,'email' =>'mfbanto@gmail.com','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'Sánchez Cid Mariana' ,'email' =>'Rodrigo.banto@Uvavins.ch','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'Torres Rojas Daniel' ,'email' =>'jbarrera05@hotmail.com','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'TRIANA AVILA JAIRO DAVID' ,'email' =>'claudiabergez@gmail.com','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'Vega Hernández Daniela Ivette' ,'email' =>'michelebk@hotmail.com','password' => bcrypt(123456)]);
        DB::table('usuarios')->insert(['nombre_completo' =>'Zamora Peinado Rosa Luz' ,'email' =>'angelicabergez@gmail.com','password' => bcrypt(123456)]);
    }
}
