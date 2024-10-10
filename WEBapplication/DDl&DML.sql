CREATE TABLE Job (
Job_Class TEXT PRIMARY KEY NOT NULL,
CHG_Hour TEXT NOT NULL
);

CREATE TABLE Project(
ProjectNumber TEXT NOT NULL,
ProjectName TEXT NOT NULL
);

CREATE TABLE Assignment(
ProjectNumber TEXT NOT NULL,
Employee_NO TEXT  NOT NULL,
Hours TEXT
);

CREATE TABLE Employee(
Employee_NO TEXT NOT NULL,
Employee_FName TEXT NOT NULL,
Employee_MName TEXT NOT NULL,
Employee_LName TEXT NOT NULL,
Job_Class TEXT NOT NULL
);

INSERT INTO Job(Job_Class,CHG_Hour) VALUES ('Database Designer','£105.00');
INSERT INTO Job(Job_Class,CHG_Hour) VALUES ('Systems Analyst','£98.75');
INSERT INTO Job(Job_Class,CHG_Hour) VALUES ('Elect. Engineer','£84.50');
INSERT INTO Job(Job_Class,CHG_Hour) VALUES ('General Support','£18.36');
INSERT INTO Job(Job_Class,CHG_Hour) VALUES ('Applications Designer','£48.10');
INSERT INTO Job(Job_Class,CHG_Hour) VALUES ('Programmer','£35.75');
INSERT INTO Job(Job_Class,CHG_Hour) VALUES ('Clerical Support','£26.87');
INSERT INTO Job(Job_Class,CHG_Hour) VALUES ('DSS Analyst','£45.95');

INSERT INTO Project(ProjectNumber,ProjectName) VALUES ('15','Evergreen');
INSERT INTO Project(ProjectNumber,ProjectName) VALUES ('18','Amber Wave');
INSERT INTO Project(ProjectNumber,ProjectName) VALUES ('22','Rolling Tide');
INSERT INTO Project(ProjectNumber,ProjectName) VALUES ('25','Starflight');

INSERT INTO Assignment(ProjectNumber,Employee_NO, Hours) VALUES ('15','103','23.8');
INSERT INTO Assignment(ProjectNumber,Employee_NO, Hours) VALUES ('15.0','101','19.4');
INSERT INTO Assignment(ProjectNumber,Employee_NO, Hours) VALUES ('15.00','105','35.7');
INSERT INTO Assignment(ProjectNumber,Employee_NO, Hours) VALUES ('15.000','106','12.6');
INSERT INTO Assignment(ProjectNumber,Employee_NO, Hours) VALUES ('15.0000','102','23.8');
INSERT INTO Assignment(ProjectNumber,Employee_NO, Hours) VALUES ('18.0','114','24.6');
INSERT INTO Assignment(ProjectNumber,Employee_NO, Hours) VALUES ('18.00','118','45.3');
INSERT INTO Assignment(ProjectNumber,Employee_NO, Hours) VALUES ('18.000','104','30.5');
INSERT INTO Assignment(ProjectNumber,Employee_NO, Hours) VALUES ('18.0000','112','44');
INSERT INTO Assignment(ProjectNumber,Employee_NO, Hours) VALUES ('22.0','105','64.7');
INSERT INTO Assignment(ProjectNumber,Employee_NO, Hours) VALUES ('22.00','104','48.4');
INSERT INTO Assignment(ProjectNumber,Employee_NO, Hours) VALUES ('22.000','113','23.6');
INSERT INTO Assignment(ProjectNumber,Employee_NO, Hours) VALUES ('22.0000','111','22');
INSERT INTO Assignment(ProjectNumber,Employee_NO, Hours) VALUES ('22.00000','106','12.8');
INSERT INTO Assignment(ProjectNumber,Employee_NO, Hours) VALUES ('25.0','107','24.6');
INSERT INTO Assignment(ProjectNumber,Employee_NO, Hours) VALUES ('25.00','115','45.8');
INSERT INTO Assignment(ProjectNumber,Employee_NO, Hours) VALUES ('25.000','101','56.3');
INSERT INTO Assignment(ProjectNumber,Employee_NO, Hours) VALUES ('25,0000','114','33.1');
INSERT INTO Assignment(ProjectNumber,Employee_NO, Hours) VALUES ('25.00000','108','23.1');
INSERT INTO Assignment(ProjectNumber,Employee_NO, Hours) VALUES ('25.000000','118','30.5');
INSERT INTO Assignment(ProjectNumber,Employee_NO, Hours) VALUES ('25.0000000','112','44');

INSERT INTO Employee(Employee_NO,Employee_FName,Employee_MName, Employee_LName, Job_Class) VALUES ('101','John','G.','News','Database Designer');
INSERT INTO Employee(Employee_NO,Employee_FName,Employee_MName, Employee_LName, Job_Class) VALUES ('102','David','H.','Senior','Systems Analyst');
INSERT INTO Employee(Employee_NO,Employee_FName,Employee_MName, Employee_LName, Job_Class) VALUES ('103','June','E.','Arbough','Elect. Engineer');
INSERT INTO Employee(Employee_NO,Employee_FName,Employee_MName, Employee_LName, Job_Class) VALUES ('104','Anne','K.','Ramoras','Systems Analyst');
INSERT INTO Employee(Employee_NO,Employee_FName,Employee_MName, Employee_LName, Job_Class) VALUES ('105','Alice','K.','Johnson','Database Designer');
INSERT INTO Employee(Employee_NO,Employee_FName,Employee_MName, Employee_LName, Job_Class) VALUES ('106','William','N/A','Smithfield','Programmer');
INSERT INTO Employee(Employee_NO,Employee_FName,Employee_MName, Employee_LName, Job_Class) VALUES ('107','Maria','D.','Alonzo','Programmer');
INSERT INTO Employee(Employee_NO,Employee_FName,Employee_MName, Employee_LName, Job_Class) VALUES ('108','Raplh','B.','Washington','Systems Analyst');
INSERT INTO Employee(Employee_NO,Employee_FName,Employee_MName, Employee_LName, Job_Class) VALUES ('111','Geoff','B.','Wabash','Clerical Support');
INSERT INTO Employee(Employee_NO,Employee_FName,Employee_MName, Employee_LName, Job_Class) VALUES ('112','Darlene','M.','Smithson','DSS Analyst');
INSERT INTO Employee(Employee_NO,Employee_FName,Employee_MName, Employee_LName, Job_Class) VALUES ('113','Delbert','K.','Joenbrood','Applications Designer');
INSERT INTO Employee(Employee_NO,Employee_FName,Employee_MName, Employee_LName, Job_Class) VALUES ('114','Annelise','N/A','Jones','Applications Designer');
INSERT INTO Employee(Employee_NO,Employee_FName,Employee_MName, Employee_LName, Job_Class) VALUES ('115','Travis','B.','Bawangi','Systems Analyst');
INSERT INTO Employee(Employee_NO,Employee_FName,Employee_MName, Employee_LName, Job_Class) VALUES ('118','James','J.','Frommer','General Support');
