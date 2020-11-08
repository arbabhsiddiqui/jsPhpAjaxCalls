<?php


class Util
{

    // sensitize input values
    public function Input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = strip_tags($data);


        return $data;
    }



    // alert message

    public function showMessage($type, $message)
    {
        return "<div class='alert alert-" . $type . "'  alert-dismissible fade show' role='alert'>
        " . $message . "
        <button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
}
