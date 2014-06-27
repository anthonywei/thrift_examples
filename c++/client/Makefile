INCLUDE =-I./ \
	 -I../\
	 -I../lib\

    
LIB = -L./ \
	  -levent\



VPATH = ../lib\
	../lib/async \
	../lib/concurrency \
	../lib/processor \
	../lib/protocol \
	../lib/qt \
	../lib/server \
	../lib/transport \


CFLAGS = 


OUTPUT  = thriftclient_example

OBJS    = MtExampleClient.o \
		MtExampleService.o \
		example_constants.o\
		example_types.o\
		Thrift.o\
		TBufferTransports.o\
		TApplicationException.o\
		TSocket.o\
		Util.o\




all:$(OUTPUT) 

.SUFFIXES: .o .cpp
.cpp.o:
	$(CXX) $(CFLAGS) $(INCLUDE) -c $^ 

.o:
	$(CXX) $(CFLAGS) $(INCLUDE) -o $@ $^

$(OUTPUT): $(OBJS)
	$(CXX) $(CFLAGS) -o $@ $^ ${LIB}
	
clean:
	rm -f *.o *.~ *.bak
	rm -f $(OUTPUT)

dep:
	mkdep $(INCLUDE) $(SOURCES) > .depend

ifneq ($(wildcard .depend),)
include .depend
endif
