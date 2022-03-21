<?php

namespace Modules\HR\Http\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

trait UploaderTrait
{

    public function upload($imageFromRequest, $imageFolder, $resize = false)
    {
        $photoOrigin=$imageFromRequest->getClientOriginalName();
        $stripped = str_replace(' ', '', $photoOrigin);

        $fileName = time() . $stripped;
        $location = public_path('uploads/' . $imageFolder . '/' . $fileName);

        $image = Image::make($imageFromRequest);

                        $image->save($location, 70);
        # Optional Resize.
        if ($resize == true) {
            $image->resize(600, 600);
            $newlocation = public_path('uploads/' . $imageFolder . '/thumb' . '/' . $fileName);
            $image->save($newlocation, 70);
        }


        return $fileName;
    }

    public function uploadFile($fileFromRequest,$fileFolder){

        $fileName = time().'.'.$fileFromRequest->getClientOriginalExtension();
        $location = public_path('files/'. $fileFolder . '/');
        $fileFromRequest->move($location, $fileName);

        return $fileName;

    }

    /**
     * Call upload() func to upload photo album.
     *
     * @param [type] $photos
     * @return void
     */
    public function uploadAlbum($photos, $folder = 'product')
    {
        $car_photos=[];
        foreach ($photos as $album) {
            $imageName = $this->upload($album, $folder);
            $car_photos[] = $imageName;
        }
        return $car_photos;
    }

    public function deleteImage($folder,$image)
    {
        if (File::exists(public_path('uploads/'.$folder.'/'.$image))){
             File::delete(public_path('uploads/'.$folder.'/'.$image));

        }
    }
}
