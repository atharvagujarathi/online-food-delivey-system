Create procedure dept_count proc(in dept name varchar(20),
out d count integer)
begin
select count(*) into d count
from instructor
where instructor.dept name= dept count proc.dept name
end