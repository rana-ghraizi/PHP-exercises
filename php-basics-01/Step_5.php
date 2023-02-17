<?php
$course_name = "JavaScript";
$enrolled_students = 20;
$price = 19.99;
$on_discount = true;

// output
echo "Course title: $course_name \n
Enrolled students: $enrolled_students \n
Course price: $price $ USD \n
Course on discount: ";
if ($on_discount) 
{ 
echo "Yes"; 
}
else 
{ 
echo "No";
}
?>