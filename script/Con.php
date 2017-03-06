<?php
class DbConnection {
  private $db_connection  = null;
  private $db_host     = '';
  private $db_user     = '';
  private $db_password = '';
  private $db_name     = '';
  private $errors      = array();  

  public function __construct($db_host="localhost", $db_user="RaulStifler", $db_password="momantai", $db_name="Catalogo"){
    $this->db_host     = $db_host;
    $this->db_user     = $db_user;
    $this->db_password = $db_password;
    $this->db_name     = $db_name;
  }
  public function connect(){
    if(!$this->db_connection = new mysqli($this->db_host,$this->db_user,$this->db_password,$this->db_name)) {
      throw new RunTimeException("No se pudo conectar con la Base de datos");
    }
    $this->executeQuery("SET CHARACTER SET 'utf8'");
  }
  
  public function disconnect(){
    if($this->db_connection->close()){
      return true;
    }
    return false;
  }
  
  public function getAllRows($sql){
    if (!$results = $this->db_connection->query($sql)){
      throw new RunTimeException("Couldn't execute query!");
    }
    $count = 0;
    $rows  = array();
    while ( $row = $results->fetch_assoc()){
      $rows[] = $row;
      $count++;
    }
    $results->close();
    return ($count)?$rows:false;
  }
  
  public function getOneColumn($sql){
    if (!$results=$this->db_connection->query($sql)) {
      throw new RunTimeException("Couldn't execute query!");
    }
    $count = 0;
    $rows  = array();
    while ( $row = $results->fetch_array()) {
      $rows[] = $row[0];
      $count++;
    }
    $results->close();
    return ($count)?$rows:false;
  }
  public function getArrayPair($sql){
    if (!$results = $this->db_connection->query($sql)){
      throw new RunTimeException("Couldn't execute query!");
    }
    $count = 0;
    $rows  = array();
    while($row = mysqli_fetch_array($results)){
      $rows[$row[0]] = $row[1];
      $count++;
    }
    $results->close();
    return ($count)?$rows:false;
  }
  public function getOneRow($sql){
    if ( !$results = $this->db_connection->query($sql)){
      throw new RunTimeException("Couldn't execute query!");
    }
    if ($row=mysqli_fetch_assoc($results)){
      return $row;
    }
    $results->close();
    return false;
  }
  public function getOneValue($sql){
    if (!$results = $this->db_connection->query($sql)){
      throw new RunTimeException("Couldn't execute query!");
    }
    if ($row = mysqli_fetch_array($results)){
      return $row[0];
    }
    return false;
  }
  public function executeQuery($sql){
    if ($this->db_connection->query($sql)){
      $this->errors[] = mysqli_error($this->db_connection);
      return true;
    }
    return false;
  }
  public function getErrors(){
    return $this->errors;
  }
  public function getLastId(){
    return mysqli_insert_id($this->db_connection);
  }
  public function countRows($table){
    if (!is_string($table)) {
      throw new InvalidArgumentException("Table_name isn't an string");
    }
    if ( !$results = $this->db_connection->query("SELECT COUNT(*) as total FROM $table")){
      throw new RunTimeException("Couldn't execute query: ". mysql_error($this->db_connection) );
    }
    $count = $results->fetch_array();
    $count = $count['total'];
    return ($count)?$count:0;
  }
}
?>