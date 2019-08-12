FROM centos
RUN yum -y install net-tools vim wget screen nginx
RUN yum -y install http://rpms.remirepo.net/enterprise/remi-release-7.rpm
RUN yum-config-manager --enable remi-php72
RUN yum -y install php php-common php-opcache php-mcrypt php-cli php-gd php-curl php-mysql php-fpm
RUN sed -i 's/;cgi.fix_pathinfo=1/cgi.fix_pathinfo=0/g' /etc/php.ini
RUN sed -i 's/user = apache/user = nginx/g' /etc/php-fpm.d/www.conf
RUN sed -i 's/group = apache/group = nginx/g' /etc/php-fpm.d/www.conf
RUN sed -i 's/127.0.0.1:9000/9000/g' /etc/php-fpm.d/www.conf
RUN sed -i 's/listen.allowed_clients/;listen.allowed_clients/g' /etc/php-fpm.d/www.conf
RUN useradd -M -d /var/www/html -s /bin/false nginx

RUN mkdir -p /run/php-fpm && \
    chown nginx:nginx /run/php-fpm

RUN mkdir -p /var/lib/php/session && \
    chown nginx:nginx /var/lib/php/session
RUN yum -y install supervisor
COPY Config/Supervisor/supervisord.conf /etc/
EXPOSE 9000
CMD ["/usr/bin/supervisord", "-n"]
