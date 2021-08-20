<?php
/**
 * 返回成功请求头
 * Created by:Lxj
 * Created at:2021/8/20 21:15
 * @param array $data
 * @param string $msg
 * @return \Illuminate\Http\JsonResponse
 */
function responsSuccess($data = [], $msg = ''): \Illuminate\Http\JsonResponse
{
    $resData = [
        'status' => 200,
        'data' => $data,
        'message' => $msg
    ];
    return response()->json($resData)->setEncodingOptions(JSON_UNESCAPED_UNICODE);
}

/**
 * 返回失败请求头
 * Created by:Lxj
 * Created at:2021/8/20 21:16
 * @param array $data
 * @param string $msg
 * @return \Illuminate\Http\JsonResponse
 */
function responsError($msg = '', $data = []): \Illuminate\Http\JsonResponse
{
    $resData = [
        'status' => 400,
        'data' => $data,
        'message' => $msg
    ];
    return response()->json($resData)->setEncodingOptions(JSON_UNESCAPED_UNICODE);
}
