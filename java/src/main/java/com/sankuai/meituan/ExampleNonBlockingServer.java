package com.sankuai.meituan;

/**
 * Created by weishouyang on 14-6-24.
 *
 * 注意：Nonblocking server在传输协议上必须使用FramedTransport，在客户端调用的时候，如果客户端选用的不是FramedTransport则协议会出错
 */

import org.apache.thrift.TProcessor;
import org.apache.thrift.protocol.TCompactProtocol;
import org.apache.thrift.server.TNonblockingServer;
import org.apache.thrift.server.TServer;
import org.apache.thrift.transport.TFramedTransport;
import org.apache.thrift.transport.TNonblockingServerSocket;


public class ExampleNonBlockingServer {
    public static final int SERVER_PORT = 8090;

    public void serve() {
        try {
            System.out.println("TNonblockingServer start ....");

            TProcessor tprocessor = new MtExampleService.Processor<MtExampleService.Iface>(
                    new MtExampleImpl());

            TNonblockingServerSocket tnbSocketTransport = new TNonblockingServerSocket(
                    SERVER_PORT);
            TNonblockingServer.Args tnbArgs = new TNonblockingServer.Args(
                    tnbSocketTransport);
            tnbArgs.processor(tprocessor);
            tnbArgs.transportFactory(new TFramedTransport.Factory());
            tnbArgs.protocolFactory(new TCompactProtocol.Factory());


            TServer server = new TNonblockingServer(tnbArgs);
            server.serve();

        } catch (Exception e) {
            System.out.println("Server start error!!!");
            e.printStackTrace();
        }
    }


    public static void main(String[] args) {
        ExampleNonBlockingServer server = new ExampleNonBlockingServer();
        server.serve();
    }

}
