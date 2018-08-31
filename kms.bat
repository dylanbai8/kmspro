::转载请注明 https://v0v.bid
@echo off
::获取运行路径
cd /d %~dp0


::获取管理员权限
%1 start "" mshta vbscript:createobject("shell.application").shellexecute("""%~0""","::",,"runas",1)(window.close)&exit


::配置BAT对话框样式
title --KMS便捷脚本 https://v0v.bid--
MODE con: COLS=70 lines=14
color 0a


::菜单
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

echo. %errorlevel%
if %errorlevel% == 1 goto set_1
if %errorlevel% == 2 goto set_2
if %errorlevel% == 3 goto end


::激活widows系统
:set_1
::配置KMS服务器地址
cls
echo.
echo.
echo --【请输入KMS服务器地址】
echo.
echo --默认激活服务器为：https://v0v.bid
echo.
set/p kms1=--默认直接按回车：
if not defined kms1 set kms1=kms.v0v.bid
echo.
echo --配置成功，按【任意键】继续。
pause>nul

::配置KMS激活密钥
cls
echo.
echo.
echo --【请输入KMS激活密钥】
echo.
echo --默认KMS激活密钥为：none
echo.
set/p winkey=--默认直接按回车：
if not defined winkey set winkey=none
echo.
echo --配置成功，按【任意键】继续。
pause>nul

::激活
cls
echo.
echo.
call :checkkms1
echo.
echo --正在激活，请稍后.....
		cscript //Nologo %windir%\system32\slmgr.vbs /ipk %winkey% >nul
		cscript //Nologo %windir%\system32\slmgr.vbs /skms %kms1% >nul
		cscript //Nologo %windir%\system32\slmgr.vbs /ato >nul
ping localhost -n 3 > nul
		cscript //Nologo %windir%\system32\slmgr.vbs /xpr | find /i "激活" >nul && ( echo. & echo.   ***** 操作系统 激活成功 ***** & echo. ) || ( echo. & echo.   ***** 操作系统 激活失败 ***** & echo. )
echo.
echo --操作已完成。如激活失败请访问：https://v0v.bid
pause>nul
goto begin


::检测 KMS服务器
:checkkms1
cls
echo.
echo.
echo. 正在检查激活服务器：%kms1% 请稍后.....
ping %kms1% | find /i "来自" >nul && ( goto :EOF ) || ( goto fail )


::激活office套件
:set_2
::配置KMS服务器地址
cls
echo.
echo.
echo --【请输入KMS服务器地址】
echo.
echo --默认激活服务器为：https://v0v.bid
echo.
set/p kms2=--默认直接按回车：
if not defined kms2 set kms2=kms.v0v.bid
echo.
echo --配置成功，按【任意键】继续。
pause>nul

::配置KMS激活密钥
cls
echo.
echo.
echo --【请输入KMS激活密钥】
echo.
echo --默认KMS激活密钥为：none
echo.
set/p officekey=--默认直接按回车：
if not defined officekey set officekey=none
echo.
echo --配置成功，按【任意键】继续。
pause>nul

::配置office安装目录
cls
echo.
echo.
echo --【请输入正确的office安装目录】
echo.
echo --默认为：C:\Program Files (x86)\Microsoft Office\Office16
echo.
set/p url=--默认直接按回车：
if not defined url set url=C:\Program Files (x86)\Microsoft Office\Office16
echo.
echo --配置成功，按【任意键】继续。
pause>nul

::激活
cls
echo.
echo.
call :checkkms2
echo.
echo --正在激活，请稍后.....
cd %url%
		cscript //nologo ospp.vbs /inpkey:%officekey% >nul
		cscript //nologo ospp.vbs /sethst:%kms2% >nul
ping localhost -n 3 > nul
		cscript //nologo ospp.vbs /act | find /i "successful" >nul && ( echo. & echo.   ***** 激活成功 ***** & echo. ) || ( echo. & echo.   ***** 激活失败 ***** & echo. )
echo.
echo --操作已完成。如激活失败请访问：https://v0v.bid
echo.
pause>nul
goto begin


::检测 KMS服务器
:checkkms2
cls
echo.
echo.
echo. 正在检查激活服务器：%kms2% 请稍后.....
ping %kms2% | find /i "来自" >nul && ( goto :EOF ) || ( goto fail )


::检查失败 
:fail
cls
echo.
echo.
echo.
echo.
echo.
echo.          ***** 错误：KMS激活服务器无效 *****
echo.
echo.
echo --操作已完成！请访问 https://v0v.bid 获取 最新线路
pause>nul
goto begin


::关闭脚本
:end
exit

::转载请注明 https://v0v.bid