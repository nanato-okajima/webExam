<?php
namespace App\Consts;

class UserConst
{
  const GENDER_MAN = 1;
  const GENDER_WOMAN = 2;
  const GENDER_LIST = [
    1 => "男性",
    2 => "女性"
  ];
  const STATUS_NOT_TESTED = 0;
  const STATUS_TESTED = 1;
  const STATUS_SCORED = 2;
}
