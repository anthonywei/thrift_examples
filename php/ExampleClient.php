<?php
include_once 'INC_COMM.php';
include_once 'MtExampleService.php';
include_once 'Types.php';

use Thrift\Transport\TBufferedTransport;
use Thrift\Transport\TSocket;
use Thrift\Protocol\TBinaryProtocol;


$ip = "localhost";
$port = 9090;
$timeout = 1000;

$socket_ = new TSocket($ip, $port);
$socket_ ->setRecvTimeout($timeout);

$bufferedSocket_ = new TBufferedTransport($socket_, 1024*1024, 1024*1024);

$protocol_ = new TBinaryProtocol($bufferedSocket_);
$bufferedSocket_->open();

$client = new MtExampleServiceClient($protocol_);

$client->GetUserProfile(0);

?>
