# coding=utf-8

import sys
import socket

sys.path.append('./')

from thrift import Thrift
from thrift.transport import TSocket
from thrift.transport import TTransport
from thrift.protocol import TBinaryProtocol
from thrift.protocol import TCompactProtocol
from thrift.server import TServer, TNonblockingServer
from example import MtExampleService, ttypes


class ExampleSimpleServer(MtExampleService.Iface):
    def SetUserProfile(self, oProfile):
        #TODO
        return 0

    def GetUserProfile(self, userId):
        #TODO
        oProfile = ttypes.UserProfile()
        return oProfile


handler = ExampleSimpleServer()

processor = MtExampleService.Processor(handler)

transport = TSocket.TServerSocket('localhost', 9090)
tfactory = TTransport.TBufferedTransportFactory()
pfactory = TCompactProtocol.TCompactProtocolFactory()

server = TNonblockingServer.TNonblockingServer(processor, transport, tfactory, pfactory)

print "Starting python server..."

server.serve()

print "done!"    

