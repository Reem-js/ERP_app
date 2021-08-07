<?php

function redirectAccordingToRequest($request)
{

    $parentRouet = explode(".",$request->route()->getName())[0]; // to get parent route name to make automatic redirection
    if($request->input('redirect') == 'table')
        return redirect()->route($parentRouet.'.index')->with('Success','Operation Successfully Compelete');
    elseif($request->input('redirect') == 'back')
        return redirect()->back()->with('Success','Operation Successfully Compelete');
    else
        return redirect()->back()->with('Success','Operation Successfully Compelete');
}


function requestAbstraction($request)
{
    return $request->except('_token','_method','redirect');
}

function requestAbstractionWithMedia($request)
{
    return $request->except('_token','_method','redirect','media');
}
