<?php


require_once 'db.php';
require_once 'util.php';

$db = new Database;
$util = new Util;



if (isset($_POST['add'])) {
    $fname = $util->Input($_POST['fname']);
    $lname = $util->Input($_POST['lname']);
    $email = $util->Input($_POST['email']);
    $number = $util->Input($_POST['number']);






    if ($db->Insert($fname, $lname, $email, $number)) {
        echo $util->showMessage('success', 'new user added');
    } else {
        echo $util->showMessage('danger', 'error while saving');
    }
}



if (isset($_GET['read'])) {


    $users = $db->getData();
    $output = '';

    if ($users) {

        foreach ($users as $user) {


            $output .= "
            <tr>
                <td>" . $user['id'] . "</td>
                <td>" . $user['first_name'] . "</td>
                <td>" . $user['last_name'] . "</td>
                <td>" . $user['email'] . "</td>
                <td>" . $user['phone'] . "</td>
                <td>
                    <a data-toggle='modal' data-target='#editUserModal'   id=" . $user['id'] . " class='btn btn-success p-3 editLink'>Edit</a>
                    <a id=" . $user['id'] . " class='btn btn-danger p-3 deleteLink'>Delete</a>
                </td>
            </tr>";
        }
    }
    echo $output;
}




if (isset($_GET['edit'])) {

    $users = $db->getDataById($_GET['id']);
    echo json_encode($users);
    // $output = '';

    // print($users);
    // die;
}



if (isset($_POST['update'])) {
    $id = $_POST['id'];


    $fname = $util->Input($_POST['fname']);
    $lname = $util->Input($_POST['lname']);
    $email = $util->Input($_POST['email']);
    $phone = $util->Input($_POST['phone']);






    if ($db->Update($id, $fname, $lname, $email, $phone)) {
        echo $util->showMessage('success', 'User Updated Successfully');
    } else {
        echo $util->showMessage('danger', 'error while saving');
    }
}

if (isset($_GET['delete'])) {

    $id = $_GET['id'];



    if ($db->Delete($id)) {
        echo $util->showMessage('success', 'User Delete Successfully');
    } else {
        echo $util->showMessage('danger', 'error while saving');
    }
}
