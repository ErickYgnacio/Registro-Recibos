CREATE TABLE RECIBO(
    Recibo_Id                   INT IDENTITY(1,1),
    Recibo_NroRecibo            VARCHAR(10),
    Recibo_CodContribuyente     INT,
    Recibo_Nombres              VARCHAR(60),
    Recibo_Fecha                date,
    Recibo_UsuarioRegistro      INT,
    Recibo_FechaRegistro        datetime,

    CONSTRAINT PK_Recibo_Id PRIMARY KEY(Recibo_Id),

    CONSTRAINT UQ_Recibo_NroRecibo UNIQUE(Recibo_NroRecibo),

    CONSTRAINT FK_Recibo_UsuarioRegistro FOREIGN KEY(Recibo_UsuarioRegistro)
    REFERENCES USUARIO
);

CREATE TABLE USUARIO(
    Usuario_Id          INT IDENTITY(1,1),
    Usuario_Username    VARCHAR(25) NOT NULL,
    Usuario_Pass        VARCHAR(25) NOT NULL,
    Usuario_Nombres     VARCHAR(40),
    Usuario_Apellidos   VARCHAR(40),

    Usuario_Habilitado  CHAR(1),

    CONSTRAINT PK_USUARIO_ID PRIMARY KEY(Usuario_Id),

    CONSTRAINT UQ_USUARIO_NICK UNIQUE(Usuario_Username)
);