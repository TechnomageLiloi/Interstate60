create table rune_wiki
(
    key_wiki varchar(700) not null,
    title varchar(300) not null,
    article text not null,
    constraint rune_wiki_pk
        primary key (key_wiki)
);