package com.sankuai.meituan;

/**
 * Created by weishouyang on 14-6-24.
*/

import org.apache.thrift.TProcessor;
import org.apache.thrift.protocol.TBinaryProtocol;
import org.apache.thrift.server.TServer;
import org.apache.thrift.server.TThreadPoolServer;
import org.apache.thrift.transport.TServerSocket;


public class ExampleThreadPoolServer {
    public static final int SERVER_PORT = 8090;

    public void serve() {
        try {
            System.out.println("TThreadPoolServer start ....");

            TProcessor tprocessor = new MtExampleService.Processor<MtExampleService.Iface>(
                    new MtExampleImpl());

            TServerSocket serverTransport = new TServerSocket(SERVER_PORT);
            TThreadPoolServer.Args sArgs = new TThreadPoolServer.Args(
                    serverTransport);
            sArgs.processor(tprocessor);
            sArgs.protocolFactory(new TBinaryProtocol.Factory());


            TServer server = new TThreadPoolServer(sArgs);
            server.serve();

        } catch (Exception e) {
            System.out.println("Server start error!!!");
            e.printStackTrace();
        }
    }


    public static void main(String[] args) {
        ExampleThreadPoolServer server = new ExampleThreadPoolServer();
        server.serve();
    }
}