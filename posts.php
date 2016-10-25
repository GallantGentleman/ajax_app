<?php
namespace app;

use app\Db;

include "db.php";

$db = Db::getInstance("localhost", "root", "", "ajax_posts");

$stmt = $db->getDb();

if (isset($_POST['submit']) && $_POST['submit'] == 'ok') {

    $title = trim(htmlspecialchars($_POST['post_title']));
    $text = trim($_POST['post_text']);
    $date = date("d-m-Y");

    if (!empty($title) && !empty($text)) {

        try {
            $stmt->query("INSERT INTO `posts`(`title`, `text`, `date`) VALUES('$title', '$text', '$date')");
        } catch(PDOException $ex) {
            echo "ERROR";
        }
    }

}*/
