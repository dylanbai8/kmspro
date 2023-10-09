
[本站永久地址]  https://v0v.bid
本文内容：使用KMS命令 激活 Windows 系统（教程）、激活 Office 全套（教程）免责声明

--支持 Windows Vista/7/8/8.1/10/11   LTSB/LTSC系列   政府G版   欧洲N版   神州网信系列GN版   Windows server 2008/2008R2/2012/2012R2/2016/2019/2022

--支持 Office 2010/2013/2016/2019/LTSC2021   Office365   Microsoft365

支持KMS激活的 Windows 和 Office 版本 共202个：点击查看

优点1：可以放心的安装微软官方原版镜像，而不必担心激活问题。不会因为使用安装第三方提供的系统镜像或者Ghost系统而自带后门和流氓推广软件，天然肉鸡。
优点2：一句命令激活，无需下载，无需安装，无残留。不用担心网上下载的激活软件报毒问题，自带病毒、后门、强行安装流氓插件、绑架浏览器主页、后台常驻未知服务等问题。不会修改、替换、破坏、添加、破解任何系统和非系统文件，不会诱导用户关闭杀毒软件、添加查杀白名单，不会因为系统升级或者Windows Defender升级而被查杀使激活失效。

查看KMS服务器当前在线状态（每小时更新）：bid.v0v.bid

电脑工程师如何实时监控 kms.v0v.bid 在线状态，接收短信、邮件警报：
1.注册 https://www.jiankongbao.com 或者其它类似监控系统；
2.创建监控任务-普通网站监控-监控网址：https://bid.v0v.bid
3.更多高级设置-包含匹配内容-匹配内容：Successfully
4.按照该网站提示配置并开启Email和手机短信提醒；
当 kms.v0v.bid 故障时，你将及时收到警报提醒，服务恢复时收到恢复提醒。

微零微不持有、不搭建、不提供、不维护任何KMS主机以及激活服务。kms.v0v.bid 通过使用DNS负载均衡技术融合了数十个由匿名热心企业（机构、个人）公益共享的KMS激活服务器，智能分摊调度，不依赖任何单独的KMS主机。保证线路的绝对稳定和长期可用。

如何选择原版系统镜像
1.微软官方原版系统镜像(MSDN渠道)分两版，business版(即VOL版) 和 consumer版(即RTL版)。

business版镜像名称举例：
zh-cn_windows_11_business_editions_version_22h2_updated_may_2023_x64_dvd_76248ab3.iso

consumer版镜像名称举例：
zh-cn_windows_11_consumer_editions_version_22h2_updated_may_2023_x64_dvd_a95c5a5a.iso

查看镜像名称即可辨别版本。只有使用 business版(即VOL版、批量版、大客户版) 镜像安装的系统才能使用微零微一句命令激活（即KMS激活）。该镜像内包含专业版、企业版、教育版等，安装过程中会有选项。

另外business版安装过程中无输入密钥环节，而consumer版安装过程中会提示输入密钥。

2.微软官方原版系统镜像(VLSC渠道)只提供VOL版，特点是镜像名称以"SW_DVD"开头，例如：

SW_DVD9_Win_Pro_11_22H2_64BIT_ChnSimp_Pro_Ent_EDU_N_MLF_X23-12741.ISO

1.Windows 激活方法
1.打开 命令提示符 (管理员)

开始菜单-搜索“cmd”-找到“命令提示符”-右键“以管理员身份运行”。

2.执行以下命令（复制命令-右键粘贴）

slmgr /skms kms.v0v.bid && slmgr /ato

大部分情况下 你能下载到的系统镜像都是VOL版（Business版）仅需以上一步即可成功激活。

查看系统版本（备用）
wmic os get caption
查看激活详情（备用）
slmgr /dlv
查看所有命令（备用）
slmgr
本站同时提供了备用的便捷激活脚本（备用）跳转下文

如果激活失败有两种原因：
a.你无意中修改或卸载了系统自带的KMS激活密钥（比如你曾经使用了MAK密钥或网络上找到的其它密钥尝试激活失败）。
解决办法：命令提示符(管理员)执行以下命令安装对应版本的KMS密钥后重新激活（密钥在文末“附1”）
slmgr /ipk XXXXX-XXXXX-XXXXX-XXXXX-XXXXX
b.你安装的系统为RTL版，需要先转换为VOL版才能激活，方法请 参照特例。
c.更多问题请下拉本文查看“激活失败如何排错”。

[特例] Windows11/Windows10 家庭版（RTL版）升级为企业版（VOL版）并激活：
Windows11/10 最新零售版微软官方下载地址：https://www.microsoft.com/zh-cn/software-download/

请使用“手机” 访问，按提示选择版本和语言获取iOS镜像下载链接（电脑直接访问会跳转到更新助手页面）。

该版本安装完默认为 Windows11/10 家庭版（RTL版）依照以下命令升级为企业版（VOL版）并激活。

1.升级。使用 Win+i 快捷键打开「设置」- 点击「更新和安全」- 在左侧点击「激活」选项卡。

点击右侧的「更改产品密钥按钮」- 输入密钥：NPPR9-FWDCX-D2C8J-H872K-2YT43

如果提示密钥错误，请先输入如下密钥升级为专业版后，再输入企业版或者其它版本密钥进行升级。
VK7JG-NPHTM-C97JM-9MPGT-3V66T

2.激活。按提示升级后打开命令提示符(管理员)逐行执行以下命令：
slmgr /ipk NPPR9-FWDCX-D2C8J-H872K-2YT43
slmgr /skms kms.v0v.bid && slmgr /ato

同样的方法可以升级为专业版、教育版等，以及版本退回切换（政府版不可逆） 。升级密钥在文末“附1”。

全新装机请直接安装VOL版系统，本文末有下载链接。不推荐RTL转VOL的方式装机。

2.Office 激活方法
目前看来 LTSC2021 可能是 Office VOL版的最后一个数字版本，往后只会以 “Microsoft 365 应用企业版” 的形式出现。
微软在 Office 2016 之后不再为VOL版提供ISO镜像(官方离线安装包)。也就是说，以后的VOL版只能使用微软官方 Office部署工具 或者 第三方软件(如：Office Tool Plus) 部署安装。本文末有下载链接。

1.命令提示符(管理员)进入Office OSPP.VBS目录

以 LTSC2021 64位版本为例，默认安装目录是 C:\Program Files\Microsoft Office\Office16
所以，打开命令提示符(管理员)执行以下命令进入OSPP.VBS目录

cd C:\Program Files\Microsoft Office\Office16

如果你安装的是其它版本 或者 Office安装在其它盘符和路径，参照下文自行修改命令。

Office2016、Office2019、LTSC2021、Office365/Microsoft365 默认安装目录
32位版本：
cd C:\Program Files (x86)\Microsoft Office\Office16
64位版本：
C:\Program Files\Microsoft Office\Office16

Office2013 默认安装目录
32位版本：
cd C:\Program Files (x86)\Microsoft Office\Office15
64位版本：
cd C:\Program Files\Microsoft Office\Office15

Office2010 默认安装目录
32位版本：
cd C:\Program Files (x86)\Microsoft Office\Office14
64位版本：
cd C:\Program Files\Microsoft Office\Office14

总之就是在cmd命令提示符(管理员)内 使用cd命令进入 OSPP.VBS 文件所在的目录。
如果不确定自己安装的Office是32位还是64位，就两行命令都执行一下 不报错的就是对的。

2.执行命令激活Office软件

完成上一步骤后，执行以下命令。

cscript ospp.vbs /sethst:kms.v0v.bid && cscript ospp.vbs /act

