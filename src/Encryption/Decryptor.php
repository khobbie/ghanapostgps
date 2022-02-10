<?php
/**
 * Created by PhpStorm.
 * User: ampahkwabena
 * Date: 2/18/20
 * Time: 3:05 PM
 */

namespace GhanaPostGPS\Encryption;


interface Decryptor
{

    /**
     * @param $encrypted
     * @return mixed
     */
    public function decrypt($encrypted);

}