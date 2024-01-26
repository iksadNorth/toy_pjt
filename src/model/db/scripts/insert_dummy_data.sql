insert into `member` (`name`) 
values  ('ex1 - name'),
        ('ex2 - name');

insert into `article` (`content`, `title`, `writer_id`) 
values  ('ex1 - content', 'ex1 - title', 1),
        ('ex2 - content', 'ex2 - title', 2);

insert into `tag` (`name`) 
values  ('ex1 - tag - name'),
        ('ex2 - tag - name');

insert into `rel_article_tag` (`article_id`, `tag_id`) 
values  (1, 1),
        (2, 2);
