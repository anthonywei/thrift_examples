package com.sankuai.meituan;

/**
 * Created by weishouyang on 14-6-24.
 */
import org.apache.thrift.TProcessor;
import org.apache.thrift.protocol.TBinaryProtocol;
import org.apache.thrift.protocol.TCompactProtocol;
import org.apache.thrift.protocol.TJSONProtocol;
import org.apache.thrift.protocol.TSimpleJSONProtocol;
import org.apache.thrift.server.TServer;
import org.apache.thrift.server.TSimpleServer;
import org.apache.thrift.transport.TServerSocket;


public class ExampleSimpleServer {

    public static final int SERVER_PORT = 9090;

    public void serve() {
        try {
            System.out.println("TSimpleServer start ....");

            TProcessor tprocessor = new MtExampleService.Processor<MtExampleService.Iface>(
                    new MtExampleImpl());


            TServerSocket serverTransport = new TServerSocket(SERVER_PORT);
            TServer.Args tArgs = new TServer.Args(serverTransport);
            tArgs.processor(tprocessor);
            tArgs.protocolFactory(new TBinaryProtocol.Factory());

            TServer server = new TSimpleServer(tArgs);
            server.serve();

        } catch (Exception e) {
            System.out.println("Server start error!!!");
            e.printStackTrace();
        }
    }


    public static void main(String[] args) {
        ExampleSimpleServer server = new ExampleSimpleServer();
        server.serve();
    }
}
