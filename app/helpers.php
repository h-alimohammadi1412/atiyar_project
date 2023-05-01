<?php

function upload_file($request, $name, $dir, $pix = '')
{
    if ($request->hasFile($name)) {
        $file_name = $pix . time() . '.' . $request->file($name)->getClientOriginalExtension();
        if ($request->file($name)->move('files/uploads/' . $dir, $file_name))
            return $file_name;
        else
            return null;
    } else {
        return null;
    }

}