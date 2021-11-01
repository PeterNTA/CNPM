<?php  include './Control/database.php'; ?>
<?php
class Model
{
    var $conn;
    var $table;
    var $method;
    function __construct()
    {
        $this->db = new Database();
    }
    function list_all_method()
    {
        $query = "select * from $this->table ORDER BY $this->method DESC ";
        require("result.php");
        return $data;
    }
    function find($id)
    {
        $query = "select * from $this->table where $this->method =$id";
        return $this->db->select($query)->fetch_assoc();
    }
    function delete($id)
    {
        $query = "DELETE from $this->table where $this->method=$id";
        $status = $this->db->delete($query);

    }
    function add($data)
    {
        $f = "";
        $v = "";
        foreach ($data as $key => $value) {
            $f .= $key . ",";
            $v .= "'" . $value . "',";
        }
        $f = trim($f, ",");
        $v = trim($v, ",");
        $query = "INSERT INTO $this->table($f) VALUES ($v);";
        $status = $this->db->insert($query);
    }
    function update($data)
    {
        $v = "";
        foreach ($data as $key => $value) {
            $v .= $key . "='" . $value . "',";
        }
        $v = trim($v, ",");
        $query = "UPDATE $this->table SET  $v   WHERE $this->method = " . $data[$this->method];
        $result = $this->db->update($query);
    }
}
