create database takalo;
use takalo;


create table user(
    idUser int primary key auto_increment,
    nomUser varchar(25) not null,
    email VARCHAR(25) not null unique,
    password VARCHAR(12) not null

);

create table admin(
    idAdmin int primary key auto_increment,
    nomAdmin varchar(25) not null,
    email VARCHAR(25) not null unique,
    password VARCHAR(12) not null

);

create table objet(
    idObjet int primary key auto_increment,
    idUser int,
    nomObjet VARCHAR(25) not null,
    lien_photo VARCHAR(50) not null,
    categorie int not null,
    prix float,
    FOREIGN KEY (categorie) REFERENCES categorie(idCategorie),
    FOREIGN KEY(idUser) REFERENCES user (idUser)
);

create table categorie(
    idCategorie int primary key auto_increment,
    nomCategorie VARCHAR(25) not null
);

create table proposition(
    idPro int primary key auto_increment,
    id_objet_cible int not null,
    id_objet_propose int not null,
    etat int default 0,
    FOREIGN KEY (id_objet_cible) REFERENCES objet(idObjet),
    FOREIGN KEY (id_objet_propose) REFERENCES objet(idObjet)
);

create table echange(
    idEchange int primary key auto_increment,
    id_objet int not null,
    id_proprio_initial int not null,
    id_proprio_final int not null,
    FOREIGN KEY (id_objet) REFERENCES objet(id_objet),
    FOREIGN KEY (id_proprio_initial) REFERENCES user(idUser),
    FOREIGN KEY (id_proprio_final) REFERENCES user(idUser)
);

create view proposition_data as (
    select idPro,id_objet_cible,id_objet_propose,nomObjet as nom_cible,lien_photo as lien_cible,categorie as categorie_client,prix as prix_cible,idUser as user_cible
    from proposition
    join objet on proposition.id_objet_cible = objet.idObjet
    where etat = 0
);

create view proposition_data_final as (
    select *
    from proposition_data
    join objet on proposition_data.id_objet_propose = objet.idObjet
);


insert into admin(nomAdmin,email,password) values('notRootAnymore','Doe@gmail.com','r00t');

insert into user(nomUser,email,password) values ('Mino','mino@gmail.com','1deux');
-- check login script
select nomUser,idUser from user where email='mino@gmail.com' and password='1deux';



insert into objet(nomObjet,lien_photo,categorie,idUser,prix) values ('montre','blablabla',1,1,75);



insert into categorie(nomCategorie) values ('accessoire');
insert into categorie(nomCategorie) values ('vetement');
insert into categorie(nomCategorie) values ('sport');
insert into categorie(nomCategorie) values ('nourriture');
insert into categorie(nomCategorie) values ('cosmetique');





insert into proposition (id_objet_cible,id_objet_propose) values (2,5);



insert into echange(id_objet,id_proprio_initial,id_proprio_final) values(2,1,3);



select * from proposition_data_final where user_cible=4

update objet set prix=700 where idUser = 3

select count(*) as isa from user
union 
select count(*) from proposition where etat=1