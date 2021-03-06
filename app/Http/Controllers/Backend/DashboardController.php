<?php

/*
 * This file is part of the Qsnh/meedu.
 *
 * (c) XiaoTeng <616896861@qq.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace App\Http\Controllers\Backend;

use App\User;
use App\Models\RechargePayment;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $todayRegisterUserCount = User::todayRegisterCount();
        $todayRechargeCount = RechargePayment::todaySuccessCount();
        $todayRechargeSum = RechargePayment::todaySuccessSum();

        return view('backend.dashboard.index', compact(
            'todayRechargeCount',
            'todayRechargeSum',
            'todayRegisterUserCount'
        ));
    }
}
