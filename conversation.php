<!--Conversation PHP template for conversation JSON data-->

<?php
$conversation = array (requirements array ( 
                        character:"male1", 
                        tan:5,
                        accessories: [], 
                        love:"white"
                ),
                 
                 intro array (
                     subject: "",
                     response array ( 	"response" : "Do you drink a lot of smoothies? What's your favorite?",
									"path" : "male1/smoothies",
									"time" : 1 )
                             ),
                     );

echo json_encode($conversation);
?>

