## SQL parametrizado
Técnica que permite separar los datos de la sentencia SQL, evitando concatenar directamente valores provenientes de variables o del usuario.
## Ejemplo
```php
$p_id_cliente = 10;
$cliente = DB::select(
    "
    SELECT
        id_cliente,
        nombre,
        email
    FROM clientes
    WHERE id_cliente = :id
    ",
    [
        'id' => $p_id_cliente
    ]
);
```
# Explicación
- :id => parámetro dentro del SQL.
- $p_id_cliente => valor que queremos enviar, está fuera del SQL.
- 'id' => $p_id_cliente => vincula el valor con :id.

# ---- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- --  
# Parámetro nombrado (Named Parameter)
Es un identificador que representa un valor dentro de la sentencia SQL y se escribe utilizando `:nombre_del_parametro`.
También existe el parámetro posicional, que utiliza `?` en lugar de un nombre.
# Ejemplo
Parámetro nombrado:
`WHERE id_cliente = :id`
Parámetro posicional:
`WHERE id_cliente = ?`

# ---- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- --  
# Parameter Binding
Es el mecanismo que permite vincular los valores con los parámetros utilizados en la sentencia SQL, ya sean parámetros nombrados o posicionales.
## Ejemplo
Parámetro nombrado:
[
    'id' => $p_id_cliente
]

Parámetro posicional:
[
    $p_id_cliente
]

# Explicación
- 'id' => $p_id_cliente => vincula el valor con `:id`.
- $p_id_cliente => vincula el valor con `?`. En este caso, la posición del valor debe coincidir con la posición del parámetro.

# ---- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- --  
# Alternativa no parametrizada
Si no se utilizara esta arquitectura, se podría trabajar concatenando directamente las variables dentro de la sentencia SQL, una práctica que puede generar riesgos de SQL Injection cuando los valores provienen del usuario.
# Ejemplo No recomendado
```php
$p_id_cliente = 10;
$cliente = DB::select(
    "SELECT * FROM clientes WHERE id_cliente = $p_id_cliente"
);
```
# Explicación
En este caso, la variable se concatena directamente en el SQL, por lo que no se recomienda cuando el valor proviene del usuario.