大部分情况下 你能下载到的安装包都是VOL版 仅需以上两步即可成功激活。

查询Office激活详情（备用）
cscript ospp.vbs /dstatus
查看所有命令（备用）
cscript ospp.vbs
本站同时提供了备用的便捷激活脚本（备用）跳转下文

如果激活失败有两种原因：
a.你无意中修改或卸载了Office自带的KMS激活密钥（比如你曾经使用了MAK密钥或网络上找到的其它密钥尝试激活失败）。
解决办法：执行以下命令安装对应版本的KMS密钥后重新激活（密钥在文末“附2”）
cscript ospp.vbs /inpkey:XXXXX-XXXXX-XXXXX-XXXXX-XXXXX
b.你安装的为RTL版Office，需要转换为VOL版才能激活，方法请 参照特例，或者使用一键转换脚本（跳转下文）。
c.Mac版的批量版Office不需要KMS激活，只需运行微软提供的 SWDVD5_Office_Mac_Serializer_*.ISO（相当于激活补丁，十几MB）安装即可激活。
d.更多问题请下拉本文查看“激活失败如何排错”。

[特例] Office365/Microsoft365 家庭版（RTL版）转换专业版（VOL版）并激活（以64位默认安装目录为例）：
Office365/Microsoft365 最新零售版微软官方下载地址：https://www.microsoft.com/zh-cn/microsoft-365/try

打开链接点击试用1个月按提示下载安装。

该版本安装完默认为 Office365/Microsoft365 家庭版（RTL版）依照以下命令升级为专业版（VOL版）并激活。

1.打开命令提示符(管理员)执行以下命令进入OSPP.VBS目录
cd C:\Program Files\Microsoft Office\Office16

2.将Office365/Microsoft365家庭版RTL版转换为专业版VOL版

完成上一步骤后，执行以下命令转换版本。

for /f %x in ('dir /b ..\root\Licenses16\proplusvl_kms*.xrm-ms') do cscript ospp.vbs /inslic:"..\root\Licenses16\%x"
for /f %x in ('dir /b ..\root\Licenses16\proplusvl_mak*.xrm-ms') do cscript ospp.vbs /inslic:"..\root\Licenses16\%x"

提示：将以上代码中的“16”(Office2016 Office2019 LTSC2021 Office365/Microsoft365)改为“15”(Office2013)或者“14”(Office2010)，便可以将相对应的RTL版转换VOL版。

3.安装KMS激活密钥
cscript ospp.vbs /inpkey:XQNVK-8JYDB-WJ9W3-YJ8YR-WFG99

4.激活 Office
cscript ospp.vbs /sethst:kms.v0v.bid && cscript ospp.vbs /act

全新装机请直接部署VOL版，本文末有下载链接。不推荐RTL转VOL的方式装机。

3.激活说明（激活原理）
KMS激活是微软针对大型企业（机构、政府、学校大量采购）设计的激活系统，KMS批量激活广泛用于机房服务器操作系统和大型企业内部批量激活员工电脑，限企业内网使用。目前公开的KMS激活服务器（官方称为KMS主机）封杀力度很大，为了节省大家的时间与精力，请低调使用，转载请注明：https://v0v.bid 。

微软本意为，只要某台电脑运行在购买了KMS批量授权的企业内网，该电脑便被识别为该企业所有，自动占用一个授权名额，且无需任何操作自动永久激活。当该电脑搬离出企业超过180天后自动失去授权。此方案极大的方便了企业内部电脑的授权管理、IT资产管理，其设计精妙可谓拍案叫绝！

但，被分享到公网的KMS激活服务器，已通过技术手段突破了内网限制，不被内网约束。因此，只要你的电脑可以连接互联网，便不会失去授权名额。

KMS 激活有 180 天期限，此期限称为激活有效期间隔。若要保持激活状态，您的系统必须通过至少每 180 天连接一次KMS激活服务器来续订激活。
默认情况下，系统每 7 天自动进行一次激活续订尝试。在续订成功之后，激活有效期时间间隔将重新开始计算，重置为180天（详见微软官方文档）。

综上所述，只要您的电脑不超过 180 天以上无法连接企业内网（互联网），就无需进行任何操作，系统会自行续期保持激活状态。即永久激活。

如若你无法保证半年内上一次网，或者你有心理上的强迫症。那么下拉本文，按提示将你的电脑升级为中国政府版（仅支持Windows10系统）。
你只需要保证 410年 连接一次互联网，即可永久使用正版的Windows10系统。

不支持 KMS 激活的 Windows/Office 版本：
Windows系统分为：MSDN版（面向开发者 很少见）、OEM版（面向笔记本品牌厂商 自带激活）、COEM版（正版光盘 激活绑定主板 很少见）、RTL版（零售正版光盘 一盘一Key一机 不绑定硬件）、VOL版（大客户版 企业政府学校机构大量采购）。其中我们常用的VOL版又分为专业版、企业版、教育版、中国政府版、欧洲版等等。Office情况类似不再复述。

KMS激活和MAK密钥激活是所有VOL版操作系统和Office套件的2种激活方式，本站教程所诉为KMS激活。零售版（RTL版）可通过更换密钥升级为VOL版（详见上文特例）。

快速区分Windows或Office原版镜像是否为VOL版：
1.镜像名称中包含 consumer、home、个人版、家庭版、旗舰版 都不是VOL版。
2.安装过程中，VOL版是不用输入密钥的，而RTL版会提示输入密钥。
3.镜像名称中有类似 business、vol、volume、批量、大客户 这样的英文或者中文标注 都是VOL版。

查看已安装的Windows或Office是否为VOL版：
1.查验Windows 在命令提示符执行：slmgr /dlv
2.查验Office 在命令提示符进入OSPP.VBS目录后执行：cscript ospp.vbs /dstatus
在“描述（DESCRIPTION）”这一行内有 VOLUME 字样就是VOL版，就是支持KMS激活。

对于绝大部分用户而言，Windows11/10只要不是家庭版（home版）在使用体验上不会感受到任何区别。企业版和教育版功能最多最全最完整最容易KMS激活。

请留意，本文末提供了常用的第三方微软Windows操作系统（Office套件）原版镜像库。可以下载到微软原版纯净镜像。

为什么有人说 KMS只能激活半年（180天）到期后需要手动重新激活
使用“内网正版KMS激活”和“泄露出来的外网KMS激活”以及下文会提到的“非法伪造的未经授权的KMS模拟器激活”，激活成功后系统会每隔7天自动续期的，无需任何操作。也就是说你的系统会永远保持在174天以上的激活有效期，即永久激活，除非你断网180天。

但是除此之外，有大神研究出了“本机KMS激活”，就是让你下载安装一个KMS激活软件，软件会在你的电脑内生成一个虚拟机来伪造KMS主机，然后进行本机自我KMS激活。(在本机通过虚拟网卡的形式弄了个虚拟局域网给本机激活，又或者通过注册表劫持服务的形式让所有激活请求都劫持到本地。)

这简直是一个神作！它实现了离线KMS激活，突破了微软不允许自我激活的限制，不使用网络、不依赖任何KMS服务器。但也有它的缺点：

1.本机KMS虚拟机显然没必要一直在后台运行耗费电脑资源。因此就出现了上文描述的问题 “一次只能激活180天 到期后需要手动重新激活”，当然，也可以通过Windows计划任务，每隔一段时间自动运行续期。
2.激活软件在传播、修改、汉化过程中，非常容易被恶意植入捆绑后门、病毒。并以激活系统的名义理直气壮的要求用户忽略报毒、诱导用户关闭杀毒软件，长期在系统后台运行未知服务。
3.微软对该种软件的封杀力度很大，在系统升级或者Windows Defender升级时会被查杀而使激活失效。

