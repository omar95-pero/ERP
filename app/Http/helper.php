<?php

if (!function_exists('GetImg')) {
//    function GetImg( $img_src ,$file_name) {
//        if (filter_var($img_src, FILTER_VALIDATE_URL)) {
//            $img = $img_src;
//        } else if ( Storage::exists( $img_src ) ) {
//            $img = url('/storage/uploads/'.$file_name) . '/' . $img_src;
//        } else {
//            $img = url('/') . 'empty.png';
//        }
//        return $img;
//    }
    function GetImg( $img_src ,$file_name) {
        if (filter_var($img_src, FILTER_VALIDATE_URL)) {
            $img = $img_src;
            return $img;
        } else if ( file_exists(public_path('uploads'.'/'.$file_name)) ) {
            $img = url('').'/uploads'.'/'.$file_name . '/' . $img_src;
            return $img;
        } else {
            $img = url('') . '/empty.png';
            return $img;
        }
        return $img;
    }
}
