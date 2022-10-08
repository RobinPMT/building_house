<?php

use App\Lib\Helper\MapService;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

if (function_exists('c')) {
    throw new Exception('function "c" is already existed !');
} else {
    function c(string $key)
    {
        return App::make($key);
    }
}


if (!function_exists('services')) {
    function services(): MapService
    {
        return c(MapService::class);
    }
}


if (!function_exists('convert_time')) {
    function convert_time($stringDate, $from, $to)
    {
        try {
            $date = new DateTime($stringDate, new DateTimeZone($from));
            $date->setTimezone(new DateTimeZone($to));
            return $date;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}

if (!function_exists('upload_image')) {
    /**
     * @param $file [tên file trùng tên input]
     * @param string $folder
     * @param array $extend [ định dạng file có thể upload được]
     * @param null $tmp_name_file
     * @return array|int [ tham số trả về là 1 mảng - nếu lỗi trả về int ]
     */
    function upload_image($file, $folder = '', array $extend = [], $tmp_name_file = null)
    {
        $code = 1;
        // lay duong dan anh
        if (isset($_FILES[$file])) {
            $baseFilename = $_FILES[$file]['name'];
            $tmp_name = $_FILES[$file]['tmp_name'];
        } else {
            $baseFilename = $file;
            $tmp_name = $tmp_name_file;
        }
        $baseFilename = public_path() . '/uploads/' . $baseFilename;
        // thong tin file
        $info = new SplFileInfo($baseFilename);
        // duoi file
        $ext = strtolower($info->getExtension());
        // kiem tra dinh dang file
        if (! $extend) {
            $extend = ['png','jpg','jpeg'];
        }
        if (!in_array($ext, $extend)) {
            return $data['code'] = 0;
        }
        // Tên file mới
        $nameFile = trim(str_replace('.'.$ext, '', strtolower($info->getFilename())));
        $filename = date('Y-m-d__').Str::slug($nameFile) . '.' . $ext;
        // thu muc goc de upload
        $path = storage_path().'/app/public/files/';//.date('Y/m/d/');
        if ($folder) {
            $path = storage_path().'/app/public/files/'.$folder.'/';//.date('Y/m/d/');
        }
        if (!\File::exists($path)) {
            mkdir($path, 0777, true);
        }
        // di chuyen file vao thu muc uploads
        move_uploaded_file($tmp_name, $path. $filename);
        $data = [
            'name' => $filename,
            'code' => $code,
            'path_img' => 'uploads/'.$filename
        ];
        return $data;
    }
}
if (!function_exists('upload_images')) {
    function upload_images($files, $folder = '')
    {
        $data = [];
        $files = $_FILES[$files];
        $arr = array_combine($files['tmp_name'], $files['name']);
        foreach ($arr as $key => $value) {
            $data [] = upload_image($value, $folder, [], $key);
        }
        return $data;
    }
}
if (!function_exists('pare_url_file')) {
    function pare_url_file($image, $folder = '')
    {
        if (!$image || $image == '') {
            return'/images/no_image.png';
        }
        return '/storage/files/'. $folder . '/' . $image;
//        $explode = explode('__', $image);
//        if (isset($explode[0])) {
//            $time = str_replace('_', '/', $explode[0]);
//            return '/storage/files/'.$folder.'/' . date('Y/m/d', strtotime($time)) . '/' . $image;
//        }
    }
}
if (!function_exists('get_data_user')) {
    function get_data_user($type, $field = 'id')
    {
        return Auth::guard($type)->user() ? Auth::guard($type)->user()->$field : '';
    }
}
if (!function_exists('get_name_route')) {
    function get_name_route($name)
    {
        $data = explode('.', $name);

        return array_pop($data);
    }
}

if (!function_exists('check_active_url')) {
    function check_active_url($str, $char)
    {
        return strpos($str, $char);
    }
}


if (!function_exists('imageUrl')) {
    function imageUrl($path, $width = null, $height = null, $quality=null, $crop=null)
    {
        if (!$width && !$height) {
            $url = env('APP_URL') . $path;
        } else {
            $url = url('/') . '/timthumb.php?src=' . env('APP_URL') . $path;

            if (isset($width)) {
                $url .= '&w=' . $width;
            }
            if (isset($height) && $height>0) {
                $url .= '&h=' .$height;
            }
            if (isset($crop)) {
                $url .= "&zc=".$crop;
            } else {
                $url .= "&zc=1";
            }
            if (isset($quality)) {
                $url .='&q='.$quality.'&s=1';
            } else {
                $url .='&q=95&s=1';
            }
        }

        return $url;
    }
}
