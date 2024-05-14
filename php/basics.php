<?php
// Example PHP script demonstrating control statements

// 1. If statement
$number = 10;
if ($number > 5) {
    echo "Number is greater than 5.\n";
}

// 2. If-Else statement
$age = 17;
if ($age >= 18) {
    echo "You are an adult.\n";
} else {
    echo "You are a minor.\n";
}

// 3. If-Elseif-Else statement
$score = 85;
if ($score >= 90) {
    echo "Grade: A\n";
} elseif ($score >= 80) {
    echo "Grade: B\n";
} elseif ($score >= 70) {
    echo "Grade: C\n";
} else {
    echo "Grade: D or below\n";
}

// 4. Switch statement
$day = "Tuesday";
switch ($day) {
    case "Monday":
        echo "It's Monday!\n";
        break;
    case "Tuesday":
        echo "It's Tuesday!\n";
        break;
    case "Wednesday":
        echo "It's Wednesday!\n";
        break;
    default:
        echo "It's some other day.\n";
        break;
}

// 5. While loop
$count = 0;
while ($count < 3) {
    echo "While Loop Count: $count\n";
    $count++;
}

// 6. Do-While loop
$count = 0;
do {
    echo "Do-While Loop Count: $count\n";
    $count++;
} while ($count < 3);

// 7. For loop
for ($i = 0; $i < 3; $i++) {
    echo "For Loop Iteration: $i\n";
}

// 8. Foreach loop
$colors = ["Red", "Green", "Blue"];
foreach ($colors as $color) {
    echo "Color: $color\n";
}
