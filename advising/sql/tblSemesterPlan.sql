--
-- Table structure for table `tblSemsterPlan`
--

DROP TABLE IF EXISTS tblSemesterPlan;
CREATE TABLE IF NOT EXISTS tblSemsterPlan (
  pmkSemesterId int(11) NOT NULL,
  fldDisplayOrder int(5) NOT NULL,
  fldYear int(4) NOT NULL,
  fldTerm varchar(11) NOT NULL,
  fldNumberCredits int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8