所以，除非迫不得已，不建议使用这种软件。且一定要在软件作者发布页下载原版。

为什么网络上有一些软件可以KMS激活系统 19年、38年？

上文我们解释了什么是“激活有效期间隔”，Windows正常的VOL版本激活有效期间隔是180天，但除此之外还有一些特殊版本的系统。这些版本的Windows系统是专门为某些机构定制的，比如中国政府定制的神州网信政府版Windows10激活有效期间隔就是410年！

有了特殊版本，也就为漏洞敞开了大门。一些大神可以通过提取、替换系统根证书的方式偷梁换柱，更改普通VOL版本Windows的“激活有效期间隔”。(KMS38是利用了gatherosstate.exe漏洞)

根证书路径：
C:\Windows\System32\spp\tokens\skus
证书更新命令：
slmgr /rilc

顺便提一下"数字权利"激活吧：

数字权利是在Win10刚出来的时候，给Win7升级免费升级到win10搞出来的东西。正常来说你需要有一个正版的win7或者win8等系统，然后升级，程序会收集你电脑的硬件信息和密钥，生成一个"免费门票"提交给微软服务器，以后联网微软就可以判断硬件信息是否对的上就能激活。(要是你的key来源不怎么干净，这就相当于偷渡洗白了。)然而这枚免费门票是由 gatherosstate.exe 生成的，想必你也猜到了，破解这个系统应用就得到了盗版系统"数字权利"激活工具。

和自激活类KMS激活软件一样，这类软件在传播、修改、汉化过程中，同样非常容易被恶意植入捆绑后门、病毒。

已永久激活的：
已通过数字许可证或者其它方式永久激活的系统，执行本文教程中的 KMS 激活命令不会影响和改变系统激活状态。
注意：更换密钥或者切换系统版本会导致失去原先激活状态！恢复方法为“先用命令行清除密钥卸载KMS激活，回到未激活状态。然后使用激活疑难解答”。

激活后是正版吗？如何选择激活工具
正版是个法律概念，非法持有即是盗版。对于白嫖党，我们通常希望的"正版"其实是指"原版"，区别于破解版(有系统文件被破解篡改)。

首先方式：
1.零售密钥或批量MAK密钥（如果你能搞到一枚）
2.一句命令KMS激活（类似本站）

其它方式：
3.破解软件（数字权利激活软件、自激活类KMS软件）

微软官方文档：
[Windows] https://learn.microsoft.com/zh-cn/windows/deployment/volume-activation/activate-using-key-management-service-vamt
[Windows] https://learn.microsoft.com/zh-cn/windows/deployment/volume-activation/use-the-volume-activation-management-tool-client
[Windows] https://learn.microsoft.com/zh-cn/windows/deployment/volume-activation/volume-activation-windows-10
[Windows] https://learn.microsoft.com/zh-cn/windows/deployment/volume-activation/activate-windows-10-clients-vamt
[Windows] https://learn.microsoft.com/zh-cn/windows/deployment/volume-activation/plan-for-volume-activation-client
[Windows] https://learn.microsoft.com/zh-cn/windows-server/get-started/kms-activation-planning
[Windows] https://learn.microsoft.com/zh-cn/windows-server/get-started/kms-client-activation-keys
[Office] https://learn.microsoft.com/zh-cn/deployoffice/vlactivation/plan-volume-activation-of-office
[Office 2016/2019] https://learn.microsoft.com/zh-cn/DeployOffice/vlactivation/gvlks
[Office 2013] https://learn.microsoft.com/zh-cn/previous-versions/office/dn385360(v=office.15)
[Office 2010] https://learn.microsoft.com/zh-cn/previous-versions/office/office-2010/ee624355(v=office.14)
[Windows] https://learn.microsoft.com/zh-cn/search/?terms=kms

4.Windows10 升级为政府版并激活410年
注意：中国政府版（Windows10神州网信政府版（CMGE））更新服务器位于中国境内，该版本移除、禁用了原版Windows10中自带的办公类、个人助理类、娱乐生活类应用以及基于云的服务（如：OneDrive,Windows Defender等），内置了中国政府指定数字证书机关的根证书，开启或者关闭了大量系统安防方面的设置。

官方文档：http://document.cmgos.com/release_notes/release_notes

1.升级。使用 Win+i 快捷键打开「设置」- 点击「更新和安全」- 在左侧点击「激活」选项卡。

点击右侧的「更改产品密钥按钮」- 输入密钥：YYVX9-NTFWV-6MDM3-9PT4T-4M68B

如果提示密钥错误，请先输入如下密钥升级为专业版后，再输入中国政府版密钥进行升级
VK7JG-NPHTM-C97JM-9MPGT-3V66T

2.激活。按提示升级后打开命令提示符(管理员)逐行执行以下命令：
slmgr /ipk YYVX9-NTFWV-6MDM3-9PT4T-4M68B
slmgr /skms kms.v0v.bid && slmgr /ato

执行以下命令查看KMS激活期限
slmgr /xpr

温馨提示：
你也可以直接使用原版 Windows10 神州网信政府版系统镜像安装系统，只需执行以下命令即可激活410年授权。
slmgr /skms kms.v0v.bid && slmgr /ato
支持最新的 V2022-L 版，在下文可以找到官方原版系统镜像的下载链接。

通过"升级转换"方式激活的政府版事实上是一个混合版，兼具两者特性，且不具备原本政府版严格的安全策略，更适合普通用户使用。

5.激活失败如何排错
1.你的Windows/Office是否是批量VOL版本；
2.是否以管理员权限运行cmd命令提示符；
方法1:点开开始菜单，在搜索框中输入“cmd”，在搜索结果中，对着命令提示符程序，单击鼠标右键，菜单中点击选择“以管理员身份运行”；
方法2:点开开始菜单，再点击“所有应用”（Win7为所有程序），在“Windows系统”（Win7为附件），找到并右键单击，菜单中选择“以管理员身份运行”；
3.你的Windows/Office是否修改过/未安装GVLK KEY ；
4.检查你的网络连接；
5.本地的解析不对或网络问题；
6.根据出错代码自己搜索出错原因；
https://learn.microsoft.com/zh-cn/windows-server/get-started/activation-error-codes
https://answers.microsoft.com/zh-hans/windows/forum
0x80070005错误一般是你没用管理员权限运行cmd；
7.部分服务器类操作系统（如 数据中心版操作系统 Windows Server 2019 Datacenter）激活前需要先开放防火墙（开启ICMP回显 即打开ping）；
命令提示符(管理员)执行命令：netsh firewall set icmpsetting 8
8.部分idc商家的服务器操作系统会遇到无法使用外网KMS激活的问题，可以尝试更换安装镜像，或者联系idc客服为你激活。
9.本文中提到的所有命令应该在“cmd命令提示符”中执行，而非“Windows PowerShell”。当在“Windows PowerShell”中执行时，需要把“&&”替换为“;”。

#检测KMS激活服务器运行状态
下载 vlmcs.exe 到C盘根目录后cmd执行以下命令：
1.查看运行信息
C:\vlmcs.exe -v kms.v0v.bid
2.查看可激活版本
C:\vlmcs.exe -x kms.v0v.bid
3.查看帮助
C:\vlmcs.exe -h kms.v0v.bid
4.Windows11/10激活测试
C:\vlmcs.exe -l 1 kms.v0v.bid

#卸载 Windows KMS 激活
打开命令提示符(管理员) 逐行执行以下命令
slmgr /upk
slmgr /ckms
slmgr /rearm
然后重启电脑

