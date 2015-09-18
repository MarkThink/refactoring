<?php

namespace SharedLogic\Utils;
/*
 * 加解密登陆用户ID
 */
class SafeCookie
{
    private $_encryption_key='';
    private $_hash_type	= 'sha1';
    private $_mcrypt_cipher = MCRYPT_RIJNDAEL_256;
    private $_mcrypt_mode = MCRYPT_MODE_CBC;

    public function __construct($encryption_key)
    {
        $this->_encryption_key = $encryption_key;
    }

    //获取登陆用户的ID加密串
    public function get_userid_encode($userid)
    {
        $encode_userid = $this->encode($userid);
        $cookie_userid = md5($this->_encryption_key.$encode_userid).$encode_userid;
        return $cookie_userid;
    }

    //解密登陆用户ID
    public function get_userid_decode($userid_encode)
    {
        $user_id = '';

        $strmd5 = substr($userid_encode, 0, 32);
        $str = substr($userid_encode,32);

        if (md5($this->_encryption_key.$str) == $strmd5){
            $user_id = (int)$this->decode($str);
        }
        return $user_id;
    }

    //返回加密串-用于Cookie存储处理
    public function encode($string)
    {
        $key = md5($this->_encryption_key);
        $enc = $this->_mcrypt_encode($string, $key);
        return base64_encode($enc);
    }

    public function _mcrypt_encode($data, $key)
    {
        $init_size = mcrypt_get_iv_size($this->_mcrypt_cipher, $this->_mcrypt_mode);
        $init_vect = mcrypt_create_iv($init_size, MCRYPT_RAND);
        return $this->_add_cipher_noise($init_vect.mcrypt_encrypt($this->_mcrypt_cipher, $key, $data, $this->_mcrypt_mode, $init_vect), $key);
    }

    function _add_cipher_noise($data, $key)
    {
        $keyhash = $this->hash($key);
        $keylen = strlen($keyhash);
        $str = '';

        for ($i = 0, $j = 0, $len = strlen($data); $i < $len; ++$i, ++$j)
        {
            if ($j >= $keylen)
            {
                $j = 0;
            }

            $str .= chr((ord($data[$i]) + ord($keyhash[$j])) % 256);
        }

        return $str;
    }

    //返回解密串-用于Cookie存储处理
    function decode($string)
    {
        $key = md5($this->_encryption_key);

        if (preg_match('/[^a-zA-Z0-9\/\+=]/', $string))
        {
            return false;
        }
        $dec = base64_decode($string);

        if (($dec = $this->_mcrypt_decode($dec, $key)) === false)
        {
            return false;
        }

        return $dec;
    }

    public function _mcrypt_decode($data,$key)
    {
        $data = $this->_remove_cipher_noise($data, $key);
        $init_size = mcrypt_get_iv_size($this->_mcrypt_cipher, $this->_mcrypt_mode);

        if ($init_size > strlen($data))
        {
            return false;
        }

        $init_vect = substr($data, 0, $init_size);
        $data = substr($data, $init_size);
        return rtrim(mcrypt_decrypt($this->_mcrypt_cipher, $key, $data, $this->_mcrypt_mode, $init_vect), "\0");
    }

    function _remove_cipher_noise($data, $key)
    {
        $keyhash = $this->hash($key);
        $keylen = strlen($keyhash);
        $str = '';

        for ($i = 0, $j = 0, $len = strlen($data); $i < $len; ++$i, ++$j)
        {
            if ($j >= $keylen)
            {
                $j = 0;
            }

            $temp = ord($data[$i]) - ord($keyhash[$j]);

            if ($temp < 0)
            {
                $temp = $temp + 256;
            }

            $str .= chr($temp);
        }

        return $str;
    }

    function hash($str)
    {
        return ($this->_hash_type == 'sha1') ? sha1($str) : md5($str);
    }
}