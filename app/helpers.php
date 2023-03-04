<?php

use Illuminate\Support\Str;

if (!function_exists('save_image')) {
    function save_image($file, $filename, $directory)
    {
        $file->move(public_path('/images/' . $directory), $filename);
        return $directory . '/' . $filename;
    }
}

if (!function_exists('delete_image')) {
    function delete_image($filename)
    {
        if ($filename != null && !Str::contains($filename, 'default')) {
            $file_path = public_path('/images/' . $filename);
            if ($file_path) {
                unlink($file_path);
            }
        }
    }
}
