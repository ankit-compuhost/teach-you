ALTER TABLE `posts_articles` ADD `slug` VARCHAR(255) NOT NULL AFTER `title`;
ALTER TABLE `events` ADD `slug` VARCHAR(255) NOT NULL AFTER `event_title`;
ALTER TABLE `pages` ADD `slug` VARCHAR(255) NOT NULL AFTER `page_title`;
ALTER TABLE `groups` ADD `slug` VARCHAR(255) NOT NULL AFTER `group_title`;
