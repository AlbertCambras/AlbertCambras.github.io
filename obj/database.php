<?php

    class database{

        public $que;
        private $servername = 'localhost';
        private $username = 'root';
        private $password = '';
        private $dbname = 'cme_app';
        
        private $result = array;
        private $mysqli = '';

        public function __construct(){
            $this ->mysqli = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        }

        public function insert($table, $param = array()){
            $table_columns = implode(',', array_keys($param)) # implode join strings
            $table_value = implode("','", $param)

            # let's insert
            $sql = "INSERT INTO $table($table_columns) VALUES ('$table_value')";
            $result = $this->mysqli->$query($sql)
        }

        public function update($table,$para=array(),$id){
            $args = array();

            foreach ($para as $key => $value) { #copy info from param to args
                $args[] = "$key = '$value'"; 
            }

            $sql="UPDATE  $table SET " . implode(',', $args);

            $sql .=" WHERE $id"; # join last line to this

            $result = $this->mysqli->query($sql);
        }
        
        public function delete($table,$id){
            $sql="DELETE FROM $table";
            $sql .=" WHERE $id ";
            $sql;
            $result = $this->mysqli->query($sql);
        }
        
        public $sql;

        public function select($table,$rows="*",$where = null){
            # default select all
            if ($where != null) {
                $sql="SELECT $rows FROM $table WHERE $where";
            }else{
                $sql="SELECT $rows FROM $table";
            }

            $this->sql = $result = $this->mysqli->query($sql);
        }
    
        public function __destruct(){
            $this->mysqli->close();
        }
    }

?>