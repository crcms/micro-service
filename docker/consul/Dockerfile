FROM consul

MAINTAINER simon

#### set timezone #############################
ARG ARG_TIMEZONE=UTC
RUN ln -snf /usr/share/zoneinfo/${ARG_TIMEZONE} /etc/localtime && echo ${ARG_TIMEZONE} > /etc/timezone

VOLUME ["/consul/data", "/consul/config"]

#EXPOSE [8500 , 8300]
