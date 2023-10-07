CREATE TABLE membre (
	id int(11) NOT NULL auto_increment,
	login text NOT NULL,
	pass_md5 text NOT NULL,
	PRIMARY KEY  (id)
) TYPE=MyISAM;