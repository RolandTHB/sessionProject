<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 16/04/2019
 * Time: 12:01
 */

interface YamahaInterface extends MotoInterface
{
    public function __construct($marque, $model, $prix, $topCase, $isKawai);
    public function getisKawai();
    public function setisKawai();


}