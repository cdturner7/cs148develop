DROP TABLE IF EXISTS tblClasses;
CREATE TABLE IF NOT EXISTS tblClasses (
  fldClassName varchar(255) DEFAULT NULL,
  fldSemester varchar(10) DEFAULT NULL,
  fldClassId varchar(50) DEFAULT NULL,
  fldAdvFirstName varchar(255) DEFAULT NULL,
  fldAdvLastName varchar(255) DEFAULT NULL,
  fldCredit char(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;





INSERT INTO tblClasses (fldClassName, fldSemester, fldClassId, 
                        fldAdvFirstName, fldAdvLastName, fldCredit) VALUES

(