<?php
require_once __DIR__ . '/src/Config/Database.php';
require_once __DIR__ . '/src/Controllers/GuestController.php';

use Src\Controllers\GuestController;

$config = require __DIR__ . '/config.php';
$guest = new GuestController($config);

$action = $_GET['action'] ?? 'list';

switch ($action) {
    case 'add':
        include __DIR__ . '/views/form_add.php';
        break;
    case 'edit':
        include __DIR__ . '/views/form_edit.php';
        break;
    case 'delete':
        $guest->delete($_GET['id']);
        header("Location: index.php");
        break;
    case 'save':
        $guest->create($_POST['name'], $_POST['message']);
        header("Location: index.php");
        break;
    case 'update':
        $guest->update($_POST['id'], $_POST['name'], $_POST['message']);
        header("Location: index.php");
        break;
    default:
        $data = $guest->all();
        include __DIR__ . '/views/list.php';
}
