<?php
namespace VehicleApp;
class Render{
    static public function Show($data){
        foreach ($data as $value){
            echo "<td>$value</td>";
        }
    }
}
