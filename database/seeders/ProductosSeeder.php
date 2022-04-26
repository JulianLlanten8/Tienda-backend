<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Producto;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $producto = new Producto();
        $producto->nombre = 'Nike zoom';
        $producto->precio = 1000000;
        $producto->descripcion = 'Zapatillas Nike rojas con blanco especiales para deportes y salir a correr';
        $producto->imagen = 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80';
        $producto->created_at = null;
        $producto->updated_at = null;
        $producto->deleted_at = null;
        $producto->save();

        $producto2 = new Producto();
        $producto2->nombre = 'Zapatillas credenets plus';
        $producto2->precio = 250000;
        $producto2->descripcion = 'Zapatillas para ocasiones especiales con diseño exclusivo';
        $producto2->imagen = 'https://images.unsplash.com/photo-1560769629-975ec94e6a86?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80';
        $producto->created_at = null;
        $producto->updated_at = null;
        $producto->deleted_at = null;
        $producto2->save();

        $producto3 = new Producto();
        $producto3->nombre = 'Zapatillas Nike air plane 3';
        $producto3->precio = 163000;
        $producto3->descripcion = 'Especiales para correr como el viento y ganarle a tiro al blanco';
        $producto3->imagen = 'https://images.unsplash.com/photo-1491553895911-0055eca6402d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1480&q=80';
        $producto->created_at = null;
        $producto->updated_at = null;
        $producto->deleted_at = null;
        $producto3->save();

        $producto4 = new Producto();
        $producto4->nombre = 'Snickers Rosa beautiful';
        $producto4->precio = 159000;
        $producto4->descripcion = 'zapatillas bonitas para un buen regalo';
        $producto4->imagen = 'https://images.unsplash.com/photo-1551107696-a4b0c5a0d9a2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=812&q=80';
        $producto->created_at = null;
        $producto->updated_at = null;
        $producto->deleted_at = null;
        $producto4->save();

        $producto5 = new Producto();
        $producto5->nombre = 'Adidas canadian';
        $producto5->precio = 780000;
        $producto5->descripcion = 'Estilo original y una bonita versión además clásica';
        $producto5->imagen = 'https://images.unsplash.com/flagged/photo-1556637640-2c80d3201be8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80';
        $producto->created_at = null;
        $producto->updated_at = null;
        $producto->deleted_at = null;
        $producto5->save();

        $producto6 = new Producto();
        $producto6->nombre = 'Nike for one';
        $producto6->precio = 250000;
        $producto6->descripcion = 'Clásicas Zapatillas Nike for-one su nombre lo dice todo.';
        $producto6->imagen = 'https://images.unsplash.com/photo-1512374382149-233c42b6a83b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435&q=80';
        $producto->created_at = null;
        $producto->updated_at = null;
        $producto->deleted_at = null;
        $producto6->save();

        $producto7 = new Producto();
        $producto7->nombre = 'Nike air for-one especial edition café';
        $producto7->precio = 300000;
        $producto7->descripcion = 'zapatillas de diseño exclusivo para todo tipo de momento o para agregar a tu coleccion.';
        $producto7->imagen = 'https://images.unsplash.com/photo-1549298916-b41d501d3772?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=812&q=80';
        $producto->created_at = null;
        $producto->updated_at = null;
        $producto->deleted_at = null;
        $producto7->save();

        $producto8 = new Producto();
        $producto8->nombre = 'Nike ultra luminosas';
        $producto8->precio = 280000;
        $producto8->descripcion = 'Zapatillas nike con tecnología luminosa para destacar ante todo.';
        $producto8->imagen = 'https://images.unsplash.com/photo-1515955656352-a1fa3ffcd111?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80';
        $producto->created_at = null;
        $producto->updated_at = null;
        $producto->deleted_at = null;
        $producto8->save();

        $producto9 = new Producto();
        $producto9->nombre = 'Zapatillas nike air wonder woman';
        $producto9->precio = 300000;
        $producto9->descripcion = 'Zapatillas edición especial para dama pocas referencias.';
        $producto9->imagen = 'https://images.unsplash.com/photo-1595950653106-6c9ebd614d3a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80';
        $producto->created_at = null;
        $producto->updated_at = null;
        $producto->deleted_at = null;
        $producto9->save();

        $producto10 = new Producto();
        $producto10->nombre = 'Tacones zara';
        $producto10->precio = 75000;
        $producto10->descripcion = 'Tacones zara con piedras luminosas 100% Colombianos';
        $producto10->imagen = 'https://images.unsplash.com/photo-1519415943484-9fa1873496d4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80';
        $producto->created_at = null;
        $producto->updated_at = null;
        $producto->deleted_at = null;
        $producto10->save();

        $producto11 = new Producto();
        $producto11->nombre = 'Tacones blueprint';
        $producto11->precio = 120000;
        $producto11->descripcion = 'Tacones Blueprint edicion limitada';
        $producto11->imagen = 'https://images.unsplash.com/photo-1543163521-1bf539c55dd2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80';
        $producto->created_at = null;
        $producto->updated_at = null;
        $producto->deleted_at = null;
        $producto11->save();

        $producto12 = new Producto();
        $producto12->nombre = 'Conjunto casual para mujer';
        $producto12->precio = 180000;
        $producto12->descripcion = 'Ropa casual para mujer con un estilo muy fación y acogedor';
        $producto12->imagen = 'https://images.unsplash.com/photo-1552664199-fd31f7431a55?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80';
        $producto->created_at = null;
        $producto->updated_at = null;
        $producto->deleted_at = null;
        $producto12->save();

        $producto13 = new Producto();
        $producto13->nombre = 'Camisas multicolores';
        $producto13->precio = 50000;
        $producto13->descripcion = 'Camisas multicolores para cada día de la semana';
        $producto13->imagen = 'https://images.unsplash.com/photo-1562157873-818bc0726f68?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=327&q=80';
        $producto->created_at = null;
        $producto->updated_at = null;
        $producto->deleted_at = null;
        $producto13->save();

        $producto14 = new Producto();
        $producto14->nombre = 'Conjunto miniformal';
        $producto14->precio = 2500000;
        $producto14->descripcion = 'Conjunto miniformal que se usa en muchas ocaciones especiales y felices';
        $producto14->imagen = 'https://images.unsplash.com/photo-1479064555552-3ef4979f8908?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80';
        $producto->created_at = null;
        $producto->updated_at = null;
        $producto->deleted_at = null;
        $producto14->save();

        $producto15 = new Producto();
        $producto15->nombre = 'Camisas trabajo oficina';
        $producto15->precio = 130000;
        $producto15->descripcion = 'Set de camisas para el trabajo y reuniones';
        $producto15->imagen = 'https://images.unsplash.com/photo-1561053720-76cd73ff22c3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80';
        $producto->created_at = null;
        $producto->updated_at = null;
        $producto->deleted_at = null;
        $producto15->save();
}
}
