package main;

import (
    "crypto/tls"
    "fmt"
    "./thrift"
    "./example"
)

func runClient(transportFactory thrift.TTransportFactory, protocolFactory thrift.TProtocolFactory, addr string, secure bool) error {
    var transport thrift.TTransport
    var err error
    if secure {
        cfg := new(tls.Config)
        cfg.InsecureSkipVerify = true
        transport, err = thrift.NewTSSLSocket(addr, cfg)
    } else {
        transport, err = thrift.NewTSocket(addr)
    }
    if err != nil {
        fmt.Println("Error opening socket:", err)
        return err
    }
    transport = transportFactory.GetTransport(transport)
    defer transport.Close()
    if err := transport.Open(); err != nil {
        return err
    }
    
    client := example.NewMtExampleServiceClientFactory(transport, protocolFactory)

    oProfile, err := client.GetUserProfile(0)

    if err != nil {
        fmt.Println("GetUserProfile(0) ok " + oProfile.UseName)
    }
    return err
}

func main(){
    protocolFactory := thrift.NewTBinaryProtocolFactoryDefault()
    transportFactory := thrift.NewTTransportFactory()
    addr := "localhost:9090"
    secure := false

    if err := runClient(transportFactory, protocolFactory, addr, secure); err != nil {
        fmt.Println("error client called")
    }
}
