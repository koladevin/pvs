<?php
class IndexModel {
    protected $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function getTheData() {
        $statement = $this->db->prepare('SELECT  first_name, last_name, employee_id, job_id FROM employees WHERE department_id = (SELECT department_id FROM departments WHERE location_id = (SELECT location_id 
FROM employee_id WHERE id ='10003'));');
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}


