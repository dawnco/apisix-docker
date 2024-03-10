<?php

date_default_timezone_set("Asia/Shanghai");

file_put_contents(__DIR__ . "/temp/json_" . date("Ymd_His") . ".log", file_get_contents("php://input"));

file_put_contents(__DIR__ . "/temp/post_" . date("Ymd_His") . ".log", json_encode($_POST));


file_put_contents(__DIR__ . "/temp/request_" . date("Ymd_His") . ".log", json_encode($_REQUEST));


file_put_contents(__DIR__ . "/temp/server_" . date("Ymd_His") . ".log", json_encode($_SERVER));
