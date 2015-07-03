<?php

namespace WechatCrypto\Tests;

use WechatCrypto\Crypto;

class CryptoTest extends \PHPUnit_Framework_TestCase
{
    private $token;
    private $encodingAesKey;
    private $appId;

    public function setUp()
    {
        $this->token = 'pamtest';
        $this->encodingAesKey = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFG';
        $this->appId = 'wxb11529c136998cb6';
    }

    /**
     * @dataProvider encryptMsgWorksData
     */
    public function testEncryptMsgWorks($text, $timestamp, $nonce)
    {
        $crypto = new Crypto($this->token, $this->encodingAesKey, $this->appId);
        $encryptMsg = '';
        $errCode = $crypto->encryptMsg($text, $timestamp, $nonce, $encryptMsg);
        $this->assertEquals(0, $errCode);
    }

    public function encryptMsgWorksData()
    {
        return array(
            array(
                'text' => "<xml><ToUserName><![CDATA[oia2Tj我是中文jewbmiOUlr6X-1crbLOvLw]]></ToUserName><FromUserName><![CDATA[gh_7f083739789a]]></FromUserName><CreateTime>1407743423</CreateTime><MsgType><![CDATA[video]]></MsgType><Video><MediaId><![CDATA[eYJ1MbwPRJtOvIEabaxHs7TX2D-HV71s79GUxqdUkjm6Gs2Ed1KF3ulAOA9H1xG0]]></MediaId><Title><![CDATA[testCallBackReplyVideo]]></Title><Description><![CDATA[testCallBackReplyVideo]]></Description></Video></xml>",
                'timestamp' => '1409304348',
                'nonce' => 'xxxxxx',
            )
        );
    }
}
