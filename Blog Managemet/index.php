<?php
// $controller = new \Controller\PostController();
$page = isset($_REQUEST['page'])? $_REQUEST['page'] : NULL;

switch ($page){
    case 'add':
        $controller->add();
        break;
    case 'view':
        $controller->view();
        break;
    case 'delete':
        $controller->delete();
        break;
    case 'edit':
        $controller->edit();
        break;
    default:
        $controller->index();
        break;
}
?>