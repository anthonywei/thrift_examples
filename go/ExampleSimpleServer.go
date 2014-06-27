package main

import (
    "crypto/tls"
    "fmt"
    "./thrift"
    "./example"
)

func runServer(transportFactory thrift.TTransportFactory, protocolFactory thrift.TProtocolFactory, addr string, secure bool) error {
    var transport thrift.TServerTransport
    var err error
    if secure {
        cfg := new(tls.Config)
        if cert, err := tls.LoadX509KeyPair("server.crt", "server.key"); err == nil {
            cfg.Certificates = append(cfg.Certificates, cert)
        } else {
            return err
        }
        transport, err = thrift.NewTSSLServerSocket(addr, cfg)
    } else {
        transport, err = thrift.NewTServerSocket(addr)
    }

    if err != nil {
        return err
    }
    fmt.Printf("%T\n", transport)

    handler := example.NewMtExampleServiceImpl()
    processor := example.NewMtExampleServiceProcessor(handler)

    server := thrift.NewTSimpleServer4(processor, transport, transportFactory, protocolFactory)

    fmt.Println("Starting the simple server... on ", addr)
    return server.Serve()
}

func main() {
    protocolFactory := thrift.NewTBinaryProtocolFactoryDefault()
    transportFactory := thrift.NewTTransportFactory()
    addr := "localhost:9090"
    secure := false

    if err := runServer(transportFactory, protocolFactory, addr, secure); err != nil {
        fmt.Println("error running server:", err)
    }
}
