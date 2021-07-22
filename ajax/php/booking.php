<?php

include_once(dirname(__FILE__) . '/../../class/include.php');
header('Content-Type: application/json; charset=UTF8');

//-- ** Start Create Code Block
if (isset($_POST['create'])) {
    //-- ** Start Create Image
    $BOOKING = new Booking(NULL);
    $BOOKING->name = $_POST['name'];
    $BOOKING->type = $_POST['type'];
    $BOOKING->contact = $_POST['phone'];
    $BOOKING->dob = $_POST['dob'];
    $BOOKING->email = $_POST['email'];
    $BOOKING->grama_wasama = $_POST['grama'];
    $BOOKING->grama_no = 'dsd';
    $BOOKING->address = $_POST['address'];
    $BOOKING->district = $_POST['district'];
    $BOOKING->ds = $_POST['ds'];
    $BOOKING->location = $_POST['location'];
    $BOOKING->whatsapp = $_POST['whatsapp'];
    $BOOKING->create();
    //-- ** End Assign Post Params
    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}
//-- ** Start Create Code Block
//--------------------------------------------------------------------------
//Start Update Code Block
