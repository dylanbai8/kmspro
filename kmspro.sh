#!/bin/bash

#====================================================
#	System Request: Debian/Ubuntu/Mint/CentOS/Redhat/Fedora
#	Author: dylanbai8
#	Dscription: KMS服务一键安装脚本
#	Open Source: https://github.com/dylanbai8/kmspro
#	Official document: https://v0v.bid
#====================================================

# 定义脚本变量
PATH=/bin:/sbin:/usr/bin:/usr/sbin:/usr/local/bin:/usr/local/sbin:~/bin
export PATH
STAT=2

# Debian系列操作系统安装KMS
do_debian(){
apt-get install gcc git make -y
mkdir /usr/local/kms
cd /usr/local/kms
git clone https://github.com/Wind4/vlmcsd.git
cd vlmcsd
make
cd bin
mv vlmcsd /usr/local/kms/kms
cd /usr/local/kms/
rm -rf ./vlmcsd/
mv kms vlmcsd
echo "KMS服务安装成功！"
echo "更多教程请访问：https://v0v.bid/kms.html"
}

# Centos系列操作系统安装KMS
do_centos(){
yum install gcc git make -y
mkdir /usr/local/kms
cd /usr/local/kms
git clone https://github.com/Wind4/vlmcsd.git
cd vlmcsd
make
cd bin
mv vlmcsd /usr/local/kms/kms
cd /usr/local/kms/
rm -rf ./vlmcsd/
mv kms vlmcsd
echo "KMS服务安装成功！"
echo "更多教程请访问：https://v0v.bid/kms.html"
echo "Centos请自行开放1688端口"
}

# 检测KMS运行状态
check_running(){
PID=`ps -ef | grep -v grep | grep -i "vlmcsd" | awk '{print $2}'`
		if [ ! -z $PID ]; then
		STAT=0
	else
		STAT=1
	fi
}

# 重启KMS服务
do_restart(){
	check_running
	if [ $STAT = 0 ]; then
		echo "KMS服务已经运行 正在重新启动 ..."
		kill $PID
	elif [ $STAT = 1 ]; then
		echo "KMS服务未运行 正在启动 ..."
	fi
	/usr/local/kms/vlmcsd
	check_running
	if [ $STAT = 0 ]; then
		local_ip=`curl -4 ip.sb`
		echo "KMS服务 启动成功"
		echo "[Windows一句命令激活] 命令提示符(管理员)：slmgr /skms ${local_ip} && slmgr /ato"
		echo "更多教程请访问：https://v0v.bid/kms.html"
	elif [ $STAT = 1 ]; then
		echo "KMS服务 启动失败"
	fi
}

# 停止KMS服务
do_stop(){
	check_running
	if [ $STAT = 0 ]; then
			echo "正在停止 KMS服务 ..."
		kill $PID
		check_running
		if [ $STAT = 0 ]; then
			echo "停止 KMS服务 失败"
		elif [ $STAT = 1 ]; then
			echo "停止 KMS服务 成功"
			fi
		elif [ $STAT = 1 ]; then
				echo "KMS服务 未运行 取消操作"
		fi
}

# 检测KMS服务是否运行
do_status(){
	check_running
	if [ $STAT = 0 ]; then
				echo "KMS服务 正在运行"
				echo "更多教程请访问：https://v0v.bid/kms.html"
		elif [ $STAT = 1 ]; then
				echo "KMS服务 未运行"
		fi
}

# 启动KMS服务
do_start(){
	check_running
	if [ $STAT = 0 ]; then
				echo "KMS服务 已运行 取消操作"
				echo "更多教程请访问：https://v0v.bid/kms.html"
		exit 0;
		elif [ $STAT = 1 ]; then
				echo "正在启动 KMS服务 ..."
	/usr/local/kms/vlmcsd
	fi
		check_running
		if [ $STAT = 0 ]; then
				local_ip=`curl -4 ip.sb`
				echo "KMS服务 启动成功"
				echo "[Windows一句命令激活] 命令提示符(管理员)：slmgr /skms ${local_ip} && slmgr /ato"
				echo "更多教程请访问：https://v0v.bid/kms.html"
		elif [ $STAT = 1 ]; then
				echo "KMS服务 启动失败"
		fi
}

# 添加开机自启动服务
do_auto(){
	echo "/usr/local/kms/vlmcsd" >> /etc/rc.local
	chmod +x /etc/rc.local
	echo "已添加 开机自启动 KMS服务"
	echo "更多教程请访问：https://v0v.bid/kms.html"
}

# 卸载KMS服务
do_uninstall(){
	rm -rf /usr/local/kms
	sed -i '/vlmcsd/'d /etc/rc.local
	echo "KMS服务 已卸载"
}

# 脚本菜单
case "$1" in
	debian|centos|start|stop|auto|restart|status|uninstall)
	do_$1
	;;
	*)
	echo "缺少参数: debian | centos | start | stop | auto | restart | status | uninstall "
	;;
esac
