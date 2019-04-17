<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 16/04/2019
 * Time: 11:26
 */

interface kawaInterface extends MotoInterface
{
    public function getisKawai();
    public function setIsKawai($isKawai);
    public function __construct($marque, $model, $prix, $topCase, $isKawai);

}