#卸载 Office KMS 激活
1.打开命令提示符(管理员)进入 Office OSPP.VBS目录，执行以下命令查询激活密钥后五位（可能是多个）
cscript ospp.vbs /dstatus
2.继续执行以下命令
cscript ospp.vbs /unpkey:密钥后五位
cscript ospp.vbs /remhst
cscript ospp.vbs /rearm

6.批处理 BAT 一键工具脚本（解压密码：https://v0v.bid）
如果你使用命令提示符激活有困难，或者你是电脑技术员，本站同时提供了开源绿色的BAT便捷脚本。

#KMS激活服务器检测脚本 点击下载
#技术员KMS便捷脚本 点击下载
#便捷KMS一键激活脚本 点击下载
#Office全系列RTL版转换VOL版（包括Office365/Microsoft365家庭版/个人版/学生版）点击下载

[脚本问题反馈]  点我反馈
7.如何分享企业内网正版KMS服务器供外网使用
步骤并不繁琐，参照以下文章，此处不再详述。

https://blog.csdn.net/gsls200808/article/details/72773249
https://blog.csdn.net/gsls200808/article/details/50364104
https://blog.csdn.net/gsls200808/article/details/50357921

注意，此行为有可能因违反你企业与微软所签订的协议而触犯法律。

8.使用安卓手机自建KMS激活服务器（安卓手机 无需 Root）
1.下载并安装安卓版KMS激活服务器软件 点击下载
2.确保手机与需要激活的电脑连接同一 WIFI 网络(或在同一局域网内)，启动软件
3.点击[启动服务器]，查看软件内显示的[IP地址]
4.使用如下代码即可激活你手机所在局域网内的所有Windows系统和Office套件(注意替换为自己的IP地址)

Windows 命令提示符(管理员)：
slmgr /skms 192.168.1.XXX && slmgr /ato

Office 命令提示符(管理员)进入Office OSPP.VBS目录后执行：
cscript ospp.vbs /sethst:192.168.1.XXX && cscript ospp.vbs /act

是不是很酷呢！如果你懂得内网穿透或者动态解析(需开放1688端口)，你的手机同样可以为全球提供 KMS激活服务。
另外，在没有 WIFI 的情况下，可以在软件设置内使用 WIFI热点、USB系绳 等方式提供 KMS激活服务。

事实上，只要电脑安装的系统是VOL版(即系统自带 GVLK Key)，局域网内的所有电脑，系统安装完后会自动搜索局域网内本地KMS激活服务器并自动激活（之前已安装未激活的系统会在2小时内陆续自动激活），无需任何操作。

Linux / Windows 系统自建KMS激活服务器请访问：https://github.com/dylanbai8/kmspro

如果你熟悉刷固件，还可以把家里的智能路由器刷成梅林固件或lede或openwrt或老毛子等，这些路由器固件里面都自带KMS主机插件，一劳永逸，非常方便。

另外需注意，你按照教程使用开源或公开软件自行搭建的（如使用安卓手机搭建的）是一个伪造的未经授权的KMS激活服务器，在法律允许范围内仅供技术研究学习交流。切勿在大型企业内使用，可能会被微软起诉。

再次提示：任何使用和搭建伪造的未经授权的KMS激活服务器，都有可能违反微软相关条款或者你所在国家的相关法律。

以上所述的步骤、教程、代码、软件（安卓软件、Windows软件、以及Linux软件）来自以下文章和开源项目，文章内所涉及到的任何软件版权和责任归原作者所有。
https://github.com/Wind4/vlmcsd
https://github.com/ThunderEX/py-kms
https://forums.mydigitallife.net/members/hotbird64.333466/
https://forums.mydigitallife.net/members/pantagruel.5805/

KMS 激活的安全性：
使用批量授权（KMS或MAK）激活的系统，系统更新页有可能会提示“某些设置由你的组织来管理”。这是因为批量授权本身就是针对企业的，“组织”可以集中管理企业内的电脑允许安装哪些补丁和不安装哪些补丁。在一些特殊行业，防止企业员工错误升级，导致工业软件出现兼容问题。这属正常现象，无需恐慌。一般公网共享的KMS主机不会有阻止更新，且可以通过修改注册表或策略组解除此限制。（注意，开启家庭组、使用精简版系统、错误的系统设置也可能导致更新页面出现此提示）

首先你要明白，KMS协议并不是为盗版设计的，也不是黑客大神开发的。而伪造的KMS激活服务器（KMS模拟器）只可能有比正版KMS激活服务器更少的权限，而不是更多。

网络上的很多本机自激活类KMS激活软件（上文有介绍）在传播过程中被恶意内置绑定病毒、后门、挖矿脚本等。但KMS激活本身是安全的。
建议使用本站推荐的一句命激活方式。

由于某些无良公众号及自媒体，许多人都以为使用网上公开的KMS服务激活系统会导致自己的电脑被别人控制。事实并不是这样的。
KMS服务是微软针对大型企业设计的激活系统，因为当一个公司拥有数千台计算机的时候，一台台手动输入密钥显然不是计算机管理员该做的事情。

使用KMS激活就像你访问百度网站搜索一个关键词一样，只不过过程变成了“计算机向KMS激活服务器提交一个激活申请，KMS主机核实后确认激活。”，这是一个单向的系统，就像百度网站不可能有权限控制你的电脑。（这也是KMS激活服务器能够被伪造的关键所在，大概原理就像通过DNS劫持伪造了一个百度网站）。

你使用的每一句激活命令都是由微软官方提供、官方可查询的。据微零微求证，KMS激活服务器管理员除了可以限制部分补丁更新、获取系统详细版本号、获取IP地址、开启和关闭服务器的权限外，并没有拥有其它任何权限的可能，甚至不能踢出或者拉黑某台电脑激活。（详见微软官方文档）。

百度搜索“正版软件管理与服务平台”你会发现，很多大学都是使用KMS为教职工、学生的电脑正版授权的。

你可以试想一下，KMS服务原本是微软为大型企业和机构设计的，如果企业电脑管理员（你的老板？校长？）可以远程控制所有员工的电脑？盗取文件？格式化系统？那岂不是太荒唐。

批量激活管理工具 (VAMT) 技术参考：
https://learn.microsoft.com/zh-cn/windows/deployment/volume-activation/volume-activation-management-tool
这是微软官方KMS管理工具vamt的技术文档，所有权限都写在这里。有能力的朋友可以自行考证。KMS模拟器的源代码开源地址在下文，此处不再复述。

KMS 激活的“黑”历史（废话连篇）：
微软从 WINXP 时代开始推行激活政策，本质上就是验证你的 CD-KEY 是不是正版的 KEY。但是某些组织，例如学校和大型公司，会一次购买几千或者几万份产品授权，这种授权被称为“批量授权”。如果每一份授权都要有对应的 CD-KEY，显然难以管理。针对这种批量授权的客户，微软一般会推出专用的“大客户版本”。这种版本只要使用特定的序列号安装，就完全不需要激活，泄露出去，也就成为网上那些“免激活”的系统 ISO。

这种“免激活”系统直接造成了 XP 的盗版之风根本停不下来，即使是后来出了 WGA 补丁也无能为力。为了打击盗版，到了 vista 时代，微软针对这种购买“批量授权”的大客户采取了新的管理方式。购买“批量授权”的企业，必须在企业内网架设一个KMS激活服务器（官方称为KMS主机），使用 KMS 激活了产品的电脑，会周期性连接到KMS激活服务器进行续期操作。要是你连续 180天 都连不上KMS激活服务器，就会判定该电脑“已离职”，你的电脑系统就会愉快的回到未激活的状态。

