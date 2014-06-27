说明：
==================


这里对原生的java版本的服务，还是给出2个例子，同时给出client使用的例子。
======================

下面对目录下的文件做一个简要的说明:

1.ExampleSimpleServer：
---------------
是简单server模型，对性能要求不高的时候可以使用
2.ExampleThreadPollServer：
----------------
线程池server模型，性能高，推荐使用
3.ExampleNonBlockingServer：
--------------
非阻塞server模型，性能高，但是使用的时候请关注client端的调用，需要格外注意这里必须使用FramedTransport才可以，不然协议是不兼容的

4.ExampleClient：
---------------
客户端代码，非Framed协议适用1，2的server模型
5.ExampleFramedClient：
-------------------
客户端代码，Framed的协议，试用3的server模型


