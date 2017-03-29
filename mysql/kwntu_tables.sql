CREATE TABLE users(
	user_id		INT(7)      UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	user_name	VARCHAR(20)	UNIQUE NOT NULL,
	user_email	VARCHAR(50) UNIQUE,
	user_pword	VARCHAR(40) NOT NULL,
	user_role	VARCHAR(10) NOT NULL DEFAULT 'regular'
);

CREATE TABLE members(
	user_id			INT(7)		UNSIGNED PRIMARY KEY,
	member_fname	VARCHAR(30),
	member_lname	VARCHAR(30),
	member_addr		TINYTEXT,
	member_dbirth	DATE,
	member_gender	VARCHAR(1),
	CONSTRAINT user_pk
		FOREIGN KEY (user_id)
		REFERENCES users (user_id)
		ON UPDATE CASCADE
		ON DELETE CASCADE
);

CREATE TABLE genres(
	genre_id	INT(4)		UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	genre_name	VARCHAR(20)	UNIQUE NOT NULL
);

CREATE TABLE stories(
	story_id 			INT(8) 		UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	story_title			TINYTEXT	NOT NULL,
	story_author		VARCHAR(20) DEFAULT 'anonymous',
	story_short_desc	TEXT,
	story_pub_date		TIMESTAMP	DEFAULT CURRENT_TIMESTAMP
									ON UPDATE CURRENT_TIMESTAMP,
	story_cover_filename
						VARCHAR(100),
	genre_id			INT(4)		UNSIGNED NOT NULL,
	user_id				INT(7)		UNSIGNED NOT NULL,
	CONSTRAINT stories_genres_pk
		FOREIGN KEY (genre_id)
		REFERENCES genres (genre_id)
		ON UPDATE CASCADE
		ON DELETE RESTRICT,
	CONSTRAINT stories_members_pk
		FOREIGN KEY (user_id)
		REFERENCES members (user_id)
		ON UPDATE CASCADE
		ON DELETE RESTRICT
);

CREATE TABLE chapters(
	chapter_id		INT(10) 		UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	story_id		INT(8)			UNSIGNED UNIQUE NOT NULL,
	chapter_title	TINYTEXT		NOT NULL,
	chapter_text	MEDIUMTEXT,
	FOREIGN KEY (story_id)
		REFERENCES stories (story_id)
		ON UPDATE CASCADE
		ON DELETE RESTRICT
);

CREATE TABLE members_chapters(
	user_id		INT(7) UNSIGNED,
	chapter_id 	INT(8) UNSIGNED,
	story_read 	BIT		DEFAULT 0,
	hearted 	BIT		DEFAULT 0,
	bookmarked 	BIT		DEFAULT 0,
	PRIMARY KEY (user_id, chapter_id),
	FOREIGN KEY (user_id)
		REFERENCES members (user_id)
		ON UPDATE CASCADE
		ON DELETE RESTRICT,
	FOREIGN KEY (chapter_id)
		REFERENCES chapters (chapter_id)
		ON UPDATE CASCADE
		ON DELETE RESTRICT
);