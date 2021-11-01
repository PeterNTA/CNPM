<?php
$result = $this->db->select($query);
$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

?>
