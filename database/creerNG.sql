# ©Copyright 2018 IDAC, tout droit réservé
# License A001, N.G Immobilier

#-----------------------------------------------------------------------
#   Script de création de la base de données de N.G Immobilier
#-----------------------------------------------------------------------

create database ng_immobilier ;
use ng_immobilier ;


#-----------------------------------------------------------------------
#   TABLE : Ville
#-----------------------------------------------------------------------

create table Ville(
    codePostale int primary key ,
    nomVille varchar(75)
)ENGINE=InnoDB;


#-----------------------------------------------------------------------
#   TABLE : NG_Immobilier
#-----------------------------------------------------------------------

create table NG_Immobilier(
    siretNG int primary key ,
    nomNG varchar(50) ,
    telNG varchar(50) ,
    emailNG varchar(50) ,
    numCarte int ,
    nomTitulaireCarte varchar(50) ,
    prenomTitulaireCarte varchar(50) ,
    dateCreation date ,
    adresseNG varchar(100) ,
    villeNG int ,
    constraint fk_ville_ngimm foreign key (villeNG) references Ville(codePostale)
)ENGINE=InnoDB;


#-----------------------------------------------------------------------
#   TABLE : Employer
#-----------------------------------------------------------------------

create table Employer(
    idEmployer varchar(75) primary key ,
    nomEmployer varchar(50) ,
    prenomEmployer varchar(50) ,
    telEmployer varchar(50) ,
    emailEmployer varchar(50) ,
    posteEmployer varchar(50) ,
    dateEmbauche date ,
    mdpEmployer varchar(100) ,
    adresseEmployer varchar(100) ,
    villeEmployer int ,
    entrepriseEmployer int ,
    constraint fk_ville_emp foreign key (villeEmployer) references Ville(codePostale) ,
    constraint fk_ngimm_emp foreign key (entrepriseEmployer) references NG_Immobilier(siretNG)
)ENGINE=InnoDB;


#-----------------------------------------------------------------------
#   TABLE : Location
#-----------------------------------------------------------------------

create table Location(
    numLoc varchar(50) primary key ,
    prixLoc float ,
    adresseLoc varchar(50) ,
    villeLoc int ,
    entrepriseLoc int ,
    constraint fk_ville_loc foreign key (villeLoc) references Ville(codePostale) ,
    constraint fk_ngimm_loc foreign key (entrepriseLoc) references NG_Immobilier(siretNG)
)ENGINE=InnoDB;


#-----------------------------------------------------------------------
#   TABLE : Partenaire
#-----------------------------------------------------------------------

create table Partenaire(
    numPartenaire int primary key ,
    nomPartenaire varchar(50) ,
    typePartenaire varchar(50) ,
    telPartenaire varchar(50) ,
    emailPartenaire varchar(50) ,
    adressePartenaire varchar(50) ,
    villePartenaire int ,
    constraint fk_ville_part foreign key (villePartenaire) references Ville(codePostale)
)ENGINE=InnoDB;


#-----------------------------------------------------------------------
#   TABLE : Sinistre
#-----------------------------------------------------------------------

create table Sinistre(
    codeSinistre varchar(50) primary key ,
    typeSinistre varchar(50) ,
    dateSinistre date
)ENGINE=InnoDB;


#-----------------------------------------------------------------------
#   TABLE : Creer
#-----------------------------------------------------------------------

create table Creer(
    codeSinistre varchar(50) ,
    numLoc varchar(50) ,
    constraint fk_sini_creer foreign key (codeSinistre) references Sinistre(codeSinistre) ,
    constraint fk_loc_creer foreign key (codeLoc) references Location(codeLoc)
)ENGINE=InnoDB;


#-----------------------------------------------------------------------
#   TABLE : Intervenir
#-----------------------------------------------------------------------

create table Intervenir(
    prixNegocier float ,
    codeSinistre varchar(50) ,
    numPartenaire int ,
    constraint fk_sini_inter foreign key (codeSinistre) references Sinistre(codeSinistre) ,
    constraint fk_part_inter foreign key (numPartenaire) references Partenaire(numPartenaire)
)ENGINE=InnoDB;


#-----------------------------------------------------------------------
#   TABLE : Copropriete
#-----------------------------------------------------------------------

create table Copropriete(
    numImmeuble varchar(50) primary key ,
    adresseImmeuble varchar(100) ,
    villeImmeuble int ,
    immeubleNG int ,
    constraint fk_ville_copro foreign key (villeImmeuble) references Ville(codePostale) ,
    constraint fk_ngimm_copro foreign key (immeubleNG) references NG_Immobiliert(siretNG)
)ENGINE=InnoDB;


#-----------------------------------------------------------------------
#   TABLE : Avoir
#-----------------------------------------------------------------------

