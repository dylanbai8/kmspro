@echo off
cd /d %~dp0

%1 start "" mshta vbscript:createobject("shell.application").shellexecute("""%~0""","::",,"runas",1)(window.close)&exit

title --KMS便捷脚本 https://v0v.bid--
MODE con: COLS=70 lines=15
color 0a


:begin
cls
echo.
echo.
echo     -- KMS 激活 widows 和 office 便捷脚本 --
echo     -- 此脚本由 https://v0v.bid  提供支持 --
echo.
echo --[1]--激活 widows 系统（Windows 7、8、10、2008、2012、2016）
echo --[2]--激活 office 软件（office 2010、2013、2016）
echo --[3]--退出脚本
echo.
echo.
choice /c 123 /n /m "请选择【1-3】："

echo %errorlevel%
if %errorlevel% == 1 goto set_1
if %errorlevel% == 2 goto set_2
if %errorlevel% == 3 goto end


::激活widows系统
:set_1
cls
echo.
echo.
echo --【请输入KMS服务器地址】
echo.
echo --默认激活服务器为 https://v0v.bid
echo.
set/p kms=--默认直接按回车：
if not defined kms set kms=kms.v0v.bid
echo.
echo --配置成功，按【任意键】开始激活。
pause>nul
echo.
echo --正在激活，请稍后。。。。
slmgr /skms %kms%
slmgr /ato
ping localhost -n 3 > nul
slmgr /dlv
echo.
echo --操作已完成。如激活失败请访问https://v0v.bid。
pause>nul
goto begin


::激活office软件
:set_2
cls
echo.
echo.
echo --【请输入KMS服务器地址】
echo.
echo --默认激活服务器为 https://v0v.bid
echo.
set/p kms=--默认直接按回车：
if not defined kms set kms=kms.v0v.bid
ping localhost -n 3 > nul
cls
echo.
echo.
echo --【请输入正确的office安装目录】
echo.
echo --默认为：C:\Program Files (x86)\Microsoft Office\Office14\
echo.
set/p url=--默认直接按回车：
if not defined url set url=C:\Program Files (x86)\Microsoft Office\Office14
echo.
echo --配置成功，按【任意键】开始激活。
pause>nul
echo.
echo --正在激活，请稍后。。。。
cd %url%
cscript ospp.vbs /sethst:%kms%
ping localhost -n 3 > nul
cscript ospp.vbs /act
echo.
echo --操作已完成。如激活失败请访问https://v0v.bid。
echo.
pause>nul
goto begin


::关闭脚本
:end
exit
