<?php
/*
 * jQuery File Upload Plugin PHP Example 5.14
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */
//Datenbank für ImmoEasy
$options1 = array(
    'delete_type' => 'POST',
    'db_host' => 'immoeasy.net.mysql',
    'db_user' => 'immoeasy_net',
    'db_pass' => 'xRg74Yk2',
    'db_name' => 'immoeasy_net',
    'db_table' => 'files',
     'encoding' => 'utf8',
                'unix_socket' => '/XAMPP/xamppfiles/var/mysql/mysql.sock'
);
$options = array(
    'delete_type' => 'POST',
    'db_host' => 'localhost',
    'db_user' => 'root',
    'db_pass' => '',
    'db_name' => 'cake',
    'db_table' => 'files'
);
session_name('CAKEPHP');
session_start();

error_reporting(E_ALL | E_STRICT);
require('UploadHandler.php');

class CustomUploadHandler extends UploadHandler {

    protected function initialize() {
        $this->db = new mysqli(
            $this->options['db_host'],
            $this->options['db_user'],
            $this->options['db_pass'],
            $this->options['db_name']
        );
        parent::initialize();
        $this->db->close();
    }

    protected function handle_form_data($file, $index) {
        $file->title = @$_REQUEST['title'][$index];
        $file->description = @$_REQUEST['description'][$index];
        $file->postId = @$_SESSION['postId'];

//        $_SESSION['postId']= @$_REQUEST['postId'];
    }

    protected function get_user_id() {
        $postId = @$_SESSION['postId'];
        return  $postId;
    }

    protected function get_user_path() {
        if ($this->options['user_dirs']) {
            return $this->get_user_id().'/';
        }
        return '';
    }

    protected function handle_file_upload($uploaded_file, $name, $size, $type, $error,
                                          $index = null, $content_range = null) {
        $file = parent::handle_file_upload(
            $uploaded_file, $name, $size, $type, $error, $index, $content_range
        );
        if (empty($file->error)) {
            $sql = 'INSERT INTO `'.$this->options['db_table']
                .'` (`name`, `size`, `type`, `title`, `description`, `post_id`)'
                .' VALUES (?, ?, ?, ?, ?, ?)';
            $query = $this->db->prepare($sql);
            $query->bind_param(
                'sissss',
                $file->name,
                $file->size,
                $file->type,
                $file->title,
                $file->description,
                $file->postId
            );
            $query->execute();
            $file->id = $this->db->insert_id;
        }
        return $file;
    }

    protected function set_additional_file_properties($file) {
        parent::set_additional_file_properties($file);
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $sql = 'SELECT `id`, `type`, `title`, `description` FROM `'
                .$this->options['db_table'].'` WHERE `name`=?';
            $query = $this->db->prepare($sql);
            $query->bind_param('s', $file->name);
            $query->execute();
            $query->bind_result(
                $id,
                $type,
                $title,
                $description
            );
            while ($query->fetch()) {
                $file->id = $id;
                $file->type = $type;
                $file->title = $title;
                $file->description = $description;
            }
        }
    }

    public function delete($print_response = true) {
        $response = parent::delete(false);
        foreach ($response as $name => $deleted) {
            if ($deleted) {
                $sql = 'DELETE FROM `'
                    .$this->options['db_table'].'` WHERE `name`=?';
                $query = $this->db->prepare($sql);
                $query->bind_param('s', $name);
                $query->execute();
            }
        }
        return $this->generate_response($response, $print_response);
    }
}

$upload_handler = new CustomUploadHandler($options);