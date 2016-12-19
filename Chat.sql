Create table Chat(
  id int,
  loginid varchar(32),
  password varchar(16),
  dispname varchar(32),
  del_flag BOOLEAN DEFAULT False,
  lastlogin_date DATETIME,

  PRIMARY KEY(id)
);
