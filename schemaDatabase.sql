CREATE TABLE Administrateur (
	"idAdmin" serial NOT NULL,
	"mdp" varchar(200) NOT NULL,
	"email" varchar(200) NOT NULL UNIQUE,
	"nom" varchar(200) NOT NULL,
	"prenom" varchar(200) NOT NULL,
	"statut" varchar(200) NOT NULL UNIQUE,
	CONSTRAINT Administrateur_pk PRIMARY KEY ("idAdmin")
) WITH (
  OIDS=FALSE
);



CREATE TABLE Membre (
	"idMembre" serial NOT NULL,
	"email" varchar(200) NOT NULL UNIQUE,
	"mdp" varchar(200) NOT NULL,
	"nom" varchar(200) NOT NULL,
	"prenom" varchar(200) NOT NULL,
	"statut" varchar(200) NOT NULL,
	"coordonnee" point NOT NULL,
	CONSTRAINT Membre_pk PRIMARY KEY ("idMembre")
) WITH (
  OIDS=FALSE
);



CREATE TABLE Capteur (
	"idCapteur" serial NOT NULL,
	"idMembre" serial NOT NULL,
	"idZoneEau" serial NOT NULL,
	"type" varchar(200) NOT NULL,
	"etat" varchar(200) NOT NULL,
	"coordonnee" point NOT NULL UNIQUE,
	CONSTRAINT Capteur_pk PRIMARY KEY ("idCapteur")
) WITH (
  OIDS=FALSE
);



CREATE TABLE zoneEau (
	"idZoneEau" serial NOT NULL,
	"idCarte" serial NOT NULL,
	"description " varchar(200) NOT NULL,
	"type" varchar(200) NOT NULL,
	"coordonnée" point NOT NULL UNIQUE,
	"potabilité" BOOLEAN,
	"niveauEau" int NOT NULL,
	CONSTRAINT zoneEau_pk PRIMARY KEY ("idZoneEau")
) WITH (
  OIDS=FALSE
);



CREATE TABLE Carte (
	"idCarte" serial NOT NULL,
	CONSTRAINT Carte_pk PRIMARY KEY ("idCarte")
) WITH (
  OIDS=FALSE
);





ALTER TABLE Capteur ADD CONSTRAINT "Capteur_fk0" FOREIGN KEY ("idMembre") REFERENCES Membre("idMembre");
ALTER TABLE Capteur ADD CONSTRAINT "Capteur_fk1" FOREIGN KEY ("idZoneEau") REFERENCES zoneEau("idZoneEau");

ALTER TABLE zoneEau ADD CONSTRAINT "zoneEau_fk0" FOREIGN KEY ("idCarte") REFERENCES Carte("idCarte");
