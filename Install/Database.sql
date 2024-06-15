create table i60_road
(
	key_step timestamp not null,
	type tinyint unsigned not null,
	summary text null,
	data json not null,
	constraint i60_road_pk
		primary key (key_step)
);