但是好景不长，KMS激活服务器的工作原理很快被某些大神研究出来，于是，写出了模拟 KMS 服务端的程序，现在公网上有很多提供 KMS 服务的服务器，只要你能跟这些服务器保持周期性的连接，你就可以用它们激活微软产品，并且保持永久激活。KMS模拟器（伪造的KMS激活服务器）更像是一个“伪造的清华大学”用来给你颁发“伪造的清华大学文凭证书”。与此同时，一些学校、大型企业（机构）经微软购买授权合法持有的内网KMS激活服务器，也被通过技术手段（主动的、或者内部人员私下的）突破内网限制被发布到了公网上，或通过VPN接入到企业内网（校园网）完成正版激活，各种手段层出不穷。

缺点1：由于各种未知原因，你所使用的KMS激活服务器有可能随时会停机。当该服务器停机超过180天未恢复时，基于该服务器激活的所有操作系统和Office都会因无法激活续订而恢复到未激活状态。此时，你只需要百度寻找另一个KMS服务器，重新激活即可。

缺点2：正常情况下，你的电脑会每隔7天自动进行一次激活续订尝试，将激活有效期间隔重置为180天，无需进行任何操作自动保持永久激活状态。当你的电脑超过180天未连接互联网时，该电脑的操作系统或Office会因无法激活续订而恢复到未激活状态。此时，你只需要将电脑重新连接互联网并保持2小时以上即可，或者连网后重新执行激活命令。

一些知名KMS模拟器的官方发布网址：

提示：本机自激活安装类KMS激活软件，容易在系统升级中被查杀失效，且在软件传播过程中极易被捆绑植入后门、病毒，不推荐尝试。

Windows Loader
https://forums.mydigitallife.net/threads/windows-loader-download.58464/

KMS_VL_ALL
https://forums.mydigitallife.net/threads/kms_vl_all-online-offline-kms-activator.63471/

KMSpico
https://forums.mydigitallife.net/threads/kmspico-official-thread.65739/

vlmcsd和py-kms
https://forums.mydigitallife.net/threads/emulated-kms-servers-on-non-windows-platforms.50234/

Microsoft Toolkit
https://forums.mydigitallife.net/threads/microsoft-toolkit-official-kms-solution-for-microsoft-products.28669/

KMSAuto
http://forum.ru-board.com/topic.cgi?amp&forum=2&topic=5328

HEU_KMS
http://sphrbeu2012.blog.163.com/
http://www.heu8.com/



附1：Windows 的 KMS 激活密钥（Product GVLK）
https://learn.microsoft.com/zh-cn/windows-server/get-started/kms-client-activation-keys
Windows Server 2022（LTSC 版本）
Windows Server 2022 Datacenter
WX4NM-KYWYW-QJJR4-XV3QB-6VM33

Windows Server 2022 Standard
VDYBN-27WPP-V4HQT-9VMD4-VMK7H

Windows Server 2019（LTSC 版本）
Windows Server 2019 Datacenter
WMDGN-G9PQG-XVVXX-R3X43-63DFG

Windows Server 2019 Standard
N69G4-B89J2-4G8F4-WWYCC-J464C

Windows Server 2019 Essentials
WVDHN-86M7X-466P6-VHXV7-YY726

Windows Server 2016（LTSC 版本）
Windows Server 2016 Datacenter
CB7KF-BWN84-R7R2Y-793K2-8XDDG

Windows Server 2016 Standard
WC2BQ-8NRM3-FDDYY-2BFGV-KHKQY

Windows Server 2016 Essentials
JCKRF-N37P4-C2D82-9YXRT-4M63B

Windows Server 版本 20H2、2004、1909、1903 和 1809
Windows Server Datacenter
6NMRW-2C8FM-D24W7-TQWMY-CWH2D

Windows Server Standard
N2KJX-J94YW-TQVFB-DG9YT-724CC

Windows Server 版本 1803
Windows Server Datacenter
2HXDN-KRXHB-GPYC7-YCKFJ-7FVDG

Windows Server Standard
PTXN8-JFHJM-4WC78-MPCBR-9W4KR

Windows Server 版本 1709
Windows Server Datacenter
6Y6KB-N82V8-D8CQV-23MJW-BWTG6

Windows Server Standard
DPCNP-XQFKJ-BJF7R-FRC8D-GF6G4

Windows 10 / Windows 11
Windows 10/11 专业版
W269N-WFGWX-YVC9B-4J6C9-T83GX

Windows 10/11 专业版 N
MH37W-N47XK-V7XM9-C7227-GCQG9

Windows 10/11 专业工作站版
NRG8B-VKK3Q-CXVCJ-9G2XF-6Q84J

Windows 10/11 专业工作站版 N
9FNHH-K3HBT-3W4TD-6383H-6XYWF

Windows 10/11 专业教育版
6TP4R-GNPTD-KYYHQ-7B7DP-J447Y

Windows 10/11 专业教育版 N
YVWGF-BXNMC-HTQYQ-CPQ99-66QFC

Windows 10/11 教育版
NW6C2-QMPVW-D7KKK-3GKT6-VCFB2

Windows 10/11 教育版 N
2WH4N-8QGBV-H22JP-CT43Q-MDWWJ

Windows 10/11 企业版
NPPR9-FWDCX-D2C8J-H872K-2YT43

Windows 10/11 企业版 N
DPH2V-TTNVB-4X9Q3-TJR4H-KHJW4

Windows 10/11 企业版 G
YYVX9-NTFWV-6MDM3-9PT4T-4M68B

Windows 10/11 企业版 G N
44RPN-FTY23-9VTTB-MP9BX-T84FV

Windows 10 LTSC 2019/2021
Windows 10 企业版 LTSC 2019/2021
M7XTQ-FN8P6-TTKYV-9D4CC-J462D

Windows 10 企业版 N LTSC 2019/2021
92NFX-8DJQP-P6BBQ-THF9C-7CG2H

Windows 10 LTSB 2016
Windows 10 企业版 LTSB 2016
DCPHK-NFMTC-H88MJ-PFHPY-QJ4BJ

Windows 10 企业版 N LTSB 2016
QFFDN-GRT3P-VKWWX-X7T3R-8B639

Windows 10 LTSB 2015
Windows 10 企业版 2015 LTSB
WNMTR-4C88C-JK8YV-HQ7T2-76DF9

Windows 10 企业版 2015 LTSB N
2F77B-TNFGY-69QQF-B8YKP-D69TJ

Windows Server 2012 R2
Windows Server 2012 R2 Server Standard
D2N9P-3P6X9-2R39C-7RTCD-MDVJX

Windows Server 2012 R2 Datacenter
W3GGN-FT8W3-Y4M27-J84CP-Q3VJ9

Windows Server 2012 R2 Essentials
KNC87-3J2TX-XB4WP-VCPJV-M4FWM

Windows Server 2012
Windows Server 2012
BN3D2-R7TKB-3YPBD-8DRP2-27GG4

Windows Server 2012 N
8N2M2-HWPGY-7PGT9-HGDD8-GVGGY

Windows Server 2012 单语言版
2WN2H-YGCQR-KFX6K-CD6TF-84YXQ

Windows Server 2012 特定国家/地区版
4K36P-JN4VD-GDC6V-KDT89-DYFKP

Windows Server 2012 Server 标准版
XC9B7-NBPP2-83J2H-RHMBY-92BT4

Windows Server 2012 MultiPoint 标准版
HM7DN-YVMH3-46JC3-XYTG7-CYQJJ

Windows Server 2012 MultiPoint 高级版
XNH6W-2V9GX-RGJ4K-Y8X6F-QGJ2G

Windows Server 2012 Datacenter
48HP8-DN98B-MYWDG-T2DCC-8W83P

