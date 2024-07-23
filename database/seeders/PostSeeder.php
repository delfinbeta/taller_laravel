<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'category_id' => 1,
            'title' => 'Laravel',
            'content' => 'Laravel es un framework de código abierto para desarrollar aplicaciones y servicios web con PHP. Su filosofía es desarrollar código PHP de forma elegante y simple, evitando el "código espagueti". Fue creado en 2011 y ofrece utilidades que simplifican la creación de aplicaciones web, agilizando significativamente este proceso y generando un código organizado y manejable.',
            'points' => 5
        ]);
        
        DB::table('posts')->insert([
            'category_id' => 1,
            'title' => 'Tailwind CSS',
            'content' => 'Tailwind CSS es un framework de CSS de código abierto para el diseño de páginas web. La principal característica de esta biblioteca es que, a diferencia de otras como Bootstrap, no genera clases predefinidas para componentes. En su lugar, crea una lista de clases CSS "de utilidad" que se pueden usar para dar estilos individuales a cada elemento.',
            'points' => 5
        ]);
        
        DB::table('posts')->insert([
            'category_id' => 3,
            'title' => 'Copa América',
            'content' => 'La Copa América es el principal torneo internacional oficial de fútbol masculino en América del Sur. Es organizada por la Confederación Sudamericana de Fútbol (Conmebol) y sus resultados han sido oficialmente reconocidos por la FIFA.',
        ]);
        
        DB::table('posts')->insert([
            'category_id' => 4,
            'title' => 'Importancia de los alimentos en la salud',
            'content' => 'La alimentación desempeña un rol muy importante en la salud de prácticamente cualquier persona. Con una adecuada alimentación, podrás disfrutar de todos los beneficios que otorgan los alimentos saludables, y, por ende, desarrollar un organismo saludable que posea inmunidad frente a las enfermedades.',
            'points' => 4
        ]);
    }
}
