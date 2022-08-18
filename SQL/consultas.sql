

select * from RECIBO where Recibo_NroRecibo = '01203071';
--update RECIBO set Recibo_Activo = '0' where Recibo_Id = '876'; 

select * from RECIBO where Recibo_Nombres LIKE '%MOLLE%';


select * from USUARIO where Usuario_Id='18'; --1202376

-- Visualizacion de los datos del recibo

SELECT r.Recibo_Id, r.Recibo_NroRecibo, r.Recibo_CodContribuyente, r.Recibo_Nombres, r.Recibo_Fecha, u.Usuario_Username, r.Recibo_Monto, r.Recibo_FechaRegistro FROM RECIBO r
inner join USUARIO u on r.Recibo_UsuarioRegistro = u.Usuario_Id
WHERE r.Recibo_UsuarioRegistro = '6';