说明：
======================


thrift目录
=====================
go thrift 的库文件，公共的，可以考虑加入了GOPATH里面去


example目录
=====================
thrift -gen 根据example.thrift生成的目录


example/MtExampleServiceImpl.go
======================
手动创建的文件，旨在实现实际的server端逻辑

ExampleSimpleServer.go
=======================
手动创建的文件，实现server的监听，服务启动等功能

ExampleClient.go
======================
手动创建的文件，实现client的调用


