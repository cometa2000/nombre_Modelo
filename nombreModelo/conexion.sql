CREATE VIEW nombreModel AS
    SELECT 
        concat(user.paterno, ' ',
                user.materno, ' ',
                user.nombre) AS nombreuser,
        hard.nombre AS nombre_Hardware,
        hard.modelo
    FROM 
        t_asignaciones AS asig
            INNER JOIN 
        t_usuario AS user ON asig.id_usuario = user.id_usuario
            INNER JOIN 
        t_hardware AS hard ON asig.id_hardware = hard.id_hardware;