<?php

namespace App\Http\Controllers\Settings;

use Illuminate\Http\Request;
use Modules\Base\Http\Controllers\BaseController;

class PasswordController extends BaseController
{
    /**
     * Update the user's password.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|confirmed|min:6'
        ]);

        $request->user()->update([
            'password' => bcrypt($request->password)
        ]);
    }
}
