<?php
header("Content-Type:application/json;charset=utf-8");
#$name=$_POST["name"];
#$num=$_POST["num"];
#$code=$_POST["code"];

if(true) {
    $data = '
    {
        "code": "2332",
        "data": {
            "写作和翻译": "193",
            "准考证号": "--",
            "听力": "166",
            "姓名": "陈潇桐",
            "学校": "广东药科大学",
            "总分": "570",
            "等级": "--",
            "考试级别": "英语四级",
            "阅读": "211"
        }
    }
    ';
} else {
    $data = '
    {
        "code":"2333",
        "error":"验证码错误"
    }
    ';
}

#$data = '{"success": true, "msg": "hello"}';
echo $data;
?>