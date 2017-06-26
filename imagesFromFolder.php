<?php
        // Global Variables
        function getImages($path) {
            $image_dir = "/storage/ssd4/420/1705420/public_html/images/slides/".$path; 
// directory on server
            $image_relative_path = '/images/slides/'.$path; // path to images relative to script
            $file_types = array('jpg', 'jpeg', 'gif', 'png', 'JPG');
            $image_rotation ='';
            if ($handle = opendir($image_dir)) {
                while (false !== ($file = readdir($handle))) {
                    if ($file != "." && $file != "..") {
                        $ext_bits = explode(".", $file); // finds file extensions
                        foreach ($ext_bits as $key => $value) {
                            if (in_array($value, $file_types)) { 
                                $image_rotation .= '<li><img src="' .$image_relative_path . '/' . $file . '"></li>';
                            }
                        }
                    }
                }
                closedir($handle);
            }
            return $image_rotation;
        }
?>