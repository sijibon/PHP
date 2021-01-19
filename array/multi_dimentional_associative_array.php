<?php

$marks =[
    "Jibon" =>[
        "bangla"=>90,
        "english"=>80,
        "maths"=>75,
        "physics"=>85
    ],

    "Anik" =>[
        "bangla"=>76,
        "english"=>89,
        "maths"=>90,
         "physics"=>75
    ],

    "Taher" =>[
        "bangla"=>60,
        "english"=>80,
        "maths"=>75,
         "physics"=>80
    ],

    "Riad" =>[
        "bangla"=>90,
        "english"=>67,
        "maths"=>75,
         "physics"=>55
    ]
];
 
echo "<table border='2px' cellpadding='5px'; cellspacing='0'>";

echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Bangla</th>";
    echo "<th>English</th>";
    echo "<th>Maths</th>";
    echo "<th>Physics</th>";
echo "</tr>";

foreach($marks as $key=> $names){
    echo "<tr>";

    echo "<th> $key</th>";
    foreach($names as $subject_marks){
        echo "<th> $subject_marks</th>";
    }

    echo "</tr>";
}

echo "</table>";