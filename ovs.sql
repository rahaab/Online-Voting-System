CREATE TABLE admin (
  s_no int NOT NULL AUTO_INCREMENT,
  firstname varchar(20) NOT NULL,
  lastname varchar(20) DEFAULT NULL,
  email varchar(45) NOT NULL,
  pswd varchar(30) NOT NULL,
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `pswd_UNIQUE` (`pswd`),
  constraint pk_s PRIMARY KEY (s_no));
  INSERT INTO `admin` VALUES (1,'Adeel','Khan','adeelkhan@gmail.com','ned123');
  
  CREATE TABLE candidate (
  cand_id int NOT NULL AUTO_INCREMENT,
  firstname varchar(20) NOT NULL,
  lastname varchar(20) DEFAULT NULL,
  mob_no varchar(15) NOT NULL,
  nic_no varchar(30) NOT NULL,
  address varchar(100) NOT NULL,
  email varchar(45) NOT NULL,
  pswd varchar(30) NOT NULL,
  status enum("Voted","Not Voted") NOT NULL DEFAULT 'Voted',
  vote_count int NOT NULL DEFAULT '0',
  photo varchar(355) DEFAULT NULL,
  constraint pk_cid PRIMARY KEY (cand_id));
  INSERT INTO `candidate` VALUES (1,'Mahira ','Khan','03352068800','42101-3453453-0','A/12 DHA Phase 8, Karachi','mahirakhan@gmail.com','mahira123','Voted',0,NULL),(2,'Atif ','Aslam','03306546677','42101-5935555-0','C-14 Lane 5 DHA Phase 6 Karachi','atifaslam@gmail.com','atif123','Voted',0,NULL),(3,'Humayun ','Saeed','0332332201','42101-3332293-0','D/23 Clifton Karachi','humayunsaeed@gmail.com','humayun123','Voted',0,NULL);
  
  CREATE TABLE voter (
  voter_id int NOT NULL AUTO_INCREMENT,
  firstname varchar(20) NOT NULL,
  lastname varchar(20) DEFAULT NULL,
  mob_no varchar(15) NOT NULL,
  nic_no varchar(30) NOT NULL,
  email varchar(45) NOT NULL,
  pswd varchar(30) NOT NULL,
  photo varchar(355) DEFAULT NULL,
  address varchar(100) NOT NULL,
  status enum("Voted","Not Voted") NOT NULL DEFAULT 'Voted',
  constraint pk_vid PRIMARY KEY (voter_id));
  INSERT INTO `voter` VALUES (1,'Shaheen','Afridi','03335433422','42101-3456789-0','shaheenafridi@gmail.com','qwerty123',NULL,'A-954 Block B Gulshan Iqbal','Voted'),(2,'Hassan ','Ali','03354223222','42101-7897655-0','hassanali@gmail.com','asd123',NULL,'B-123 Sector 11-B North Karachi','Voted'),(3,'Shehnila ','Khan','03362016689','42101-6656645-0','shehnilakhan@gmail.com','zxc123',NULL,'C-13  Block c North Nazimabad','Voted'),(4,'Maria','Wasti','03352098822','42101-3322223-0','mariawasti@gmail.com','fgh123',NULL,'B-13/9 Block B North Nazimabad ','Voted'),(5,'Areeba','Khan','03342096521','42101-3333334-0','areebakhan@gmail.com','jkl123',NULL,'R-11C Tariq Road Karachi','Voted');
  

  
  
  

