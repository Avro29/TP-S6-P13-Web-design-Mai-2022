Create database climat;
use climat;

create table admin(
	id INT NOT NULL AUTO_INCREMENT,
	nom VARCHAR(50),
	mdp VARCHAR(255),
	primary key(id)
);

create table typeRechauffement(
	id INT NOT NULL AUTO_INCREMENT,
	nom VARCHAR(40),
	primary key(id)
);

create table rechauffement(
	id INT NOT NULL AUTO_INCREMENT,
	idType int,
	lieu VARCHAR(40),
	daty date,
	primary key(id),
	foreign key(idType) REFERENCES typeRechauffement(id)
);

create table detail(
	id INT NOT NULL AUTO_INCREMENT,
	idRechauffement INT,
	titre VARCHAR(50),
	article VARCHAR(255),
	url VARCHAR(100),
	photo VARCHAR(50),
	primary key(id),
	foreign key(idRechauffement) REFERENCES rechauffement(id)
);

insert into admin values(null,'Ravo',sha1('ravo'));
insert into admin values(null,'Dawood',sha1('dawood'));
insert into admin values(null,'Kiady',sha1('kiady'));

insert into typeRechauffement values(null,'canicule');
insert into typeRechauffement values(null,'Montée de la mer');
insert into typeRechauffement values(null,'Fonte de glace');

insert into rechauffement values(null,1,'France','2022-05-13');
insert into rechauffement values(null,1,'Portugal','2022-06-10');
insert into rechauffement values(null,1,'Madagascar','2022-06-26');

insert into rechauffement values(null,2,'Atlantique','2022-02-18');
insert into rechauffement values(null,2,'Ocean Indien','2022-02-10');
insert into rechauffement values(null,2,'Mahakjanga','2022-01-08');

insert into rechauffement values(null,3,'Pôle Nord','2022-04-13');
insert into rechauffement values(null,3,'Pôle Sud','2022-04-10');
insert into rechauffement values(null,3,'Suede','2022-04-04');
