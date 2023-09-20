<?php
session_start();
include '/OSPanel/domains/FLOWRES/database/connection.php';

function clearString( $str ) {
    $str = trim( $str );
    $str = strip_tags( $str );
    $str = stripslashes( $str );
    return $str;
}

$phone = $_POST[ 'phone' ];
$user_name = ( $_POST[ 'user_name' ] );
$email = ( $_POST[ 'email' ] );
$password = ( $_POST[ 'password' ] );


if ( $phone === '' ) {
    $errors = 'Заполните поле';
  
}
if ( $user_name === '' ) {
    $errors = 'Заполните поле';
   
}
if ( $email === '' ) {
    $errors = 'Заполните поле';
 
}
if ( $password === '' ) {
    $errors = 'Заполните поле';
   
}
if ( !empty( $error_fields ) ) {
    $response = [
        'status' => false,
        'type' => 1,
        'fields' => $error_fields,
        'errors' => $errors
    ];
    echo json_encode( $response );
    die();
}

clearString( $password );
clearString( $phone );

// $password = md5( $_POST[ 'password' ] );
$query = "SELECT * FROM Users WHERE Phone='$phone'";
$check_user = mysqli_query( $link, $query ) or die( 'Ошибка выполнения запроса' .mysqli_error( $link ) );

if ( mysqli_num_rows( $check_user ) > 0 ) 
 {
    $user = mysqli_fetch_assoc( $check_user );
    $_SESSION[ 'user' ] = [
        'ID' => $user['ID'],
        'Name' => $user[ 'Name' ],
        'Phone' => $user[ 'Phone' ],
        'Email' => $user[ 'Email' ],
        'User_type' => $user[ 'User_type' ]
    ];

    $response = [
        'status' => true
    ];

    echo json_encode( $response );
} else{
    $query="INSERT INTO users (Name,  Email, Phone, Password,User_type, Salt)
    VALUES ('$name','$email','$phone','$password','1',1)";
    $result = mysqli_query($link, $query) or die("Ошибка " .mysqli_error($link));  
    $_SESSION[ 'user' ] = [
        'ID' => $user['ID'],
        'Name' => $user[ 'Name' ],
        'Phone' => $user[ 'Phone' ],
        'Email' => $user[ 'Email' ],
        'User_type' => $user[ 'User_type' ]
    ];
    $response = [
        'status' => true
    ];

    echo json_encode( $response );
}
?>
