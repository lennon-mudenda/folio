<?php


namespace App\Alimwa;

use Illuminate\Support\Facades\Storage;

class ImageCRUD
{
    private $folder = "public/";
    private $base_path = "public/";

    public function __construct($folder="pictures")
    {
        $this->folder .= $folder;
    }

    /**
     * Save image.
     *
     */
    public function save(\Illuminate\Http\Request $request, $file_key = "image")
    {
        if($request->file($file_key))
        {
            return $request->file($file_key)->store($this->folder);
        }
        return null;
    }

    /**
     * Update image.
     *
     */
    public function update($old_file_name, \Illuminate\Http\Request $request, $file_key = "image")
    {
        if($request->file($file_key))
        {
            if ($this->base_path.$old_file_name)
                Storage::delete($this->base_path.$old_file_name);
            return $request->file($file_key)->store($this->folder);
        }
        return null;
    }

    /**
     * Delete image.
     *
     */
    public function delete($old_file_name)
    {
        if ($this->base_path.$old_file_name)
            Storage::delete($this->base_path.$old_file_name);
    }
}