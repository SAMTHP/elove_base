#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: utilisateur
#------------------------------------------------------------

CREATE TABLE utilisateur(
        id_utilisateur             Int  Auto_increment  NOT NULL ,
        nom_utilisateur            Varchar (25) NOT NULL ,
        prenom_utilisateur         Varchar (25) NOT NULL ,
        date_naissance_utilisateur Date NOT NULL ,
        courriel_utilisateur       Varchar (30) NOT NULL ,
        url_photo_utilisateur      Varchar (255) NOT NULL ,
        active_utilisateur         Bool NOT NULL ,
        id_session                 Int NOT NULL
	,CONSTRAINT utilisateur_PK PRIMARY KEY (id_utilisateur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: session
#------------------------------------------------------------

CREATE TABLE session(
        id_session         Int  Auto_increment  NOT NULL ,
        date_debut_session Date NOT NULL ,
        date_fin_session   Date NOT NULL ,
        nom_session        Varchar (25) NOT NULL ,
        active_session     Bool NOT NULL ,
        id_formation       Int NOT NULL
	,CONSTRAINT session_PK PRIMARY KEY (id_session)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: service
#------------------------------------------------------------

CREATE TABLE service(
        id_service          Int  Auto_increment  NOT NULL ,
        nom_service         Varchar (50) NOT NULL ,
        description_service Varchar (500) NOT NULL ,
        image_service       Varchar (512) NOT NULL ,
        active_service      Bool NOT NULL ,
        id_utilisateur      Int NOT NULL
	,CONSTRAINT service_PK PRIMARY KEY (id_service)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: formation
#------------------------------------------------------------

CREATE TABLE formation(
        id_formation               Int  Auto_increment  NOT NULL ,
        nom_court_formation        Varchar (10) NOT NULL ,
        nom_long_formation         Varchar (50) NOT NULL ,
        competence_vise_formation  Varchar (500) NOT NULL ,
        public_concernce_formation Varchar (500) NOT NULL ,
        modalite_formation         Varchar (500) NOT NULL ,
        programme_formation        Varchar (500) NOT NULL ,
        finalite_formation         Varchar (500) NOT NULL ,
        active_formation           Bool NOT NULL ,
        id_service                 Int NOT NULL ,
        id_session                 Int NOT NULL
	,CONSTRAINT formation_PK PRIMARY KEY (id_formation)
)ENGINE=InnoDB;




ALTER TABLE utilisateur
	ADD CONSTRAINT utilisateur_session0_FK
	FOREIGN KEY (id_session)
	REFERENCES session(id_session);

ALTER TABLE session
	ADD CONSTRAINT session_formation0_FK
	FOREIGN KEY (id_formation)
	REFERENCES formation(id_formation);

ALTER TABLE session 
	ADD CONSTRAINT session_formation0_AK 
	UNIQUE (id_formation);

ALTER TABLE service
	ADD CONSTRAINT service_utilisateur0_FK
	FOREIGN KEY (id_utilisateur)
	REFERENCES utilisateur(id_utilisateur);

ALTER TABLE service 
	ADD CONSTRAINT service_utilisateur0_AK 
	UNIQUE (id_utilisateur);

ALTER TABLE formation
	ADD CONSTRAINT formation_service0_FK
	FOREIGN KEY (id_service)
	REFERENCES service(id_service);

ALTER TABLE formation
	ADD CONSTRAINT formation_session1_FK
	FOREIGN KEY (id_session)
	REFERENCES session(id_session);

ALTER TABLE formation 
	ADD CONSTRAINT formation_session0_AK 
	UNIQUE (id_session);
