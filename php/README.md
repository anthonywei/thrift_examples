说明：
=====================
    php使用thrift的时候，有2种使用方式，一种是基于php扩展的thrift_Protocol.so的模式
    另外一种是使用php的SDK，第一种方式性能好一些，第二种方式的灵活性较高，比较推荐后者
    这里的例子也是基于后者。
    另外一点就是大家主要是使用php来做thrift的client端，实际上发现php也可以作出性能很好的
    server，经过修改默认的php SDK后也可以实现php多进程服务，另外php根据thrift的json作出的
    服务在前端接入nginx之后，也可以提供不俗的性能。
    还有一点需要说明，原生的thrift的框架提供的SDK是命名空间的使用方式，这个方式

例子说明:
=====================

1.INC_COMM.php
---------------------
 手动创建的文件，由于thrift的库里面使用了命名空间，并且thrift的库本身并没有include相应的文件，所以这里为了方便
 大家使用，自己加了一个include的集合文件，大家引用它就可以了，这个可以看成一个公共的文件。

2.MtExampleService.php
---------------------
 生成的文件，主要是一些调用的库，这里php默认的thirft生成方式是不包含server代码的（默认认为php不会
 做server），所以在生成php server代码的时候要使用thrift -gen php:server example.thrift 才可以

3.Types.php
--------------------
 生成的文件，主要是一些结构体的数据，注意这个文件和2中的文件生成后都需要手动引入INC_COMM.php文件

4.MtExampleServiceImpl.php
---------------------
 手动创建的文件，主要实现server的具体业务处理的代码

5.ExampleForkingServer.php
---------------------
 手动创建的文件，主要是实现server端的实现,这里只是简单的实现，修改后就可以支持多进程的服务。


6.ExampleClient.php
---------------------
 手动创建的文件，client调用的代码例子

