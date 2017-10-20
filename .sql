CREATE TABLE puncounter (
	countId BINARY(16) NOT NULL,
	dateofpun DATETIME(6) NOT NULL,
	countofpun INT(10) NOT NULL,
	INDEX (dateofpun),
	PRIMARY KEY (countID)
)