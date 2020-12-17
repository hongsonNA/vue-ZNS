<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZaloController extends Controller
{
    public function index(){
     return view('zalo');
    }
    /**
     * lấy template id
     */
    public function getTemplate(Request $request){
        $jsonss = array (
            'message' => 'Success',
            'data' =>
                array (
                    'templateId' => 201859,
                    'templateName' => 'Thông báo lịch hẹn',
                    'status' => 'ENABLE',
                    'listParams' =>
                        array (
                            0 =>
                                array (
                                    'name' => 'customer_name',
                                    'require' => true,
                                    'type' => 'STRING',
                                    'maxLength' => 30,
                                    'minLength' => 0,
                                    'acceptNull' => false,
                                ),
                            1 =>
                                array (
                                    'name' => 'service_name',
                                    'require' => true,
                                    'type' => 'STRING',
                                    'maxLength' => 30,
                                    'minLength' => 0,
                                    'acceptNull' => false,
                                ),
                            2 =>
                                array (
                                    'name' => 'customer_id',
                                    'require' => true,
                                    'type' => 'STRING',
                                    'maxLength' => 30,
                                    'minLength' => 0,
                                    'acceptNull' => false,
                                ),
                            3 =>
                                array (
                                    'name' => 'date',
                                    'require' => true,
                                    'type' => 'STRING',
                                    'maxLength' => 30,
                                    'minLength' => 0,
                                    'acceptNull' => false,
                                ),
                        ),
                    'timeout' => 7200000,
                    'previewUrl' => 'https://zns.oa.zalo.me/znspreview/M8wDmgv5vHeIigMNFGhSXw==',
                ),
            'error' => 0,
        );
        dd(json_encode($jsonss));
    }
}

