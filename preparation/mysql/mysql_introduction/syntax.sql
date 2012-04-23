// INSERT INTO `table` (`field1`, `field2`) VALUES (my_int, 'my_string')

// INSERT INTO `table` SET
// 	`field1` = my_int,
// 	`field2` = 'my_string'


// Note that id field is supplied automatically
// Also note difference in marking around fields and databases, and actual strings
INSERT INTO `posts` ( `title`, `contents` ) VALUES ( 'This is the first post', 'The actual post goes here' )

INSERT INTO `posts` SET
	`title` = 'This is the first post with SET',
	`contents` = 'Just some content'