Windows Server 2008 R2
Windows Server 2008 R2 Web 版
6TPJF-RBVHG-WBW2R-86QPH-6RTM4

Windows Server 2008 R2 HPC 版
TT8MH-CG224-D3D7Q-498W2-9QCTX

Windows Server 2008 R2 标准版
YC6KT-GKW9T-YTKYR-T4X34-R7VHC

Windows Server 2008 R2 企业版
489J6-VHDMP-X63PK-3K798-CPX3Y

Windows Server 2008 R2 数据中心版
74YFP-3QFB3-KQT8W-PMXWJ-7M648

面向基于 Itanium 系统的 Windows Server 2008 R2
GT63C-RJFQ3-4GMB6-BRFB9-CB83V

Windows Server 2008
Windows Web Server 2008
WYR28-R7TFJ-3X2YQ-YCY4H-M249D

Windows Server 2008 标准版
TM24T-X9RMF-VWXK6-X8JC9-BFGM2

不带 Hyper-V 的 Windows Server 2008 标准版
W7VD6-7JFBR-RX26B-YKQ3Y-6FFFJ

Windows Server 2008 企业版
YQGMW-MPWTJ-34KDK-48M3W-X4Q6V

不带 Hyper-V 的 Windows Server 2008 企业版
39BXF-X8Q23-P2WWT-38T2F-G3FPG

Windows Server 2008 HPC
RCTX3-KWVHP-BR6TB-RB6DM-6X7HP

Windows Server 2008 Datacenter
7M67G-PC374-GR742-YH8V4-TCBY3

不带 Hyper-V 的 Windows Server 2008 数据中心版
22XQ2-VRXRG-P8D42-K34TD-G3QQC

面向基于 Itanium 系统的 Windows Server 2008
4DWFP-JF3DJ-B7DTH-78FJB-PDRHK

Windows 8.1
Windows 8.1 专业版
GCRJD-8NW9H-F2CDX-CCM8D-9D6T9

Windows 8.1 专业版 N
HMCNV-VVBFX-7HMBH-CTY9B-B4FXY

Windows 8.1 企业版
MHF9N-XY6XB-WVXMC-BTDCT-MKKG7

Windows 8.1 企业版 N
TT4HM-HN7YT-62K67-RGRQJ-JFFXW

Windows 8
Windows 8 专业版
NG4HW-VH26C-733KW-K6F98-J8CK4

Windows 8 专业版 N
XCVCF-2NXM9-723PB-MHCB7-2RYQQ

Windows 8 企业版
32JNW-9KQ84-P47T8-D8GGY-CWCK7

Windows 8 企业版 N
JMNMF-RHW7P-DMY6X-RF3DR-X2BQT

Windows 7
Windows 7 专业版
FJ82H-XT6CR-J8D7P-XQJJ2-GPDD4

Windows 7 专业版 N
MRPKT-YTG23-K7D7T-X2JMM-QY7MG

Windows 7 专业版 E
W82YF-2Q76Y-63HXB-FGJG9-GF7QX

Windows 7 企业版
33PXH-7Y6KF-2VJC9-XBBR8-HVTHH

Windows 7 企业版 N
YDRBP-3D83W-TY26F-D46B2-XCKRJ

Windows 7 企业版 E
C29WB-22CC8-VJ326-GHFJW-H9DH4

附2：Office 的 KMS 激活密钥（Product GVLK）
https://learn.microsoft.com/zh-cn/DeployOffice/vlactivation/gvlks
Office LTSC 2021 的 Product GVLK
Office LTSC 专业增强版 2021
FXYTK-NJJ8C-GB6DW-3DYQT-6F7TH

Office LTSC 标准版 2021
KDX7X-BNVR8-TXXGX-4Q7Y8-78VT3

Project Professional 2021
FTNWT-C6WBT-8HMGF-K9PRX-QV9H8

Project Standard 2021
J2JDC-NJCYY-9RGQ4-YXWMH-T3D4T

Visio LTSC Professional 2021
KNH8D-FGHT4-T8RK3-CTDYJ-K2HT4

Visio LTSC Standard 2021
MJVNY-BYWPY-CWV6J-2RKRT-4M8QG

Access LTSC 2021
WM8YG-YNGDD-4JHDC-PG3F4-FC4T4

Excel LTSC 2021
NWG3X-87C9K-TC7YY-BC2G7-G6RVC

Outlook LTSC 2021
C9FM6-3N72F-HFJXB-TM3V9-T86R9

PowerPoint LTSC 2021
TY7XF-NFRBR-KJ44C-G83KF-GX27K

Publisher LTSC 2021
2MW9D-N4BXM-9VBPG-Q7W6M-KFBGQ

Skype for Business LTSC 2021
HWCXN-K3WBT-WJBKY-R8BD9-XK29P

Word LTSC 2021
TN8H9-M34D3-Y64V9-TR72V-X79KV

Office 2019 的 Product GVLK
Office套件
Office 专业增强版 2019
NMMKJ-6RK4F-KMJVX-8D9MJ-6MWKP

Office 标准版 2019
6NWWJ-YQWMR-QKGCB-6TMB3-9D9HK

Office独立产品
Project 专业版 2019
B4NPR-3FKK7-T2MBV-FRQ4W-PKD2B

Project 标准版 2019
C4F7P-NCP8C-6CQPT-MQHV9-JXD2M

Visio 专业版 2019
9BGNQ-K37YR-RQHF2-38RQ3-7VCBB

Visio 标准版 2019
7TQNQ-K3YQQ-3PFH7-CCPPM-X4VQ2

Access 2019
9N9PT-27V4Y-VJ2PD-YXFMF-YTFQT

Excel 2019
TMJWT-YYNMB-3BKTF-644FC-RVXBD

Outlook 2019
7HD7K-N4PVK-BHBCQ-YWQRW-XW4VK

PowerPoint 2019
RRNCX-C64HY-W2MM7-MCH9G-TJHMQ

Publisher 2019
G2KWX-3NW6P-PY93R-JXK2T-C9Y9V

Skype for Business 2019
NCJ33-JHBBY-HTK98-MYCV8-HMKHJ

Word 2019
PBX3G-NWMT6-Q7XBW-PYJGG-WXD33

Office 2016 的 Product GVLK
Office套件
Office 专业增强版 2016（Office365/Microsoft365）
XQNVK-8JYDB-WJ9W3-YJ8YR-WFG99

Office Standard 2016
JNRGM-WHDWX-FJJG3-K47QV-DRTFM

Office独立产品
Project Professional 2016
YG9NW-3K39V-2T3HJ-93F3Q-G83KT

Project Standard 2016
GNFHQ-F6YQM-KQDGJ-327XX-KQBVC

Visio Professional 2016
PD3PC-RHNGV-FXJ29-8JK7D-RJRJK

Visio Standard 2016
7WHWN-4T7MP-G96JF-G33KR-W8GF4

Access 2016
GNH9Y-D2J4T-FJHGG-QRVH7-QPFDW

Excel 2016
9C2PK-NWTVB-JMPW8-BFT28-7FTBF

OneNote 2016
DR92N-9HTF2-97XKM-XW2WJ-XW3J6

Outlook 2016
R69KK-NTPKF-7M3Q4-QYBHW-6MT9B

PowerPoint 2016
J7MQP-HNJ4Y-WJ7YM-PFYGF-BY6C6

Publisher 2016
F47MM-N3XJP-TQXJ9-BP99D-8837K

Skype for Business 2016
869NQ-FJ69K-466HW-QYCP2-DDBV6

Word 2016
WXY84-JN2Q9-RBCCQ-3Q3J3-3PFJ6

Office 2013 的 Product GVLK
Office套件
Office 2013 Professional Plus
YC7DK-G2NP3-2QQC3-J6H88-GVGXT

