CREATE TABLE admin (
  s_no int NOT NULL AUTO_INCREMENT,
  firstname varchar(20) NOT NULL,
  lastname varchar(20),
  email varchar(45) NOT NULL,
  pswd varchar(30) NOT NULL,
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `pswd_UNIQUE` (`pswd`),
  constraint pk_s PRIMARY KEY (s_no));
  INSERT INTO `admin` VALUES (1,'Adeel','Khan','adeelkhan@gmail.com','ned123');
  
  CREATE TABLE candidate (
  cand_id int NOT NULL AUTO_INCREMENT,
  firstname varchar(20) NOT NULL,
  lastname varchar(20),
  mob_no varchar(15) NOT NULL,
  nic_no varchar(30) NOT NULL,
  address varchar(100) NOT NULL,
  email varchar(45) NOT NULL,
  pswd varchar(30) NOT NULL,
  status enum("Voted","Not Voted") NOT NULL DEFAULT 'Not Voted',
  vote_count int NOT NULL DEFAULT '0',
  photo varchar(255),
  role varchar(9) DEFAULT 'candidate',
  constraint pk_cid PRIMARY KEY (cand_id));
  INSERT INTO `candidate` VALUES
  (1,'Mahira ','Khan','03352068800','42101-3453453-0','A/12 DHA Phase 8, Karachi','mahirakhan@gmail.com','mahira123','Not Voted',0,'Mahira.jpg','candidate'),
  (2,'Atif ','Aslam','03306546677','42101-5935555-0','C-14 Lane 5 DHA Phase 6 Karachi','atifaslam@gmail.com','atif1234','Not Voted',0,'atif.jpg','candidate'),
  (3,'Humayun ','Saeed','0332332201','42101-3332293-0','D/23 Clifton Karachi','humayunsaeed@gmail.com','humayun123','Not Voted',0,'humayun.jpg','candidate'),
  (4,'Aniqa ','Ali','03232451119','42101-5623991-0','G/98 Gulistan e Jouhar Karachi','aniqaali@gmail.com','aniqa45','Not Voted',0,'aniqa.jpg','candidate'),
  (5,'Arshad ','Waleed','03339078654','42101-2478445-0','L/61 Bahria Town Karachi','arshadwaleed@gmail.com','waleed67','Not Voted',0,'arshad.jpg','candidate'),
  (6,'Laiba ','Aqeel','03347864775','42101-3378967-0','D/28 Clifton Karachi','laibaaqeel@gmail.com','aqeel09','Not Voted',0,'laiba.jpg','candidate'),
  (7,'Waseem ','Hashim','03324560841','42101-5438953-0','Y/28 Airport Karachi','waseemhashim@gmail.com','waseem23','Not Voted',0,'waseem.jpg','candidate'),
  (8,'Imama ','Hashim','03097845623','42101-3378945-0','Y/28 Airport Karachi','imamahashim@gmail.com','imama13','Not Voted',0,'imama.jpg','candidate'),
  (9,'Jihan ','Sikandar','03308897623','42101-3342897-0','U/90 Gulshan e Iqbal Karachi','jihansikander@gmail.com','sikander67','Not Voted',0,'jihan.jpg','candidate'),
  (10,'Khirad ','Suleiman','0332332201','42101-5634757-0','A-76 DHA city Karachi','khiradsuleiman@gmail.com','suleiman78','Not Voted',0,'khirad.jpg','candidate');

  CREATE TABLE voter (
  voter_id int NOT NULL AUTO_INCREMENT,
  firstname varchar(20) NOT NULL,
  lastname varchar(20),
  mob_no varchar(15) NOT NULL,
  nic_no varchar(30) NOT NULL,
  email varchar(45) NOT NULL,
  pswd varchar(30) NOT NULL,
  photo varchar(255),
  address varchar(100) NOT NULL,
  status enum("Voted","Not Voted") NOT NULL DEFAULT 'Not Voted',
  role varchar(9) NOT NULL DEFAULT 'voter',
  constraint pk_vid PRIMARY KEY (voter_id));
  INSERT INTO `voter` VALUES 
  (1,'Shaheen','Afridi','03335433422','42101-3456789-0','shaheenafridi@gmail.com','qwerty123','shaheen.jpg','A-954 Block B Gulshan Iqbal','Not Voted','voter'),
  (2,'Hassan ','Ali','03354223222','42101-7897655-0','hassanali@gmail.com','hassan123','hassan.jpg','B-123 Sector 11-B North Karachi','Not Voted','voter'),
  (3,'Shehnila ','Khan','03362016689','42101-6656645-0','shehnilakhan@gmail.com','khan9123','shehnila.jpg','C-13  Block c North Nazimabad','Not Voted','voter'),
  (4,'Maria','Wasti','03352098822','42101-3322223-0','mariawasti@gmail.com','maria123','maria.jpg','B-13/9 Block B North Nazimabad ','Not Voted','voter'),
  (5,'Areeba','Khan','03342096521','42101-3333334-0','areebakhan@gmail.com','jkpno123','areeba.jpg','R-11C Tariq Road Karachi','Not Voted','voter'),
  (6,'Azlan','Hameed','03334567231','42101-3339085-0','azlanhameed@gmail.com','hameed90','azlan.jpg','A-21 Jail Road Karachi','Not Voted','voter'),
  (7,'Hunain','Yousuf','03234512367','42101-3784578-0','hunainyousuf@gmail.com','yousuf23','hunain.jpg','B-45 Baitul Muqaram Karachi','Not Voted','voter'),
  (8,'Faris','Ghazi','03346784234','42101-5645359-0','farisghazi@gmail.com','ghazi678','faris.jpg','D-11 Saddar Karachi','Not Voted','voter'),
  (9,'Aliza','Sikander','03086745324','42101-7856956-0','sikander67@gmail.com','alizas88','aleeza.jpg','F/23 Gohar City Karachi','Not Voted','voter'),
  (10,'Umer','Jahangir','03094534891','42101-5434987-0','umer56@gmail.com','jahangir','umer.jpg','S-186/1 PAF Base Karachi','Not Voted','voter');
  
Create Table poll (
s_no int NOT NULL auto_increment,
Start_date date NOT NULL,
End_date date NOT NULL,
Age int NOT NULL,
rules varchar(2000) NOT NULL,
constraint pk_s PRIMARY KEY (s_no));
INSERT INTO poll VALUES
('1','2022-01-12','2022-01-30','18','1)A user (voter) will be allowed to vote only once per poll. 2)A user( candidate) will also be allowed to vote only once per poll. 3)If the vote status shows voted that means that particular user has voted once. 4)You are only allowed to vote only during the time of the poll, like only between the start and end date mentioned. 5)Voting status will update once only. 6)An age criteria is set up by candidates that will allow them to register as one. If that candidate has an age greater then the age specified than he/ she can register. 7)This age criteria may vary for different polls conducted. You can set it by yourself  for different polls. 8)No voting will be entertained after or before the poll scheduled dates.');
