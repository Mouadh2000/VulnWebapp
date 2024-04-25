<?php

class DatabaseExport
{
    public $user_file = 'users.txt';
    public $data = '';

    public function update_db()
    {
        echo '[+] Grabbing users from text file <br>';
        $this->data = 'Success';
    }

    public function __destruct()
    {
        file_put_contents($_SERVER['DOCUMENT_ROOT'] . "/tunisietelecom/" . $this->user_file, $this->data);
        echo '[] Database updated <br>';
    }
}