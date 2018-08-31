::转载请注明 https://v0v.bid
@echo off


::配置BAT对话框样式
title --KMS服务器检查脚本 https://v0v.bid--
MODE con: COLS=42 lines=8
color 0a


::检测vlmcs.exe
if exist "C:\vlmcs.exe" ( goto begin ) else ( goto fail )


::菜单
:begin
cls
echo.
echo.   ------------------------------------
echo.    --[1]-- 检测自定义服务器
echo.
echo.    --[2]-- 检测 v0v.bid 官方服务器
echo.   ------------------------------------
choice /c 12 /n /m "请选择【1-2】："

echo. %errorlevel%
if %errorlevel% == 1 goto self
if %errorlevel% == 2 goto check


::检测自定义线路
:self
cls
echo.
echo.   ------------------------------------
echo.           检测自定义服务器
echo.
set/p kmsroot=请输入：
if not defined kmsroot set kmsroot=none
echo.
echo.       配置成功，按【任意键】继续。
echo.   ------------------------------------
pause>nul
cls
echo.
echo.   ------------------------------------
echo.   正在测试主线路 %kmsroot%
echo.
C:\vlmcs.exe -l 1 %kmsroot% 2>nul | find /i "successful" 1>nul 2>nul && ( echo. & echo.   ***** 该线路 可用 ***** ) || ( echo. & echo.   ***** 线路 已失效 ***** )
echo.   ------------------------------------
echo.   检测完成，按【任意键】返回菜单。
pause 1>nul 2>nul
goto begin


::检测官方线路
:check
cls
echo.
echo.   ------------------------------------
echo.   正在测试主线路 kms.v0v.bid
echo.
C:\vlmcs.exe -l 1 kms.v0v.bid 2>nul | find /i "successful" 1>nul 2>nul && ( echo. & echo.   ***** 该线路 可用 ***** ) || ( echo. & echo.   ***** 线路 已失效 ***** )
echo.   ------------------------------------
echo.   检测完成，按【任意键】继续。
pause 1>nul 2>nul

cls
echo.
echo.   ------------------------------------
echo.   正在测试主线路 k01.v0v.bid
echo.
C:\vlmcs.exe -l 1 k01.v0v.bid 2>nul | find /i "successful" 1>nul 2>nul && ( echo. & echo.   ***** 该线路 可用 ***** ) || ( echo. & echo.   ***** 线路 已失效 ***** )
echo.   ------------------------------------
echo.   检测完成，按【任意键】继续。
pause 1>nul 2>nul

cls
echo.
echo.   ------------------------------------
echo.   正在测试主线路 k02.v0v.bid
echo.
C:\vlmcs.exe -l 1 k02.v0v.bid 2>nul | find /i "successful" 1>nul 2>nul && ( echo. & echo.   ***** 该线路 可用 ***** ) || ( echo. & echo.   ***** 线路 已失效 ***** )
echo.   ------------------------------------
echo.   检测完成，按【任意键】继续。
pause 1>nul 2>nul

cls
echo.
echo.   ------------------------------------
echo.   正在测试主线路 k03.v0v.bid
echo.
C:\vlmcs.exe -l 1 k03.v0v.bid 2>nul | find /i "successful" 1>nul 2>nul && ( echo. & echo.   ***** 该线路 可用 ***** ) || ( echo. & echo.   ***** 线路 已失效 ***** )
echo.   ------------------------------------
echo.   检测完成，按【任意键】继续。
pause 1>nul 2>nul

cls
echo.
echo.   ------------------------------------
echo.   正在测试主线路 k04.v0v.bid
echo.
C:\vlmcs.exe -l 1 k04.v0v.bid 2>nul | find /i "successful" 1>nul 2>nul && ( echo. & echo.   ***** 该线路 可用 ***** ) || ( echo. & echo.   ***** 线路 已失效 ***** )
echo.   ------------------------------------
echo.   检测完成，按【任意键】继续。
pause 1>nul 2>nul

cls
echo.
echo.   ------------------------------------
echo.   正在测试主线路 k05.v0v.bid
echo.
C:\vlmcs.exe -l 1 k05.v0v.bid 2>nul | find /i "successful" 1>nul 2>nul && ( echo. & echo.   ***** 该线路 可用 ***** ) || ( echo. & echo.   ***** 线路 已失效 ***** )
echo.   ------------------------------------
echo.   检测完成，按【任意键】继续。
pause 1>nul 2>nul

