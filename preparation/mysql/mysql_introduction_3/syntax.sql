// SELECT *
// Selects all the fields, requires checking the database itself to see what is actually retrieved

SELECT `id`, `title`, `contents` FROM `posts`

// Updating posts
UPDATE `posts` SET
	`title` = 'This is a post',
	`contents` = 'Not really proper content'
WHERE `id` = 4
// Not specifying WHERE updates all rows in table

// Deleting posts
DELETE FROM `posts` WHERE `id` = 12