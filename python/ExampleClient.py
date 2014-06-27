# coding=utf-8
import sys
sys.path.append('./') 

from thrift import Thrift
from thrift.transport import TSocket
from thrift.transport import TTransport
from thrift.protocol import TBinaryProtocol
from thrift.protocol import TCompactProtocol
from example import MtExampleService, ttypes 

def ExampleClient():
    try:
        transport = TSocket.TSocket('localhost', 9090) 
        transport = TTransport.TBufferedTransport(transport)
        protocol = TCompactProtocol.TCompactProtocol(transport)
        client = MtExampleService.Client(protocol)
        transport.open()

        client.GetUserProfile(100)

        transport.close()
    except Thrift.TException, tx:
        print '%s' % (tx.message)
        
        
if __name__ == '__main__':
    ExampleClient()
