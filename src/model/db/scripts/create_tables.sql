use php_toy_pjt;

create table `article` ( 
    `id` BIGINT PRIMARY KEY AUTO_INCREMENT,
    `created_at` DATETIME , 
    `content` VARCHAR(256) , 
    `main_image_url` VARCHAR(256) , 
    `title` VARCHAR(256),
    `writer_id` BIGINT
);

create table `member` ( 
    `id` BIGINT PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(256) ,
    `profile_image_url` VARCHAR(256)
);

create table `tag` ( 
    `id` BIGINT PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(256) UNIQUE
);

create table `rel_article_tag` ( 
    `id` BIGINT PRIMARY KEY AUTO_INCREMENT,
    `article_id` BIGINT,
    `tag_id` BIGINT
);

alter table article
add constraint fk_article_writer
foreign key (writer_id)
references member(id);

alter table rel_article_tag
add constraint fk_rel_article_tag_article
foreign key (article_id)
references article(id);

alter table rel_article_tag
add constraint fk_rel_article_tag_tag
foreign key (tag_id)
references tag(id);