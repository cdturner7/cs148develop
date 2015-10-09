select fldBuilding, count(*) fldNumStudents from tblSections 
where fldDays like '%F%' group by fldBuilding order by fldNumStudents DESC
