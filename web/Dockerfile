FROM centos
MAINTAINER Goran Donev <gokidonev@gmail.com>
RUN yum -y install yum-utils vim net-tools screen wget epel-release
COPY Repos/nginx.repo /etc/yum.repos.d/
RUN yum-config-manager --enable nginx-mainline
RUN yum -y install nginx
COPY Config/Nginx/default.conf /etc/nginx/conf.d/
EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]
