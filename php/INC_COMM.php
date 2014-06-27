<?php
$GLOBAL_THRIFT_LIB_PATH = dirname(__FILE__);

include_once $GLOBAL_THRIFT_LIB_PATH."/Thrift/ClassLoader/ThriftClassLoader.php";
include_once $GLOBAL_THRIFT_LIB_PATH."/Thrift/Base/TBase.php";

include_once $GLOBAL_THRIFT_LIB_PATH."/Thrift/Server/TServerTransport.php";
include_once $GLOBAL_THRIFT_LIB_PATH."/Thrift/Server/TServer.php";
include_once $GLOBAL_THRIFT_LIB_PATH."/Thrift/Server/TForkingServer.php";
include_once $GLOBAL_THRIFT_LIB_PATH."/Thrift/Server/TServerSocket.php";
include_once $GLOBAL_THRIFT_LIB_PATH."/Thrift/Server/TSimpleServer.php";

include_once $GLOBAL_THRIFT_LIB_PATH."/Thrift/Factory/TProtocolFactory.php";
include_once $GLOBAL_THRIFT_LIB_PATH."/Thrift/Factory/TTransportFactory.php";
include_once $GLOBAL_THRIFT_LIB_PATH."/Thrift/Factory/TBinaryProtocolFactory.php";
include_once $GLOBAL_THRIFT_LIB_PATH."/Thrift/Factory/TCompactProtocolFactory.php";
include_once $GLOBAL_THRIFT_LIB_PATH."/Thrift/Factory/TJSONProtocolFactory.php";
include_once $GLOBAL_THRIFT_LIB_PATH."/Thrift/Factory/TStringFuncFactory.php";

include_once $GLOBAL_THRIFT_LIB_PATH."/Thrift/StringFunc/TStringFunc.php";
include_once $GLOBAL_THRIFT_LIB_PATH."/Thrift/StringFunc/Core.php";
include_once $GLOBAL_THRIFT_LIB_PATH."/Thrift/StringFunc/Mbstring.php";

include_once $GLOBAL_THRIFT_LIB_PATH."/Thrift/Transport/TTransport.php";
include_once $GLOBAL_THRIFT_LIB_PATH."/Thrift/Transport/TMemoryBuffer.php";
include_once $GLOBAL_THRIFT_LIB_PATH."/Thrift/Transport/TBufferedTransport.php";
include_once $GLOBAL_THRIFT_LIB_PATH."/Thrift/Transport/THttpClient.php";
include_once $GLOBAL_THRIFT_LIB_PATH."/Thrift/Transport/TSocket.php";
include_once $GLOBAL_THRIFT_LIB_PATH."/Thrift/Transport/TFramedTransport.php";
include_once $GLOBAL_THRIFT_LIB_PATH."/Thrift/Transport/TSocketPool.php";
include_once $GLOBAL_THRIFT_LIB_PATH."/Thrift/Transport/TPhpStream.php";
include_once $GLOBAL_THRIFT_LIB_PATH."/Thrift/Transport/TNullTransport.php";

include_once $GLOBAL_THRIFT_LIB_PATH."/Thrift/Serializer/TBinarySerializer.php";

include_once $GLOBAL_THRIFT_LIB_PATH."/Thrift/Protocol/TProtocol.php";
include_once $GLOBAL_THRIFT_LIB_PATH."/Thrift/Protocol/TBinaryProtocol.php";
include_once $GLOBAL_THRIFT_LIB_PATH."/Thrift/Protocol/JSON/BaseContext.php";
include_once $GLOBAL_THRIFT_LIB_PATH."/Thrift/Protocol/JSON/ListContext.php";
include_once $GLOBAL_THRIFT_LIB_PATH."/Thrift/Protocol/JSON/PairContext.php";
include_once $GLOBAL_THRIFT_LIB_PATH."/Thrift/Protocol/JSON/LookaheadReader.php";
include_once $GLOBAL_THRIFT_LIB_PATH."/Thrift/Protocol/TBinaryProtocolAccelerated.php";
include_once $GLOBAL_THRIFT_LIB_PATH."/Thrift/Protocol/TCompactProtocol.php";
include_once $GLOBAL_THRIFT_LIB_PATH."/Thrift/Protocol/TJSONProtocol.php";

include_once $GLOBAL_THRIFT_LIB_PATH."/Thrift/Type/TType.php";
include_once $GLOBAL_THRIFT_LIB_PATH."/Thrift/Type/TMessageType.php";

include_once $GLOBAL_THRIFT_LIB_PATH."/Thrift/Exception/TException.php";
include_once $GLOBAL_THRIFT_LIB_PATH."/Thrift/Exception/TApplicationException.php";
include_once $GLOBAL_THRIFT_LIB_PATH."/Thrift/Exception/TProtocolException.php";
include_once $GLOBAL_THRIFT_LIB_PATH."/Thrift/Exception/TTransportException.php";

?>
