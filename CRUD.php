<?php

include 'C:/Users/User/Desktop/MEATBONES/DB.PHP';


global $input; 

$input = json_decode(file_get_contents('php://input'), true);

function create($conn,$request,$input){

$NAME    =  $input['NAME'    ]??  null; 
$AGE     =  $input['AGE'     ]??  null;
$GENDER  =  $input['GENDER'  ]??  null;
$CELL    =  $input['CELL'    ]??  null;
$EMAIL   =  $input['EMAIL'   ]??  null;
$ADDRESS =  $input['ADDRESS' ]??  null;

$result = $conn->execute_query("INSERT INTO users (NAME, AGE, GENDER, CELLPHONE, EMAIL, ADDRESS) VALUES ('$NAME', '$AGE', '$GENDER', '$CELL', '$EMAIL', '$ADDRESS')");

echo json_encode("The user has been added to the database.");

                                      };

function read($conn,$request){


if (isset($_GET['id']))
	{$id = intval($_GET['id']);
$result = $conn->execute_query ("SELECT * FROM users WHERE ID=$id");
        while ($row    = $result->fetch_array(MYSQLI_ASSOC))
        {
                printf("\n%s", json_encode($row, JSON_PRETTY_PRINT));
        }; 
	} 
    else {

$result = $conn->execute_query ("SELECT * FROM users");

    while ( $row = $result->fetch_array(MYSQLI_ASSOC))  
        
        {
                printf("\n%s", json_encode($row, JSON_PRETTY_PRINT));
        };
     	  }
                             };


function update ($conn,$request,$input,$id){

    $_GET['id'];

$NAME    =  $input['NAME'    ]??  null; 
$AGE     =  $input['AGE'     ]??  null;
$GENDER  =  $input['GENDER'  ]??  null;
$CELL    =  $input['CELL'    ]??  null;
$EMAIL   =  $input['EMAIL'   ]??  null;
$ADDRESS =  $input['ADDRESS' ]??  null;


if (isset($id)){ $id = intval($_GET['id']);
$result = $conn->execute_query("UPDATE users SET NAME = '$NAME', AGE = '$AGE', GENDER = '$GENDER', CELLPHONE = '$CELL', EMAIL = '$EMAIL', ADDRESS = '$ADDRESS' WHERE id=$id");

echo json_encode("The user data has been updated.");
               }

else { echo "Your input is invalid.";};
                                            };



function delete ($conn,$request,$id){
    $id = $_GET['id'];
if (isset($id)){
            $result = $conn->execute_query("DELETE FROM users WHERE id = $id");
            echo json_encode("The user has been deleted from the database.");
               }
else {echo json_encode("Your input is invalid.");};
  


                                    };

function patch ($conn,$request,$input,$id) {

    $_GET['id'];

     $result = $conn->execute_query("SELECT * FROM users WHERE ID = $id");

     $values = $result->fetch_array(MYSQLI_ASSOC);

$NAME    =  $input['NAME'    ]??  $values['NAME'    ]; 
$AGE     =  $input['AGE'     ]??  $values['AGE'     ];
$GENDER  =  $input['GENDER'  ]??  $values['GENDER'  ];
$CELL    =  $input['CELL'    ]??  $values['CELL'    ];
$EMAIL   =  $input['EMAIL'   ]??  $values['EMAIL'   ];
$ADDRESS =  $input['ADDRESS' ]??  $values['ADDRESS' ];


if (isset($id)){ $id = intval($_GET['id']);

$result = $conn->execute_query("UPDATE users SET NAME = '$NAME', AGE = '$AGE', GENDER = '$GENDER', CELLPHONE = '$CELL', EMAIL = '$EMAIL', ADDRESS = '$ADDRESS' WHERE id=$id");

echo json_encode("The user data has been updated.");
               }

else { echo "Your input is invalid.";};
                                           };
?>