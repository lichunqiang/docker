FROM alpine:latest

ENV DEBIAN_FRONTEND noninteractive
ENV PATH /usr/local/rvm/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin


RUN apk update \
	&& apk add beanstalkd \
	&& rm /var/cache/apk/*

VOLUME /var/lib/beanstalkd/data

EXPOSE 11300

CMD ["/usr/bin/beanstalkd"]