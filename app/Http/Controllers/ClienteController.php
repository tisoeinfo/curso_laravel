<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    // Declaración Propiedades
    // Mi clase tendrá una propiedad privada llamada $cliente, y esa propiedad será de tipo Cliente.
    private Cliente $cliente;
    // public string $nombre;
    // public int $edad;
    // public float $monto;
    // public bool $estado;
    // public array $clientes;
    // public Cliente $cliente;

    // Metodo Contructor
    // Constructor: inicializa las propiedades del objeto al crearlo.
    public function __construct()
    {
        // Creo una instancia de Cliente y la asigno a la propiedad $cliente del objeto actual ClienteController.
        // $this representa al objeto actual.
        $this->cliente = new Cliente();
    }

    public function index()
    {
        // Aqui solo usamos la propiedad que ya tiene cargado todos los metodos.
        $clientes = $this->cliente->listar();
        return response()->json($clientes);
    }
    public function show($p_id_cliente)
    {
        $clientes = $this->cliente->buscar($p_id_cliente);
        return response()->json($clientes);
    }

    public function store(Request $request)
    {
        $this->cliente->insertar(
            $request->nombre,
            $request->email,
            $request->telefono
        );

        return response()->json([
            'mensaje' => 'Cliente registrado correctamente'
        ]);
    }
}
