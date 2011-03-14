INSERT INTO `content` (`content_id`,`site_id` ,`parent_id` ,`category_id` ,`module` ,`type` ,`source` ,`order` ,`user_id`,`title`,`title_url`,`content`,`details`,`access` ,`comments_allow` ,`comments_count` ,`geo_lat` ,`geo_long` ,`geo_accuracy` ,`viewed` ,`approval` ,`status` ,`created_at` ,`updated_at`)VALUES (NULL, '1', '0', '0', 'pages', 'page', 'website', NULL, '0',  'Blog', 'blog', NULL , 'module_page', 'E', 'Y', NULL, NULL, NULL, NULL, 'Y', 'A', 'P', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

INSERT INTO `settings` VALUES(NULL, 1, 'blog', 'enabled', 'TRUE');
INSERT INTO `settings` VALUES(NULL, 1, 'blog', 'posts_per_page', 'all');
INSERT INTO `settings` VALUES(NULL, 1, 'blog', 'url_style', 'posts');
INSERT INTO `settings` VALUES(NULL, 1, 'blog', 'date_style', 'DIGITS');
INSERT INTO `settings` VALUES(NULL, 1, 'blog', 'ratings_allow', 'no');
INSERT INTO `settings` VALUES(NULL, 1, 'blog', 'categories_display', 'yes');
INSERT INTO `settings` VALUES(NULL, 1, 'blog', 'abbreviate_post', 'no');
INSERT INTO `settings` VALUES(NULL, 1, 'blog', 'abbreviate_length', '100');
INSERT INTO `settings` VALUES(NULL, 1, 'blog', 'comments_per_page', '5');
INSERT INTO `settings` VALUES(NULL, 1, 'blog', 'comments_allow', 'no');
INSERT INTO `settings` VALUES(NULL, 1, 'blog', 'tags_display', 'no');