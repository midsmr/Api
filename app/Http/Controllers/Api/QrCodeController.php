<?php
// +---------------------------------------------------------
// | PHP is the best language in the world
// +---------------------------------------------------------
// | Copyright (c) 2020 Somebody All rights reserved.
// +---------------------------------------------------------
// | Date: 2020/12/13
// +---------------------------------------------------------
// | Author: Somebody <midsmr@qq.com>
// +---------------------------------------------------------
namespace App\Http\Controllers\Api;

use App\Models\Count;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\QrCode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QrCodeController extends Controller
{
    public function doc(Request $request)
    {
        return view('qrcode');
    }

    public function api(Request $request)
    {
        Count::increment('qrcode');
        if ($request->get('text') == '' || $request->get('text') == null) {
            return response('二维码生成失败，各项参数不能为空！');
        } else{
            $text = $request->get('text');
        }
        try {
            $qrCode = new QrCode($text);
            $qrCode->setSize(280);
            $qrCode->setMargin(10);
            $qrCode->setWriterByName('png');
            $qrCode->setEncoding('UTF-8');
            $qrCode->setErrorCorrectionLevel(ErrorCorrectionLevel::HIGH());
            $qrCode->setRoundBlockSize(true, QrCode::ROUND_BLOCK_SIZE_MODE_MARGIN);
            $qrCode->setValidateResult(false);
            return response($qrCode->writeString())->header('Content-Type', $qrCode->getContentType());
        } catch (\Exception $exception) {
            return response('生成失败');
        }
    }
}
