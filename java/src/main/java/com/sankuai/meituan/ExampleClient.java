package com.sankuai.meituan;

/**
 * Created by weishouyang on 14-6-24.
 */


import org.apache.thrift.TException;
import org.apache.thrift.protocol.TBinaryProtocol;
import org.apache.thrift.protocol.TCompactProtocol;
import org.apache.thrift.protocol.TJSONProtocol;
import org.apache.thrift.protocol.TProtocol;
import org.apache.thrift.transport.TSocket;
import org.apache.thrift.transport.TTransport;
import org.apache.thrift.transport.TTransportException;


public class ExampleClient {

    public static final String SERVER_IP = "localhost";
    public static final int SERVER_PORT = 9090;
    public static final int TIMEOUT = 30000;


    public void invoke(int useId) {
        TTransport transport = null;
        try {
            transport = new TSocket(SERVER_IP, SERVER_PORT, TIMEOUT);

            TProtocol protocol = new TBinaryProtocol(transport);

            MtExampleService.Client client = new MtExampleService.Client(
                    protocol);
            transport.open();
            UserProfile profile = client.GetUserProfile(useId);
            System.out.println("GetUserProfile with username =: " + profile.getUseName());

        } catch (TTransportException e) {
            e.printStackTrace();
        } catch (TException e) {
            e.printStackTrace();
        } finally {
            if (null != transport) {
                transport.close();
            }
        }
    }


    public static void main(String[] args) {
        ExampleClient client = new ExampleClient();
        client.invoke(10);
    }
}