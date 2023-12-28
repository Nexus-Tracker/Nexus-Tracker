<?php

class Package
{

    // database connection and table name
    private $conn;
    private $table_name = "packages";

    // object properties
    public $package_id;
    public $tracking_no;
    public $description;

    public $sender_name;
    public $sender_email;
    public $sender_phone;
    public $sender_address;

    public $receiver_name;
    public $receiver_email;
    public $receiver_phone;
    public $receiver_address;

    public $sending_loc;
    public $delivery_loc;
    public $service_price;
    public $delivery_type;
    public $delivery_price;
    public $status;
    public $comment;
    public $created_at;
    public $updated_at;

    // constructor with $db as database connection
    public function __construct($db)
    {
        $this->conn = $db;
    }


    // read a single user
    function getPackage()
    {
        // var_dump($this->conn);
        // return;

        $query = '';

        if ($this->package_id != NULL) {

            // select query if package ID is provided
            $query = "SELECT * FROM " . $this->table_name . " WHERE package_id=" . $this->package_id;

            // prepare query statement
            $stmt = $this->conn->prepare($query);

            // execute query
            $stmt->execute();

            return $stmt;
        } elseif ($this->tracking_no != null) {

            // select query if package tracking no is provided 
            $query = "SELECT * FROM " . $this->table_name . " WHERE tracking_no=:tracking_no";

            // prepare query statement
            $stmt = $this->conn->prepare($query);

            // bind values
            $stmt->bindParam(":tracking_no", $this->tracking_no);


            // execute query
            $stmt->execute();

            return $stmt;
        } else {

            return "No valid package ID or Admission number provided";
        }    }

    // read users
    function getPackages()
    {
        // select all query
        $query = "SELECT * FROM " . $this->table_name;


        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;
    }


    // create user
    function createPackage()
    {
        // Generate and set properties
        $this->tracking_no = "FASTRACK" . date("YmdHis") . uniqid();



        // query to insert record
        $query = "INSERT INTO " . $this->table_name . " (tracking_no, description, sender_name, sender_email, sender_phone, sender_address, receiver_name, receiver_email, receiver_phone, receiver_address, sending_loc, delivery_loc, service_tprice, delivery_type, delivery_price, status, comment  ) VALUES (:tracking_no, :description, :sender_name, :sender_email, :sender_phone, :sender_address, :receiver_name, :receiver_email, :receiver_phone, :receiver_address, :sending_loc, :delivery_loc, :service_tprice, :delivery_type, :delivery_price, :status, :comment ) ";

        // prepare query
        $stmt = $this->conn->prepare($query);

        $admission_no = "MIS/";

        // bind values
        $stmt->bindParam(":tracking_no", $admission_no);
        $stmt->bindParam(":description", $this->description);
        $stmt->bindParam(":sender_name", $this->sender_name);
        $stmt->bindParam(":sender_email", $this->sender_email);
        $stmt->bindParam(":sender_phone", $this->sender_phone);
        $stmt->bindParam(":sender_address", $this->sender_address);
        $stmt->bindParam(":receiver_name", $this->receiver_name);
        $stmt->bindParam(":receiver_email", $this->receiver_email);
        $stmt->bindParam(":receiver_phone", $this->receiver_phone);
        $stmt->bindParam(":receiver_address", $this->receiver_address);
        $stmt->bindParam(":sending_loc", $this->sending_loc);
        $stmt->bindParam(":delivery_loc", $this->delivery_loc);
        $stmt->bindParam(":service_price", $this->service_price);
        $stmt->bindParam(":delivery_type", $this->delivery_type);
        $stmt->bindParam(":delivery_price", $this->delivery_price);
        $stmt->bindParam(":status", $this->status);
        $stmt->bindParam(":comment", $this->comment);



        try {
            // execute query
            if ($stmt->execute()) {

                $setId = $this->setLastpackageId($this->conn->lastInsertId());

                if (is_string($setId)) {
                    return $setId;
                } elseif ($setId) {
                    return true;
                } else {
                    return false;
                }
            }
        } catch (Exception $e) {

            return $e->getMessage();
        }
    }

    function generateCode()
    {
        $this->delivery_loc = substr(md5(time()), 0, 18) . substr(md5(time()), 0, 18);

        return;
    }

    function setTimeNow()
    {
        $this->updated_at = date("Y:m:d H:i:sa");
        return;
    }

    function generateSessionCode()
    {

        // update query
        $query = "UPDATE " . $this->table_name . " SET
              delivery_loc = :delivery_loc,
              updated_at = :updated_at
          WHERE
              tracking_no = :tracking_no";

        // prepare query statement
        $update_stmt = $this->conn->prepare($query);

        $this->setTimeNow();

        // bind new values
        $update_stmt->bindParam(':tracking_no', $this->tracking_no);
        $update_stmt->bindParam(':delivery_loc', $this->delivery_loc);
        $update_stmt->bindParam(':updated_at', $this->updated_at);

        try {

            if ($update_stmt->execute()) return true;

            return false;

        } catch (Exception $e) {

            return $e->getMessage();

        }
     
    }


