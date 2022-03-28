ALTER TABLE `posts_articles` ADD `slug` VARCHAR(255) NOT NULL AFTER `title`;
ALTER TABLE `events` ADD `slug` VARCHAR(255) NOT NULL AFTER `event_title`;
