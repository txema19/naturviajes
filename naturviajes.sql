create database naturviajes;

use naturviajes;

create table contenido(
	
    imagen char(30),
	titulo char(30),
	resumen char(200),
    fecha datetime,
    seccion char(30)
    
);
savepoint guardado;

alter table contenido add column codigo int primary key auto_increment first;
select * from contenido;
create table secciones(
seccion char (30)
);
select char_length(resumen) from contenido;

insert into contenido (imagen,titulo,resumen,fecha,seccion) values 
	("egipto.jpg","Egipto","Vive la magía del mundo antiguo en los desiertos de egipto, visita las piramides y descansa en un oasis paradisiaco",current_timestamp(),"Mundo");
insert into contenido (imagen,titulo,resumen,fecha,seccion) values 
	("galicia.jpg","Galicia","Tierra de meigas y cuentos de hadas. Descubre sus misterios y pierdete en sus mágicos bosques en este viaje inolvidable",current_timestamp(),"España");
insert into contenido (imagen,titulo,resumen,fecha,seccion) values 
	("inglaterra.jpg","Inglaterra","El país del Rey Arturo y sus caballeros de la mesa redonda. Vive increibles aventuras recorriendo sus rutas.",current_timestamp(),"Europa");
delete from contenido where titulo = 'Galicia';
INSERT INTO contenido (imagen, titulo, resumen, fecha, seccion) VALUES 
	("amsterdam.jpg", "Amsterdam", "Descubre la belleza de los canales y la arquitectura histórica de la ciudad, disfruta de sus famosos coffee shops y relájate en sus espacios verdes.", CURRENT_TIMESTAMP(), "Europa"),
	("australia.jpg", "Australia", "Explora el paisaje espectacular de la Gran Barrera de Coral, admira la impresionante Ópera de Sydney y conoce la cultura de los aborígenes australianos en este emocionante viaje.", CURRENT_TIMESTAMP(), "Mundo"),
	("barcelona.jpg", "Barcelona", "Sumérgete en la vibrante cultura catalana, descubre la impresionante arquitectura de Gaudí y disfruta de la deliciosa gastronomía local en esta ciudad mediterránea llena de encanto.", CURRENT_TIMESTAMP(), "España"),
	("granada.jpg", "Granada", "Descubre la impresionante arquitectura de la Alhambra y explora las callejuelas llenas de historia del barrio del Albayzín en esta ciudad andaluza rica en cultura y tradición.", CURRENT_TIMESTAMP(), "España"),
	("ibiza.jpg", "Ibiza", "Sumérgete en la vibrante vida nocturna de la isla, relájate en sus playas de aguas cristalinas y disfruta de la deliciosa comida mediterránea en esta isla balear llena de energía.", CURRENT_TIMESTAMP(), "España"),
	("india.jpg", "India", "Explora los palacios y templos históricos de Rajasthan, vive la espiritualidad de Varanasi y disfruta de los colores y sabores de la vida india en este viaje lleno de cultura y tradición.", CURRENT_TIMESTAMP(), "Mundo"),
	("paris.jpg", "París", "Descubre la ciudad del amor y la luz, admira la majestuosidad de la Torre Eiffel y disfruta de la deliciosa gastronomía francesa en esta ciudad llena de encanto y romanticismo.", CURRENT_TIMESTAMP(), "Europa"),
	("patagonia.jpg", "Patagonia", "Explora la naturaleza impresionante de la Patagonia argentina, descubre sus glaciares y montañas majestuosas y maravíllate con la fauna y flora única de esta región", CURRENT_TIMESTAMP(), "Mundo"),
	("praga.jpg", "Praga", "Descubre la ciudad de las cien torres y pierdete en sus calles de ensueño. Disfruta de la rica historia de la capital de la República Checa.", current_timestamp(), "Europa"),
	("sansebastian.jpg", "San Sebastián", "Explora la hermosa ciudad costera en el País Vasco y disfruta de su gastronomía incomparable. Descubre la belleza del mar y de la ciudad.", current_timestamp(), "España"),
	("sevilla.jpg", "Sevilla", "Descubre la ciudad del sol y disfruta de la pasión del flamenco, su arquitectura y su deliciosa gastronomía. Sumérgete en la rica cultura de la capital de Andalucía.", current_timestamp(), "España");
-- Praga, República Checa






insert into secciones values
("Mundo"),
("Europa"),
("España")
;

select * from contenido;

set sql_safe_updates=0;

delete from contenido where titulo = "Singapour"; 

alter table contenido modify fecha datetime not null default CURRENT_TIMESTAMP();

  savepoint guardado;