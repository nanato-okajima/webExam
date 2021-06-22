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
  const INDEX_THEAD_LIST = [
    "状態", "更新日", "受験日", "氏名",
    "点数", "性別", "年齢", "経過"
  ];
  const USER_STATUS_LIST = [
      0 => "未受験",
      1 => "受験済み",
      2 => "採点済み"
  ];
}
