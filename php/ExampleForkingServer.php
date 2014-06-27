<?php
include_once 'INC_COMM.php';
include_once 'MtExampleServiceImpl.php';
include_once 'Types.php';
include_once 'MtExampleService.php';

use Thrift\Server\TForkingServer;
use Thrift\Server\TServerSocket; 
use Thrift\Transport\TSocket;
use Thrift\Transport\TBufferedTransport;
use Thrift\Protocol\TBinaryProtocol;
use Thrift\Factory\TTransportFactory;
use Thrift\Factory\TBinaryProtocolFactory;

echo "init ...\n";

////create socket server with ip and port,change it if nessary
$socket = new TServerSocket("localhost", 9090);


////define transport factory and  proctocol
$in_transport =  new TTransportFactory();
$out_transport = new TTransportFactory();
$in_protocol = new TBinaryProtocolFactory();
$out_protocol = new TBinaryProtocolFactory();


$handler = new MtExampleServiceImpl();
$processor =new MtExampleServiceProcessor($handler);


$server = new TForkingServer($processor,
                $socket,
                $in_transport,
                $out_transport,
                $in_protocol,
                $out_protocol);

echo "running ...\n";

$server->serve();

?>
