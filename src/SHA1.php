<?php
/**
 * SHA1
 *
 * SHA1 calculating
 *
 * @author    Cauchy Cai <cauchy.cai@gmail.com>
 * @createDate 2015-07-03 16:45
 * @copyright Copyright (c) 2015 Cauchy Cai
 */

namespace WechatCrypto;

class SHA1
{
    /**
     * 用SHA1算法生成安全签名
     * @param string $token 票据
     * @param string $timestamp 时间戳
     * @param string $nonce 随机字符串
     * @param string $encrypt 密文消息
     */
    public function getSHA1($token, $timestamp, $nonce, $encrypt_msg)
    {
        //排序
        try {
            $array = array($encrypt_msg, $token, $timestamp, $nonce);
            sort($array, SORT_STRING);
            $str = implode($array);
            return array(ErrorCode::OK, sha1($str));
        } catch (Exception $e) {
            print $e . "\n";
            return array(ErrorCode::ComputeSignatureError, null);
        }
    }
}
