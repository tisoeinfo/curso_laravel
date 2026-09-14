-- Conceptos Importantes
-- PostgreSQL: el motor de base de datos.
-- pgAdmin 4: Es la interfaz.
-- SERIAL hará que id_cliente se genere automáticamente:1,2,3,4 etc.
CREATE TABLE clientes (
    id_cliente SERIAL PRIMARY KEY, 
    nombre VARCHAR(100),
    email VARCHAR(150),
    telefono VARCHAR(20)
);

INSERT INTO clientes (nombre, email, telefono) VALUES ('Saul', 'saul@email.com', '999111222');
INSERT INTO clientes (nombre, email, telefono) VALUES ('Victoria', 'victoria@email.com', '977333444');
INSERT INTO clientes (nombre, email, telefono) VALUES ('Juan', 'juan@email.com', '988222333');

select * from clientes;

