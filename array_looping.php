<?php
$emp=["Tom","Jerry","James","Harry","John"];
for ($i=0; $i < count($emp) ; $i++) { 
    echo $emp[$i]."<br>";
}

$emp_details=[
    "name"=>"Harry",
    "dept"=>"IT"
];
foreach($emp_details as $key=>$value){
    echo $key.":".$value."<br>";
}

$subjects = [
    "Semester 1" => ["Java", "LBS", "UI"],
    "Semester 2" => ["Oracle", "PHP", "LBS2"]
];
foreach ($subjects as $semester => $subjectList) {

    echo "$semester<br>";

    for ($i = 0; $i < count($subjectList); $i++) {
        echo $subjectList[$i] . "<br>";
    }
}

array_push($emp,"Abcd");
print_r($emp);
echo"<br>";

array_pop($emp);
print_r($emp);
echo"<br>";

$array1 = ["Apple", "Banana"];
$array2 = ["Mango", "Orange"];
$mergedArray = array_merge($array1, $array2);
print_r($mergedArray);
echo"<br>";

$slicedArray = array_slice($mergedArray, 1, 2);
print_r($slicedArray);
echo "<br>";

$student = [
    "Name" => "TOM",
    "Age" => 24,
    "Course" => "BE"
];
$keys = array_keys($student);
print_r($keys);
?>