cls
echo.
echo.   ------------------------------------
echo.   正在测试主线路 k06.v0v.bid
echo.
C:\vlmcs.exe -l 1 k06.v0v.bid 2>nul | find /i "successful" 1>nul 2>nul && ( echo. & echo.   ***** 该线路 可用 ***** ) || ( echo. & echo.   ***** 线路 已失效 ***** )
echo.   ------------------------------------
echo.   检测完成，按【任意键】继续。
pause 1>nul 2>nul

cls
echo.
echo.   ------------------------------------
echo.   正在测试主线路 k07.v0v.bid
echo.
C:\vlmcs.exe -l 1 k07.v0v.bid 2>nul | find /i "successful" 1>nul 2>nul && ( echo. & echo.   ***** 该线路 可用 ***** ) || ( echo. & echo.   ***** 线路 已失效 ***** )
echo.   ------------------------------------
echo.   检测完成，按【任意键】继续。
pause 1>nul 2>nul

cls
echo.
echo.   ------------------------------------
echo.   正在测试主线路 k08.v0v.bid
echo.
C:\vlmcs.exe -l 1 k08.v0v.bid 2>nul | find /i "successful" 1>nul 2>nul && ( echo. & echo.   ***** 该线路 可用 ***** ) || ( echo. & echo.   ***** 线路 已失效 ***** )
echo.   ------------------------------------
echo.   检测完成，按【任意键】继续。
pause 1>nul 2>nul

cls
echo.
echo.   ------------------------------------
echo.   正在测试主线路 k09.v0v.bid
echo.
C:\vlmcs.exe -l 1 k09.v0v.bid 2>nul | find /i "successful" 1>nul 2>nul && ( echo. & echo.   ***** 该线路 可用 ***** ) || ( echo. & echo.   ***** 线路 已失效 ***** )
echo.   ------------------------------------
echo.   检测完成，按【任意键】继续。
pause 1>nul 2>nul

cls
echo.
echo.   ------------------------------------
echo.   正在测试主线路 k10.v0v.bid
echo.
C:\vlmcs.exe -l 1 k10.v0v.bid 2>nul | find /i "successful" 1>nul 2>nul && ( echo. & echo.   ***** 该线路 可用 ***** ) || ( echo. & echo.   ***** 线路 已失效 ***** )
echo.   ------------------------------------
echo.   检测完成，按【任意键】继续。
pause 1>nul 2>nul

cls
echo.
echo.   ------------------------------------
echo.   正在测试主线路 k11.v0v.bid
echo.
C:\vlmcs.exe -l 1 k11.v0v.bid 2>nul | find /i "successful" 1>nul 2>nul && ( echo. & echo.   ***** 该线路 可用 ***** ) || ( echo. & echo.   ***** 线路 已失效 ***** )
echo.   ------------------------------------
echo.   检测完成，按【任意键】继续。
pause 1>nul 2>nul

cls
echo.
echo.   ------------------------------------
echo.   正在测试主线路 k12.v0v.bid
echo.
C:\vlmcs.exe -l 1 k12.v0v.bid 2>nul | find /i "successful" 1>nul 2>nul && ( echo. & echo.   ***** 该线路 可用 ***** ) || ( echo. & echo.   ***** 线路 已失效 ***** )
echo.   ------------------------------------
echo.   检测完成，按【任意键】继续。
pause 1>nul 2>nul

cls
echo.
echo.   ------------------------------------
echo.   正在测试主线路 k13.v0v.bid
echo.
C:\vlmcs.exe -l 1 k13.v0v.bid 2>nul | find /i "successful" 1>nul 2>nul && ( echo. & echo.   ***** 该线路 可用 ***** ) || ( echo. & echo.   ***** 线路 已失效 ***** )
echo.   ------------------------------------
echo.   检测完成，按【任意键】返回菜单。
pause 1>nul 2>nul
goto begin


:fail
cls
echo.
echo.   ------------------------------------
echo.   错误：未检测到 C:\vlmcs.exe
echo.
echo.   下载地址：https://v0v.bid/vlmcs.exe
echo.   ------------------------------------
echo.   缺少文件，按【任意键】返回菜单。
pause 1>nul 2>nul
goto begin

