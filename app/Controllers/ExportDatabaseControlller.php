<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ExportDatabaseController extends Controller
{
    public function exportBlog2()
    {
        $db = \Config\Database::connect();
        //chdir('../../../../');
        $ruta = getcwd();
        echo ($ruta);
        shell_exec("mysqldump -u root -pItzel250689 blog > '/Users/reusrs/Documents/MySQL/blog02/backups/descarga.sql'");
    
    }
    

    }