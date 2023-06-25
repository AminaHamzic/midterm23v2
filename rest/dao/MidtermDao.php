<?php

class MidtermDao {

    private $conn;

    /**
    * constructor of dao class
    */
    public function __construct(){
        try {

        /** TODO
        * List parameters such as servername, username, password, schema. Make sure to use appropriate port
        */


        /*options array neccessary to enable ssl mode - do not change*/
        $options = array(
        	PDO::MYSQL_ATTR_SSL_CA => 'https://drive.google.com/file/d/1IUuXFceXGAH_rydvtJwW5jYzlnZ9FWBw/view?usp=sharing',
        	PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false,

        );
        /** TODO
        * Create new connection
        * Use $options array as last parameter to new PDO call after the password
        */

        // set the PDO error mode to exception
          $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          echo "Connected successfully";
        } catch(PDOException $e) {
          echo "Connection failed: " . $e->getMessage();
        }
    }

    /** TODO
    * Implement DAO method used to get cap table
    */
    public function cap_table(){

    }

    /** TODO
    * Implement DAO method used to add cap table record
    */
    public function add_cap_table_record(){

    }

    /** TODO
    * Implement DAO method to return list of categories with total shares amount
    */
    public function categories(){

    }

    /** TODO
    * Implement DAO method to delete investor
    */
    public function delete_investor($id){

    }
}
?>
