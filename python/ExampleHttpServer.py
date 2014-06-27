# coding=utf-8

import sys
import socket

sys.path.append('./')

from thrift import Thrift
from thrift.transport import TSocket
from thrift.transport import TTransport
from thrift.protocol import TJSONProtocol
from thrift.server import TServer, THttpServer
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

pfactory = TJSONProtocol.TJSONProtocolFactory()

server = THttpServer.THttpServer(processor, ('0.0.0.0', 8080), pfactory)

print "Starting python server..."

server.serve()

print "done!"    

