FROM centos
RUN yum -y install net-tools vim wget screen epel-release
RUN yum -y install vsftpd

ARG PASS
ARG USER

COPY Config/vsftp/vsftpd.conf /etc/vsftpd/
RUN mkdir -p /var/www/html
RUN useradd -ms /bin/bash -d /var/www/html $USER
RUN echo $PASS | passwd --stdin ftp_test
RUN echo $USER > /etc/vsftpd/chroot_list
RUN chown -R "$USER:" /var/www/html/
EXPOSE 20 21
CMD ["/usr/sbin/vsftpd","-obackground=NO"]
