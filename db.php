<?php


require_once 'Config.php';


class Database extends Config
{



    // insert into db
    public function insert($fname, $lname, $email, $phone)
    {

        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        $sql = "INSERT INTO users (first_name,last_name,email,phone) VALUES (:first_name,:last_name,:email,:phone)";
        $stmt = $this->conn->prepare($sql);


        $stmt->execute([
            'first_name' => $fname,
            'last_name' => $lname,
            'email' => $email,
            'phone' => $phone,
        ]);


        return true;
    }
    // update into db
    public function Update($id, $fname, $lname, $email, $phone)
    {

        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        $sql = "UPDATE users SET first_name=:first_name,last_name=:last_name,email=:email,phone=:phone WHERE id=:id";
        $stmt = $this->conn->prepare($sql);


        $stmt->execute([
            'id' => $id,
            'first_name' => $fname,
            'last_name' => $lname,
            'email' => $email,
            'phone' => $phone,
        ]);


        return true;
    }




    // get data
    public function getData()
    {
        $sql = "SELECT * FROM users";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll();

        return $results;
    }


    public function getDataById($id)
    {
        $sql = "SELECT * FROM users Where id=:id";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'id' => $id
        ]);
        $results = $stmt->fetch();

        return $results;
    }


    public function Delete($id)
    {
        $sql = "DELETE FROM users Where id=:id";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'id' => $id
        ]);
        $results = $stmt->fetch();

        return true;
    }
}
