select fnkSectionId, fldLastName,fldFirstName 
from tblEnrolls 
join tblStudents on pmkStudentId = fnkStudentId 
where fnkCourseId = '392' 
order by fnkSectionId, fldLastName, fldFirstName