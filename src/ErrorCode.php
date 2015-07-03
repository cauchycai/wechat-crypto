<?php
/**
 * ErrorCode
 *
 * ErrorCode Declarations
 *
 * @author    Cauchy Cai <cauchy.cai@gmail.com>
 * @createDate 2015-07-03 16:47
 * @copyright Copyright (c) 2015 Cauchy Cai
 */

namespace WechatCrypto;

class ErrorCode
{
    const OK = 0;
    const ValidateSignatureError = -40001;
    const ParseXmlError = -40002;
    const ComputeSignatureError = -40003;
    const IllegalAesKey = -40004;
    const ValidateCorpidError = -40005;
    const EncryptAESError = -40006;
    const DecryptAESError = -40007;
    const IllegalBuffer = -40008;
    const EncodeBase64Error = -40009;
    const DecodeBase64Error = -40010;
    const GenReturnXmlError = -40011;
}
