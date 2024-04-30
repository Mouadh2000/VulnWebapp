<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/tunisietelecom/app/models/DatabaseExport.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/tunisietelecom/app/controllers/AdminController.php";

session_start();
if (!isset($_SESSION['admin'])) {
    // Redirect to the login page
    header("Location: /tunisietelecom/admin/login");
    exit();
}

class BackupController
{
    public function backup()
    {
        // Assuming $input is coming from somewhere safe.
        $input = $_GET['arepo'] ?? '';
        $databaseupdate = unserialize($input);
        
        $app = new DatabaseExport;
        $app->update_db();
        
        // Other controller logic...
    }
}
$backup = new BackupController();
$backup->backup();
