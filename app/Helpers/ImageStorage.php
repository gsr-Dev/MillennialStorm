<?php

namespace App\Helpers;

use Illuminate\Http\Request;

class ImageStorage
{
    public function storeImage(Request $request)
    {
        if ($request->hasFile('cover_image')) {
            // fullname
            $fileNameWithExtension = $request->file('cover_image')->getClientOriginalName();
            // just file name 
            $name = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
            // extenstion
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //store name 
            $fileNameToStore = $name . '_' . time() . '.' . $extension;

            $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);

            return $fileNameToStore;
        } else {
            return $fileNameToStore = "noimage.jpg";
        }
    }
}