Office 2013 Standard
KBKQT-2NMXY-JJWGP-M62JB-92CD4

Office独立产品
Project 2013 Professional
FN8TT-7WMH6-2D4X9-M337T-2342K

Project 2013 Standard
6NTH3-CW976-3G3Y2-JK3TX-8QHTT

Visio 2013 Professional
C2FG9-N6J68-H8BTJ-BW3QX-RM3B3

Visio 2013 Standard
J484Y-4NKBF-W2HMG-DBMJC-PGWR7

Access 2013
NG2JY-H4JBT-HQXYP-78QH9-4JM2D

Excel 2013
VGPNG-Y7HQW-9RHP7-TKPV3-BG7GB

InfoPath 2013
DKT8B-N7VXH-D963P-Q4PHY-F8894

Lync 2013
2MG3G-3BNTT-3MFW9-KDQW3-TCK7R

OneNote 2013
TGN6P-8MMBC-37P2F-XHXXK-P34VW

Outlook 2013
QPN8Q-BJBTJ-334K3-93TGY-2PMBT

PowerPoint 2013
4NT99-8RJFH-Q2VDH-KYG2C-4RD4F

Publisher 2013
PN2WF-29XG2-T9HJ7-JQPJR-FCXK4

Word 2013
6Q7VD-NX8JD-WJ2VH-88V73-4GBJ7

Office 2010 的 Product GVLK
Office套件
Office Professional Plus 2010
VYBBJ-TRJPB-QFQRF-QFT4D-H3GVB

Office Standard 2010
V7QKV-4XVVR-XYV4D-F7DFM-8R6BM

Office Home and Business 2010
D6QFG-VBYP2-XQHM7-J97RH-VVRCK

Office独立产品
Access 2010
V7Y44-9T38C-R2VJK-666HK-T7DDX

Excel 2010
H62QG-HXVKF-PP4HP-66KMR-CW9BM

SharePoint Workspace 2010
QYYW6-QP4CB-MBV6G-HYMCJ-4T3J4

InfoPath 2010
K96W8-67RPQ-62T9Y-J8FQJ-BT37T

OneNote 2010
Q4Y4M-RHWJM-PY37F-MTKWH-D3XHX

Outlook 2010
7YDC2-CWM8M-RRTJC-8MDVC-X3DWQ

PowerPoint 2010
RC8FX-88JRY-3PF7C-X8P67-P4VTT

Project Professional 2010
YGX6F-PGV49-PGW3J-9BTGG-VHKC6

Project Standard 2010
4HP3K-88W3F-W2K3D-6677X-F9PGB

Publisher 2010
BFK7F-9MYHM-V68C7-DRQ66-83YTP

Word 2010
HVHB3-C6FV7-KQX9W-YQG79-CRY7T

Visio Premium 2010
D9DWC-HPYVV-JGF4P-BTWQB-WX8BJ

Visio Professional 2010
7MCW8-VRQVK-G677T-PDJCM-Q8TCP

Visio Standard 2010
767HD-QGMWX-8QTDB-9G3R2-KHFGJ

附3：Windows原版镜像 下载渠道
1>.微软官方 预览版（需要注册Windows预览体验计划成员）
https://www.microsoft.com/en-us/software-download/windowsinsiderpreviewiso

2>.微软官方 零售版（需要使用移动设备访问）
https://www.microsoft.com/zh-cn/software-download/

3>.非官方 第三方镜像库
[国产精品]https://next.itellyou.cn
https://tb.rg-adguard.net/public.php?lang=zh-CN
https://uup.rg-adguard.net
https://files.rg-adguard.net/version/f0bd8307-d897-ef77-dbd6-216fefbe94c5
https://www.heidoc.net/joomla/technology-science/microsoft/67-microsoft-windows-and-office-iso-download-tool

4>.微软官方 批量版
购买MSDN订阅：
https://visualstudio.microsoft.com/zh-hans/msdn-platforms/
购买VLSC批量许可：
https://www.microsoft.com/licensing/servicecenter/default.aspx

5>.常用版本

[最新11] Windows11 原版镜像（版本 22H2_April_2023 发布时间 2023-04-18）
ed2k://|file|zh-cn_windows_11_business_editions_version_22h2_updated_april_2023_x64_dvd_7f3f319b.iso|5699682304|7226C84203584BDC33A1E8694C6C570E|/

[最终10] Windows10 原版镜像（版本 22H2_April_2023 发布时间 2023-04-18）
ed2k://|file|zh-cn_windows_10_business_editions_version_22h2_updated_april_2023_x64_dvd_c03ed5aa.iso|5971707904|EED818987B8BC17F6DDC201E977A4F95|/

[最新ARM] Windows10 原版镜像（版本 22H2_Jan_2023 发布时间 2023-01-17）
ed2k://|file|SW_DVD9_Win_Pro_10_22H2.3_64ARM_ChnSimp_Pro_Ent_EDU_N_MLF_X23-36949.ISO|5333610496|401601D6C86121111B85019BAB8CD79D|/

[最新LTSC] Windows 10 Enterprise LTSC 2021 (x64) 原版镜像
ed2k://|file|SW_DVD9_WIN_ENT_LTSC_2021_64BIT_ChnSimp_MLF_X22-84402.ISO|5044211712|1555B7DCA052B5958EE68DB58A42408D|/

[推荐LTSC] Windows 10 Enterprise LTSC 2019 (x64) 原版镜像
ed2k://|file|cn_windows_10_enterprise_ltsc_2019_x64_dvd_9c09ff24.iso|4478906368|E7C526499308841A4A6D116C857DB669|/

[经典] Windows 10 Enterprise LTSB 2016 (x64) 原版镜像
ed2k://|file|cn_windows_10_enterprise_2016_ltsb_x64_dvd_9060409.iso|3821895680|FF17FF2D5919E3A560151BBC11C399D1|/

Windows10 神州网信政府版（版本 V2022-L 发布时间 2022-01-28）
https://download.cmgos.com/oem/login SN:0602000000001

Windows10 神州网信政府版（版本 V2020-L 发布时间 2020-01-10）
ed2k://|file|CMGE_V2020-L.1207.iso|4736782336|8F2FC33635D79963CBB0A43C4A916200|/

Windows7 原版镜像 专业批量版
ed2k://|file|cn_windows_7_professional_with_sp1_vl_build_x64_dvd_u_677816.iso|3266004992|5A52F4CCEFA71797D58389B397038B2F|/

Windows7 原版镜像 企业版
ed2k://|file|cn_windows_7_enterprise_with_sp1_x64_dvd_u_677685.iso|3265574912|E9DB2607EA3B3540F3FE2E388F8C53C4|/

附4：Office原版镜像 下载渠道
1>.微软官方 批量版（Office部署工具）
https://config.office.com/deploymentsettings
https://learn.microsoft.com/zh-cn/deployoffice/overview-office-deployment-tool
[补丁库]https://www.catalog.update.microsoft.com

2>.微软官方 零售版
https://www.microsoft.com/zh-cn/microsoft-365/try

3>.非官方 Office Tool Plus 部署工具
[国产精品]https://otp.landian.vip/zh-cn/

4>.非官方 第三方镜像库
https://msdn.itellyou.cn
[微软直链]https://tb.rg-adguard.net/public.php?lang=zh-CN
https://files.rg-adguard.net/version/5f2ad9c6-e111-76e8-06d1-56d44c136bae
https://www.heidoc.net/joomla/technology-science/microsoft/67-microsoft-windows-and-office-iso-download-tool

5>.常用版本

