@echo off
echo Creating product thumbnail copies...
echo.

set "SOURCE=C:\Users\Sujit Singh\Desktop\BharatSpiceWorld\apps-Website-PHP\assets\images"
set "DEST=C:\Users\Sujit Singh\Desktop\BharatSpiceWorld\apps-Website-PHP\assets\images\products"

REM Copy and rename product thumbnails for homepage grid
echo Copying turmeric.jpg...
copy "%SOURCE%\turmeric.jpg" "%DEST%\turmeric.jpg" >nul 2>&1
if %errorlevel% equ 0 (echo [OK] turmeric.jpg) else (echo [FAIL] turmeric.jpg)

echo Copying red-chilli.jpg...
copy "%SOURCE%\product-red-chilli.jpg" "%DEST%\red-chilli.jpg" >nul 2>&1
if %errorlevel% equ 0 (echo [OK] red-chilli.jpg) else (echo [FAIL] red-chilli.jpg)

echo Copying black-pepper.jpg...
copy "%SOURCE%\product-black-pepper.jpg" "%DEST%\black-pepper.jpg" >nul 2>&1
if %errorlevel% equ 0 (echo [OK] black-pepper.jpg) else (echo [FAIL] black-pepper.jpg)

echo Copying coriander.jpg...
copy "%SOURCE%\product-coriander.jpg" "%DEST%\coriander.jpg" >nul 2>&1
if %errorlevel% equ 0 (echo [OK] coriander.jpg) else (echo [FAIL] coriander.jpg)

echo Copying clove.jpg...
copy "%SOURCE%\product-basmati-rice.jpg" "%DEST%\clove.jpg" >nul 2>&1
if %errorlevel% equ 0 (echo [OK] clove.jpg) else (echo [FAIL] clove.jpg)

echo Copying coconut-oil.jpg...
copy "%SOURCE%\product-coconut-oil.jpg" "%DEST%\coconut-oil.jpg" >nul 2>&1
if %errorlevel% equ 0 (echo [OK] coconut-oil.jpg) else (echo [FAIL] coconut-oil.jpg)

echo Copying chicken-masala.jpg...
copy "%SOURCE%\product-chicken-masala.jpg" "%DEST%\chicken-masala.jpg" >nul 2>&1
if %errorlevel% equ 0 (echo [OK] chicken-masala.jpg) else (echo [FAIL] chicken-masala.jpg)

echo Copying garam-masala.jpg...
copy "%SOURCE%\product-garam-masala.jpg" "%DEST%\garam-masala.jpg" >nul 2>&1
if %errorlevel% equ 0 (echo [OK] garam-masala.jpg) else (echo [FAIL] garam-masala.jpg)

echo Copying sambhar-powder.jpg...
copy "%SOURCE%\product-sambhar-powder.jpg" "%DEST%\sambhar-powder.jpg" >nul 2>&1
if %errorlevel% equ 0 (echo [OK] sambhar-powder.jpg) else (echo [FAIL] sambhar-powder.jpg)

echo Copying mutton-masala.jpg...
copy "%SOURCE%\product-mutton-masala.jpg" "%DEST%\mutton-masala.jpg" >nul 2>&1
if %errorlevel% equ 0 (echo [OK] mutton-masala.jpg) else (echo [FAIL] mutton-masala.jpg)

echo.
echo ========================================
echo Product Thumbnails Copy Complete!
echo ========================================
echo.
