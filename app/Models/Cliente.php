<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

// class Cliente extends Model => Eliminamos este concepto porque no usaremos Eloquent ORM
// Cliente::all();
// Cliente::find($id) etc.;
// $cliente->save();
// $cliente->delete();
class Cliente
{
    public function listar()
    {
        return DB::select(
            "
            SELECT id_cliente, nombre, email, telefono FROM clientes 
            "
        );
    }

    public function buscar($p_id_cliente)
    {
        return DB::select(
            "
            SELECT id_cliente, nombre, email, telefono 
            FROM clientes WHERE id_cliente = :id
            ",
            [
                'id' => $p_id_cliente
            ]
        );
    }

    public function insertar($p_nombre, $p_email, $p_telefono)
    {
        return DB::insert(
            "
            INSERT INTO clientes (nombre, email, telefono)
            VALUES (:nombre, :email, :telefono)
            ",
            [
                'nombre' => $p_nombre,
                'email' => $p_email,
                'telefono' => $p_telefono
            ]
        );
    }

    public function actualizar($p_id_cliente, $p_nombre, $p_email, $p_telefono)
    {
        return DB::update(
            "
            UPDATE clientes SET nombre = :nombre, email = :email, telefono = :telefono
            WHERE id_cliente = :id
            ",
            [
                'id' => $p_id_cliente,
                'nombre' => $p_nombre,
                'email' => $p_email,
                'telefono' => $p_telefono
            ]
        );
    }

    public function eliminar($p_id_cliente)
    {
        return DB::delete(
            "
            DELETE FROM clientes WHERE id_cliente = :id
            ",
            [
                'id' => $p_id_cliente
            ]
        );
    }
    // listar()	Ejecutar SELECT de todos
    // buscar()	Ejecutar SELECT por ID
    // insertar()	Ejecutar INSERT
    // actualizar()	Ejecutar UPDATE
    // eliminar()	Ejecutar DELETE
}