Office 365 商业版(零售版)
http://officecdn.microsoft.com/db/492350F6-3A01-4F97-B9C0-C7C6DDF67D60/media/zh-cn/O365BusinessRetail.img
http://officecdn.microsoft.com/pr/492350F6-3A01-4F97-B9C0-C7C6DDF67D60/media/zh-cn/O365BusinessRetail.img

Office2021 专业增强版(零售版)
http://officecdn.microsoft.com/db/492350F6-3A01-4F97-B9C0-C7C6DDF67D60/media/zh-cn/ProPlus2021Retail.img
http://officecdn.microsoft.com/pr/492350f6-3a01-4f97-b9c0-c7c6ddf67d60/media/zh-cn/ProPlus2021Retail.img

Office2019 专业增强版(零售版)
http://officecdn.microsoft.com/db/492350f6-3a01-4f97-b9c0-c7c6ddf67d60/media/zh-cn/ProPlus2019Retail.img
http://officecdn.microsoft.com/pr/492350f6-3a01-4f97-b9c0-c7c6ddf67d60/media/zh-cn/ProPlus2019Retail.img

Office2019 原版镜像
ed2k://|file|cn_office_professional_plus_2019_x86_x64_dvd_5e5be643.iso|3775004672|1E4FFA5240F21F60DC027F73F1C62FF4|/

Office2016 原版镜像
ed2k://|file|cn_office_professional_plus_2016_x86_x64_dvd_6969182.iso|2588266496|27EEA4FE4BB13CD0ECCDFC24167F9E01|/

Office2013 原版镜像
ed2k://|file|SW_DVD5_Office_Professional_Plus_2013_64Bit_ChnSimp_MLF_X18-55285.ISO|958879744|678EF5DD83F825E97FB710996E0BA597|/

Office2010 原版镜像
ed2k://|file|SW_DVD5_Office_Professional_Plus_2010w_SP1_64Bit_ChnSimp_CORE_MLF_X17-76742.iso|1612515328|032320121E0EE36D8F0C32EC89CA0AB9|/

免责声明（联系我们）：

1.本站所有展示的以及涉及到的包括但不限于文字、段落、教程、代码、脚本、软件等，均来自互联网文档以及微软官方文档收集整理。由于收集过程长且杂碎，未能一一标注出处。如果侵犯到了您的权益，请联系我们删除。

2.本站展示的所有 Windows/Office Product GVLK、以及激活步骤和代码全部来自微软官方公示文档。

3.本站展示的所有 KMS 主机（即 KMS 激活服务器、激活线路、备用线路）全部来自互联网或热心企业（机构、个人）匿名投稿。本站不持有、不搭建、不提供、不维护任何KMS主机以及激活服务，其权力和责任归相关服务器持有者所有。

本站没有（且没有技术能力以及义务）对这些KMS主机进行技术鉴别其是“非法伪造的未经授权的KMS激活服务器”还是“公益共享的合法持有的KMS激活服务器”或是“盗用他人企业（机构）泄露的KMS激活服务器”。本站默认这些KMS主机都是“KMS主机合法持有者主动公益共享的KMS激活服务器”。任何人，如若发现本站展示的或收集的KMS激活线路为非法伪造未经授权的或是盗用泄露他人企业（机构）的以及其它情况致使或涉嫌侵犯到任何第三方正当权益的请立即联系我们删除，本站将竭尽全力协助维护相关企业或个人的正当权益。

本站为纯公益型技术学习交流网站，并未经营任何盈利项目。本站分析整理了微软Windows和Office系列产品使用KMS激活的步骤、代码、原理，KMS激活的前世今生，互联网上存在的伪造KMS激活服务器的原理与现状。

本网站所提供的一切信息只供技术学习交流参考之用。任何单位或个人未经许可，不得以任何目的任何形式擅自传播本站以及由本站展示、下载、生成的任何文字、文件或链接，不得用于除技术学习交流以外的任何其它用途和目的。

在法律允许的范围内，本网站在此声明，不承担用户或任何人士就使用或未能使用本网站所提供的信息或任何链接或项目或点击本站所展示的任何广告所引致的任何直接、间接、附带、从属、特殊、惩罚性或惩戒性的损害、损失赔偿，不承担因收集、展示KMS主机（包括“非法伪造的未经授权的KMS激活服务器”、“公益共享的合法持有的KMS激活服务器”、“盗用他人企业（机构）泄露的KMS激活服务器”）对任何企业或个人造成直接或间接的损害、损失的赔偿和任何责任。受损企业（机构）或个人应及时发现并通知本站进行删除、停止展示，我们将竭尽全力协助维护相关企业或个人的正当权益。

本网站所提供的信息，若在任何司法管辖地区供任何人士使用或分发给任何人士时会违反该司法管辖地区的法律或条例的规定或会导致本网站受限于该司法管辖地区内的任何监管规定时，则该等信息不宜在该司法管辖地区供该等任何人士使用或分发给该等任何人士。用户须自行保证不会受限于任何限制或禁止用户使用或分发本网站所提供信息的当地的规定。

凡以任何方式登陆本网站或直接、间接使用本网站（以及本站所有展示的以及涉及到的包括但不限于文字、段落、教程、代码、脚本、软件等）者，视为自愿接受本网站声明的约束。

请您注意，使用本站所展示的KMS主机来激活Windows系统或者Office套件，有可能得到的是一个盗版产品，虽然与正版产品并没有丝毫差别。在此过程中，您可能无意中使用了伪造的未经授权的KMS主机，或者无意中使用了被泄露的他人企业（机构）的KMS主机。这些行为都有可能违反KMS主机持有企业（机构）以及微软相关条款或者你所在国家（地区）的相关法律。

请您务必支持正版，Windows系统 微软官方购买链接：https://www.microsoft.com/zh-cn/windows/get-windows-11
请您务必支持正版，Office套件 微软官方购买链接：https://www.microsoft.com/zh-cn/microsoft-365/buy/compare-all-microsoft-365-products

彩蛋一：Windows 万能修复命令
1.打开 命令提示符 (管理员)

开始菜单-搜索“cmd”-找到“命令提示符”-右键“以管理员身份运行”。

2.执行以下命令（复制命令-右键粘贴）

dism /online /cleanup-image /restorehealth && sfc /scannow

该命令会检查你的系统文件完整性以及是否与官方版本一致，并在联网的状态下还原官方源文件进行修复（执行时间很长，半小时以上，耐心等待即可）。

彩蛋二：在 Windows PowerShell 使用命令
如果在cmd执行命令报错，可以尝试使用PowerShell。

1.打开 PowerShell (管理员)

开始菜单-搜索“Power”-找到“Windows PowerShell”-右键“以管理员身份运行”。

2.执行命令（复制命令-右键粘贴）

万能激活命令
slmgr /skms kms.v0v.bid; slmgr /ato;

万能修复命令
dism /online /cleanup-image /restorehealth; sfc /scannow;

彩蛋三：如何背诵激活命令 成为“大神”
如果你经常帮助朋友安装系统，但每次都来网站复制粘贴命令，显然有损你“大神”的形象！下面跟我背诵这条命令：
slmgr 是 Software License Manager 的缩写，译为：软件许可证管理器，我们把命令分解为两行记忆。

slmgr /skms kms.v0v.bid
slmgr /ato

skms中的s是 “specify” 缩写，译为：指定kms主机
ato 可以理解为是 “自动” 的缩写。

好了，现在开始背诵：
1.使用软件许可证管理器指定kms主机为kms.v0v.bid，2.使用软件许可证管理器自动激活。
(参数使用斜杠/分割，两条命令使用&&连接。)

官方文档： https://learn.microsoft.com/zh-cn/windows-server/get-started/activation-slmgr-vbs-options
