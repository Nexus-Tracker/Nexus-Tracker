<?php
include('../config/autoload.php');
// required headers
header("Access-Control-Allow-Origin:" . $ORIGIN);
header("Content-Type:" . $CONTENT_TYPE);
header("Access-Control-Allow-Methods:" . $POST_METHOD);
header("Access-Control-Max-Age:" . $MAX_AGE);
header("Access-Control-Allow-Headers:" . $ALLOWED_HEADERS);

// Initiatialise 
$database = new Database();
$db = $database->getConnection();
$package = new Package($db);


// get posted data
// $data = json_decode(file_get_contents("php://input"));
if (isset($_POST['submit'])) {
    
    // make sure data is not empty
    if (
        !empty($_POST['description']) &&
        !empty($_POST['sender_name']) &&
        !empty($_POST['sender_phone']) &&
        !empty($_POST['sender_address']) &&
        !empty($_POST['receiver_name']) &&
        !empty($_POST['receiver_phone']) &&
        !empty($_POST['receiver_address']) &&
        !empty($_POST['sending_loc']) &&
        !empty($_POST['delivery_loc']) &&
        !empty($_POST['service_price']) &&
        !empty($_POST['delivery_type']) &&
        !empty($_POST['delivery_price']) 
    ) {

        // Sanitize & set package property values
        $package->description = cleanData($_POST['description']);
        $package->sender_name = cleanData($_POST['sender_name']);
        $package->sender_email = cleanData($_POST['sender_email']) ?? null;
        $package->sender_phone = cleanData($_POST['sender_phone']);
        $package->sender_address = cleanData($_POST['sender_address']);
        $package->receiver_name = cleanData($_POST['receiver_name']);
        $package->receiver_email = cleanData($_POST['receiver_email']) ?? null;
        $package->receiver_phone = cleanData($_POST['receiver_phone']);
        $package->receiver_address = cleanData($_POST['receiver_address']);
        $package->sending_loc = cleanData($_POST['sending_loc']);
        $package->delivery_loc = cleanData($_POST['delivery_loc']);
        $package->service_price = (int) cleanData($_POST['service_price']);
        $package->delivery_type = (int) cleanData($_POST['delivery_type']);
        $package->delivery_price = (int) cleanData($_POST['delivery_price']);
        $package->comment = !empty(cleanData($_POST['comment'])) ?? null;

        // print_r($package);
        // return;

        // create the package
        $newpackage = $package->createPackage();

        // var_dump($newpackage);
        // return;

        if (is_string($newpackage)) {
            // set response code - 200 ok
            // http_response_code(400);

            // // tell the package
            // echo json_encode(array("message" => $newpackage, "status" => 3));
            // return;

            $error = $newpackage . "is string";
            header('Location: ../../create.php?error=' . $error);
            return false;

        } elseif ($newpackage) {

            // Send welcome message and email verification code
            // $mail = new Mail();

            // $mail->to = $package->email;  //"oiunachukwu@gmail.com"; //This will be $package->email
            // $mail->message = "<h3>Dear $package->description,</h3><p>We welcome you warmly to our platform that 
            //                     help you save money by helping you to know the best filling stations to buy fuel cheaper in your area.</p><br>
            //                     <p>Kindly click on the email verification link below to complete your registration and start enjoying our services
            //                      for FREE.</p><br> <p>https://fuelalert/api/emailverification.php?evc=$package->package_code</p><br>
            //                         <p>Warm Regards</p><p>FuelAlert Team</p>";

            // $mail->sendMail();


            // using mailto inbuilt function
            //     $to = $package->email;
            //     $subject = "WELCOME TO FUELALERT";

            //     $message = "<h3>Dear $package->description,</h3>";
            //     $message .= "<p>We welcome you warmly to our platform that 
            //                         help you save money by helping you to know the best filling stations to buy fuel cheaper in your area.</p><br>
            //                         <p>Kindly click on the email verification link below to complete your registration and start enjoying our services
            //                          for FREE.</p><br> <p>https://fuelalert.myf2.net/api/package/email_verification.php?evc=$package->package_code</p><br>
            //                             <p>Warm Regards</p><p>FuelAlert Team</p>";

            //     $header = "From:test@fuelalert.myf2.net \r\n";
            //  //   $header .= "Cc:iounachukwu@gmail.com \r\n";
            //     $header .= "MIME-Version: 1.0\r\n";
            //     $header .= "Content-type: text/html\r\n";

            //     $mailSent = mail ($to,$subject,$message,$header);

            /*
        if( $mailSent == true ) {
                echo "Message sent successfully...";
        }else {
                echo "Message could not be sent...";
        }
        */

            // // set response code - 201 created
            // http_response_code(201);

            // // tell the package
            // // echo json_encode(array("message" => "package was created. Please check your email for your verification link","mailSent"=>$mailSent));
            // echo json_encode(array("message" => "package was created successfully", "status" => 1));
            // return;

            $error = 'New package created successfuly.';
            header('Location: ../../admin.php?error=' . $error);
            return false;

        } else {

            // if unable to create the package, tell the package

            // set response code - 503 service unavailable
            // http_response_code(503);

            // // tell the package
            // echo json_encode(array("message" => "Unable to create package. Try again.", "status" => 2));
            // return;

            $error = 'Unable to create package. Try again.';
            header('Location: ../../create.php?error=' . $error);
            return false;
        }
    } else {

        // tell the package data is incomplete

        // set response code - 400 bad request
        // http_response_code(400);

        // // tell the package
        // echo json_encode(array("message" => "Unable to create package. Fill all fields.", "status" => 3));

        // include('../../')
        $error = 'Incomplete data. Please fill all fields';
        header('Location: ../../create.php?error=' . $error);
        return false;
    }
} else {

    $error = 'fill all fields and click the CREATE button';
    header('Location: ../../create.php?error=' . $error);
    return false;

}