create table Avoir(
    codeSinistre varchar(50) ,
    numImmeuble varchar(50) ,
    constraint fk_sini_avoir foreign key (codeSinistre) references Sinistre(codeSinistre) ,
    constraint fk_copro_avoir foreign key (numImmeuble) references Copropriete(numImmeuble) 
)ENGINE=InnoDB;


#-----------------------------------------------------------------------
#   TABLE : Construire
#-----------------------------------------------------------------------

create table Construire(
    numPartenaire int ,
    numImmeuble varchar(50) ,
    constraint fk_part_const foreign key (numPartenaire) references Partenaire(numPartenaire) ,
    constraint fk_copro_const foreign key (numImmeuble) references Copropriete(numImmeuble)
)ENGINE=InnoDB;


#-----------------------------------------------------------------------
#   TABLE : Proprietaire
#-----------------------------------------------------------------------

create table Proprietaire(
    idProprietaire varchar(50) primary key ,
    nomProprietaire varchar(50) ,
    prenomProprietaire varchar(50) ,
    telProprietaire varchar(50) ,
    emailProprietaire varchar(50) ,
    adresseProprietaire varchar(50) ,
    mdpProprietaire varchar(100) ,
    villeProprietaire int ,
    constraint fk_ville_prop foreign key (villeProprietaire) references Ville(codePostala)
)ENGINE=InnoDB;


#-----------------------------------------------------------------------
#   TABLE : Appartement
#-----------------------------------------------------------------------

create table Appartement(
    numAppartement int not null ,
    numEtage int ,
    numPorte int ,
    numImmeuble varchar(50) not null ,
    primary key(numAppartement , numImmeuble ) ,
    constraint fk_copro_appart foreign key (numImmeuble) references Copropriete(numImmeuble)
)ENGINE=InnoDB;


#-----------------------------------------------------------------------
#   TABLE : Declencher
#-----------------------------------------------------------------------

create table Declencher(
    numAppartement int ,
    codeSinistre varchar(50) ,
    constraint fk_appart_decl foreign key (numAppartement) references Appartement(numAppartement) ,
    constraint fk_sini_decl foreign key (codeSinistre) references Sinistre(codeSinistre)
)ENGINE=InnoDB;


#-----------------------------------------------------------------------
#   TABLE : AppelsFond
#-----------------------------------------------------------------------

create table AppelsFond(
    numAF int primary key ,
    montantAF float ,
    relanceAF boolean
)ENGINE=InnoDB;


#-----------------------------------------------------------------------
#   TABLE : Payer
#-----------------------------------------------------------------------

create table Payer(
    datePaiement date ,
    numAF int ,
    numAppartement int ,
    constraint fk_af_payer foreign key (numAF) references AppelsFond(numAF) ,
    constraint fk_appart_payer foreign key (numAppartement) references Appartement(numAppartement) 
)ENGINE=InnoDB;


#-----------------------------------------------------------------------
#   TABLE : Habitant
#-----------------------------------------------------------------------

create table Habitant(
    numHabitant int primary key ,
    nomHabitant varchar(50) ,
    prenomHabitant varchar(50) ,
    dateEmmenagement date ,
    telHabitant varchar(50) ,
    emailHabitant varchar(50) ,
    membreCS boolean ,
    presidentCS boolean ,
    numImmeuble varchar(50) ,
    numAppartement int ,
    constraint fk_appart1_hab foreign key (numImmeuble) references Appartement(numImmeuble) ,
    constraint fk_appart2_hab foreign key (numAppartement) references Appartement(numAppartement)
)ENGINE=InnoDB;


#-----------------------------------------------------------------------
#   TABLE : CS
#-----------------------------------------------------------------------

create table CS(
    numCS int primary key ,
    dateCS date 
)ENGINE=InnoDB;


#-----------------------------------------------------------------------
#   TABLE : Regrouper
#-----------------------------------------------------------------------

create table Regrouper(
    numHabitant int ,
    numCS int ,
    constraint fk_hab_reg foreign key (numHabitant) references Habitant(numHabitant) ,
    constraint fk_cs_reg foreign key (numCS) references CS(numCS)
)ENGINE=InnoDB;


#-----------------------------------------------------------------------
#   TABLE : AG
#-----------------------------------------------------------------------

create table AG(
    numAG int primary key ,
    nbDecision int ,
    dateAG date
)ENGINE=InnoDB;


#-----------------------------------------------------------------------
#   TABLE : Reunir
#-----------------------------------------------------------------------

create table Reunir(
    present boolean ,
    numHabitant int ,
    numAG int ,
    constraint fk_hab_reu foreign key (numHabitant) references Habitant(numHabitant) ,
    constraint fk_ag_reu foreign key (numAG) references AG(numAG)
)ENGINE=InnoDB;




#Fin du script de création de la Base de Données de N.G Immobilier
# ©Copyright 2018 IDAC, tout droit réservé