    // update the product
    function updatepackage()
    {

        // update query
        $query = "UPDATE " . $this->table_name . " SET
                    tracking_no = :tracking_no,
                    description = :description,
                    sender_email = :sender_email,
                    sender_phone = :sender_phone,
                    sender_address = :sender_address,
                    receiver_name = :receiver_name,
                    receiver_email = :receiver_email,
                    receiver_phone = :receiver_phone,
                    receiver_address = :receiver_address,
                    updated_at = :updated_at
                WHERE
                    package_id = :package_id";

        // prepare query statement
        $update_stmt = $this->conn->prepare($query);

        // bind new values
        $update_stmt->bindParam(':tracking_no', $this->tracking_no);
        $update_stmt->bindParam(':description', $this->description);
        $update_stmt->bindParam(':sender_email', $this->sender_email);
        $update_stmt->bindParam(':sender_phone', $this->sender_phone);
        $update_stmt->bindParam(':sender_address', $this->sender_address);
        $update_stmt->bindParam(':receiver_name', $this->receiver_name);
        $update_stmt->bindParam(':receiver_email', $this->receiver_email);
        $update_stmt->bindParam(':receiver_phone', $this->receiver_phone);
        $update_stmt->bindParam(':receiver_address', $this->receiver_address);
        $update_stmt->bindParam(':updated_at', $this->updated_at);
        $update_stmt->bindParam(':package_id', $this->package_id);

        try {
            if ($update_stmt->execute()) return true;

            return false;
        } catch (Exception $e) {
            return $e->getMessage();
        }
        // execute the query


    }

    // delete a user
    function deletepackage()
    {
        // delete query
        $query = "DELETE FROM " . $this->table_name . " WHERE package_id = ?";

        // prepare query
        $stmt = $this->conn->prepare($query);

        // bind package_id of record to delete
        $stmt->bindParam(1, $this->package_id);

        // execute query
        if ($stmt->execute()) {
            return true;
        }

        return false;
    }


    // search for a particular in a given column
    function searchpackage($searchstring, $col)
    {
        // select all query
        $query = "SELECT package_id, tracking_no, description, lastname, sender_email, sender_phone, sender_address, receiver_name, receiver_email, receiver_phone, receiver_address, active, created_at, updated_at FROM " . $this->table_name . " WHERE " . $col . "=:searchstring";

        // prepare query statement
        $update_stmt = $this->conn->prepare($query);

        $update_stmt->bindParam(':searchstring', $searchstring);

        try {
            // execute query
            $update_stmt->execute();

            return $update_stmt;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }


     // search for a particular in a given column
     function groupSearch($searchstring, $col)
     {

         // select all query
         $query = "SELECT package_id, tracking_no, description, lastname, sender_email, 'sender_phone', sender_address, receiver_name, receiver_email, receiver_phone, receiver_address, active, created_at, updated_at FROM " . $this->table_name . " WHERE $col LIKE '%$searchstring%'";

        //  $query = "SELECT * FROM $this->table_name WHERE $col LIKE '%$searchstring%'";

        
         // prepare query statement
         $update_stmt = $this->conn->prepare($query);
 
        //  $update_stmt->bindParam(':searchstring', $searchstring);
 
         try {

             // execute query
             $update_stmt->execute();

             return $update_stmt;

         } catch (Exception $e) {

             return $e->getMessage();

         }

     }


    // update the product
    function changesending_loc()
    {

        // update query
        $query = "UPDATE " . $this->table_name . " SET
                    sending_loc = :sending_loc,
                    updated_at = :updated_at
                WHERE
                    tracking_no = :tracking_no";

        // prepare query statement
        $update_stmt = $this->conn->prepare($query);

        // bind new values
        $update_stmt->bindParam(':tracking_no', $this->tracking_no);
        $update_stmt->bindParam(':sending_loc', $this->sending_loc);
        $update_stmt->bindParam(':updated_at', $this->updated_at);

        try {
            if ($update_stmt->execute()) return true;

            return false;
        } catch (Exception $e) {
            return $e->getMessage();
        }
        // execute the query

    }


    // Email verification handler
    public function changeActiveStatus($evcode)
    {

        // update query
        $query = "UPDATE " . $this->table_name . " SET
                    active = " . $evcode . " WHERE
                    tracking_no = :tracking_no";

        // prepare query statement
        $update_stmt = $this->conn->prepare($query);

        // bind new values
        $update_stmt->bindParam(':tracking_no', $this->tracking_no);

        try {
            // execute the query
            if ($update_stmt->execute()) {
                return true;
            }

            return false;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }



    public function packageLogin()
    {

        $sql = "SELECT * FROM $this->table_name WHERE tracking_no=:tracking_no";

        // prepare query statement
        $login_stmt = $this->conn->prepare($sql);

        // bind new values
        $login_stmt->bindParam(':tracking_no', $this->tracking_no);

        try {
            // execute the query
            if ($login_stmt->execute()) {

                return $login_stmt;
            } else {

                return false;
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }


    // read a single user
    function setLastpackageId($lastId)
    {
        $offsetId = $lastId + 13;
        // update query
        $query = "UPDATE " . $this->table_name . " SET
        tracking_no = :tracking_no WHERE package_id = :package_id";

        // prepare query statement
        $update_stmt = $this->conn->prepare($query);

        $admission_no = "";

        if ($lastId < 10) {
            $admission_no = "MIS/" . date("Y") . "/000" . $offsetId;
        } elseif ($lastId >= 10 && $lastId < 100) {
            $admission_no = "MIS/" . date("Y") . "/00" . $offsetId;
        } elseif ($lastId >= 100) {
            $admission_no = "MIS/" . date("Y") . "/0" . $offsetId;
        } else {
            $admission_no = "MIS/" . date("Y") . "/" . $offsetId;
        }

        // bind new values
        $update_stmt->bindParam(':package_id', $lastId);
        $update_stmt->bindParam(':tracking_no', $admission_no);


        try {

            if ($update_stmt->execute()) return true;
            return false;

        } catch (Exception $e) {

            return $e->getMessage();

        }
    }


    // Verify sending_loc
    function verifyPass($user_pass, $db_pass)
    {

        if (password_verify($user_pass, $db_pass)) return true;

        return false;
    }
}
