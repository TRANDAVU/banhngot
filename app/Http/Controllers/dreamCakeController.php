<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use File;

class dreamCakeController extends Controller
{
    public function upFile()
    {
        $filename = 'laravel.png';
        $filePath = public_path('/' . $filename);
        $fileData = File::get($filePath);
        Storage::cloud()->put($filename, $fileData);
        return 'uploaded file';
    }

    public function upload_image()
    {
        $filename = 'laravel.png';
        $filePath = public_path('/' . $filename);
        $fileData = File::get($filePath);
        Storage::cloud()->put($filename, $fileData);
        return 'img uploaded';
    }

    public function upload_video()
    {
        $filename = 'laravel.png';
        $filePath = public_path('/' . $filename);
        $fileData = File::get($filePath);
        Storage::cloud()->put($filename, $fileData);
        return 'video uploaded';
    }

    public function dowload_document()
    {
        $filename = 'test.txt';

        $dir = '/';
        $recursive = false; // Get subdirectories also?
        $contents = collect(Storage::cloud()->listContents($dir, $recursive));

        $file = $contents
            ->where('type', '=', 'file')
            ->where('filename', '=', pathinfo($filename, PATHINFO_FILENAME))
            ->where('extension', '=', pathinfo($filename, PATHINFO_EXTENSION))
            ->first(); // there can be duplicate file names!

        //return $file; // array with file info

        $rawData = Storage::cloud()->get($file['path']);

        return response($rawData, 200)
            ->header('ContentType', $file['mimetype'])
            ->header('Content-Disposition', "attachment; filename='$filename'");
    }

    public function read_document()
    {
        $fileinfor = collect(Storage::cloud()->listContents('/',false))
            ->where('type', '=', 'file')
            ->where('name', '=', 'laravel.png')
            ->first(); // there can be duplicate file names!
        $contents = Storage::cloud()->get($fileinfor['path']);
        return $contents;
    }

    public function delete_document()
    {
        $fileinfor = collect(Storage::cloud()->listContents('/',false))
            ->where('type', '=', 'file')
            ->where('name', '=', 'dv')
            ->first(); // there can be duplicate file names!
        $contents = Storage::cloud()->delete($fileinfor['path']);
        return 'delete';
    }

    public function list_document()
    {
        $dir = '/';
        $recursive = false; // Get subdirectories also?
        $contents = collect(Storage::cloud()->listContents($dir, $recursive));

        //return $contents->where('type', '=', 'dir'); // directories
        return $contents->where('type', '=', 'file'); // files
    }

    public function newFoler()
    {
        Storage::disk('google')->makeDirectory('dv1');
        return 'Directory was created in Google Drive';
    }

    public function renameFoler()
    {
        
        $folderinfor = collect(Storage::cloud()->listContents('/',false))
            ->where('type', '=', 'dir')
            ->where('name', '=', 'dv1')
            ->first(); // there can be duplicate file names!

        Storage::cloud()->move($folderinfor['path'], 'davu');

        return 'Directory was renamed in Google Drive';
    }

    public function deleteFoler()
    {
        $folderinfor = collect(Storage::cloud()->listContents('/',false))
            ->where('type', '=', 'dir')
            ->where('name', '=', 'dv')
            ->first(); // there can be duplicate file names!

        Storage::cloud()->delete($folderinfor['path']);
        return 'Directory was delete in Google Drive';
    }
}
