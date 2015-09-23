@echo off
echo Content-Type: text/html
echo.
cd c:\wamp\www\master
git status
git stash
git pull -f
cd c:\wamp\www\beta
git status
git stash
git pull -f
echo done
echo.
pause

