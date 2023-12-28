<?php
include('../config/autoload.php');
// session_start();
// required headers
header("Access-Control-Allow-Origin:" . $ORIGIN);
header("Content-Type:" . $CONTENT_TYPE);
header("Access-Control-Allow-Methods:" . $GET_METHOD);
header("Access-Control-Max-Age:" . $MAX_AGE);
header("Access-Control-Allow-Headers:" . $ALLOWED_HEADERS);

// initialize object
$database = new Database();
$db = $database->getConnection();

$package = new Package($db);

// var_dump($package);
// return;

// read package id will be here
$package_id = $_GET['package_id'] ?? null;
$tracking_no = $_GET['tracking_no'] ?? null;


if ((empty($package_id) || $package_id == null || !is_numeric($package_id) || $package_id == '' || $package_id == ' ') && (empty($tracking_no) || $tracking_no == null || $tracking_no == '' || $tracking_no == ' ')) {
    // No valid package id provided

    // set response code - 404 Not found
    // http_response_code(404);

    // // tell the package no products found
    // echo json_encode(
    //     array("message" => "Plaese provide a valid Package ID or Tracking number")
    // );

    // return;

    // $_SESSION['message'] = "Plaese provide a valid Package ID or Tracking number";

    // include('../../trackresult.php')

    $error = urlencode('Plaese provide a valid Package ID or Tracking number');
    header('Location: ../../tracking.php' . $error);
    return false;
}

// query packages
$package->package_id = $package_id;
$package->tracking_no = $tracking_no;

// var_dump($package_id);
// var_dump($package_tracking_no);
// return;

$stmt = $package->getPackage();
// $num = $stmt->rowCount();

// check if more than 0 record found
if (is_string($stmt)) {
    // set response code - 200 OK
    // http_response_code(400);

    // // show packages data in json format
    // echo json_encode(array("message" => $stmt));

    // return;
    $error = urlencode($stmt);
    header('Location: ../../tracking.php?error=' . $error);
    return false;

} elseif ($stmt) {

    // packages array
    $packages_arr = array();
    $packages_arr["records"] = array();

    // retrieve our table contents
    // fetch() is faster than fetchAll()
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);

        $package_item = array(
            "package_id" => $package_id,
            "tracking_no" => $tracking_no,
            "description" => $description,
            "sender_name" => $sender_name,
            "sender_email" => $sender_email,
            "sender_phone" => $sender_phone,
            "sender_address" => $sender_address,
            "receiver_name" => $receiver_name,
            "receiver_email" => $receiver_email,
            "receiver_phone" => $receiver_phone,
            "receiver_address" => $receiver_address,
            "sending_loc" => $sending_loc,
            "delivery_loc" => $delivery_loc,
            "service_price" => $service_price,
            "delivery_type" => $delivery_type,
            "delivery_price" => $delivery_price,
            "status" => $status,
            "comment" => $note,
            "created_at" => $created_at,
            "updated_at" => $updated_at,

        );

        array_push($packages_arr["records"], $package_item);
    }
    //  print_r(count($packages_arr['records']));
    //   return;
    if (count($packages_arr['records']) == 0) {
        // set response code - 200 OK
        // http_response_code(404);

        if ($package_id != null) {
            // show packages data in json format
            // echo json_encode(array("message" => "No package found with this ID."));
            $error = 'No package found with this ID.';
            header('Location: ../../tracking.php?error=' . $error);
            return false;
        } elseif ($tracking_no != null) {
            // // show packages data in json format
            // echo json_encode(array("message" => "No package found with this tracking Number."));
            $_SESSION['packages_arr'] = ["ok"];

            $error = 'No package found with this tracking Number.';
            header('Location: ../../tracking.php?error=' . $error);
            return false;
        }

        // return;
    }

    // set response code - 200 OK
    // http_response_code(200);

    // // show packages data in json format
    // echo json_encode($packages_arr);
//    session_start();
    $_SESSION['packages_arr'] = $packages_arr;
    header('Location: ../../user-view.php');
    return false;
    
} else {
    // no packages found will be here

    // set response code - 404 Not found
    // http_response_code(404);

    // // tell the package no products found
    // echo json_encode(
    //     array("message" => "Something went wrong. Not able to fetch package. Try again.")
    // );
    $error = 'No package found with this tracking Number.';
    header('Location: ../../tracking.php?error=' . $error);
    return false;
}
