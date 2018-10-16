## 官方网站：https://v0v.bid

---

---

### windows系统一句命令激活

#### 打开 命令提示符（管理员） 运行：slmgr /skms kms.v0v.bid && slmgr /ato

---

---

## Linux系统 自建KMS服务器

### 一键安装KMS服务 （Debian/Ubuntu/Mint 等）
```
wget -N --no-check-certificate git.io/k.sh && chmod +x k.sh && bash k.sh debian
```

### 一键安装KMS服务 （CentOS/Redhat/Fedora 等）（如果系统开启了防火墙 须自行开放 1688 端口）
```
wget -N --no-check-certificate git.io/k.sh && chmod +x k.sh && bash k.sh centos
```

### 启动KMS服务
```
bash k.sh start

服务器IP地址既是KMS服务器地址
也可以将域名解析至IP使用（支持IPv6 即AAAA记录）

更多详细教程：https://v0v.bid/kms.html
```

### 关闭KMS服务
```
bash k.sh stop
```

### 添加开机自启动KMS服务
```
bash k.sh auto
```

### 重启KMS服务
```
bash k.sh restart
```

### 查看KMS服务运行状态
```
bash k.sh status
```

### 卸载KMS服务
```
bash k.sh uninstall
```

## Windows系统 自建KMS服务器

### 一键安装KMS服务 （Windows系统 x86/x64）
```
访问下方地址：
https://github.com/Wind4/vlmcsd/releases
下载最新版本 binaries.tar.gz

解压后运行：
\binaries\Windows\intel\vlmcsd-Windows-x64.exe
或者：
\binaries\Windows\intel\vlmcsd-Windows-x86.exe
```

## 安卓手机 自建KMS服务器
```
访问下方地址：
https://v0v.bid/android.html
查看教程
```

## 版权声明：
### 此项目仅为bash一键脚本，脚本内所涉及到的任何软件版权和责任归原作者所有。
```
此项目脚本基于以下开源项目：
https://github.com/Wind4/vlmcsd
https://github.com/ThunderEX/py-kms
https://forums.mydigitallife.net/members/hotbird64.333466/
https://forums.mydigitallife.net/members/pantagruel.5805/
```
