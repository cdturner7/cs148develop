--
-- Table structure for table `tblSemesterPlanCourses`
--

DROP TABLE IF EXISTS tblSemesterPlanCourses;
CREATE TABLE IF NOT EXISTS tblSemesterPlanCourses (
  pmkPlanId int(11) NOT NULL,
  fnkSemesterId int(10) NOT NULL,
  fnkDepartment varchar(20) NOT NULL,
  fnkCourseNumber int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8