--
-- Table structure for table `tblFourYearPlan`
--

DROP TABLE IF EXISTS tblFourYearPlan;
CREATE TABLE IF NOT EXISTS `tblFourYearPlan` (
  `pmkPlanId` int(11) NOT NULL,
  `fldDateCreated` varchar(11) NOT NULL,
  `fnkStudentId` int(11) NOT NULL,
  `fnkAdvisorId` int(11) NOT NULL,
  `fldMajor` varchar(20) NOT NULL,
  `fldMinor` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;