ALTER TABLE rel_article_tag DROP FOREIGN KEY fk_rel_article_tag_article;
ALTER TABLE rel_article_tag DROP FOREIGN KEY fk_rel_article_tag_tag;

DROP TABLE IF EXISTS rel_article_tag;
DROP TABLE IF EXISTS tag;
DROP TABLE IF EXISTS article;
DROP TABLE IF EXISTS member;
