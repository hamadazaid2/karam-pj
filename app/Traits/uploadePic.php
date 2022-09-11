
<?php

namespace App\Traits;

use Illuminate\Http\Request;


trait PublicTrait
{
    public function savePhoto($request, $path)
    {
        $file_extenstion = $request->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extenstion;
        $request->move($path, $file_name);
        return $file_name;
    }
}
