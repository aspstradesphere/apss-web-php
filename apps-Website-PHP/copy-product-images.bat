@echo off
echo Starting product images copy process...
echo.

set "SOURCE=C:\Users\Sujit Singh\Desktop\BharatSpiceWorld\apps-Website\wp-content\uploads"
set "DEST=C:\Users\Sujit Singh\Desktop\BharatSpiceWorld\apps-Website-PHP\assets\images\products"

REM Create destination directory if it doesn't exist
if not exist "%DEST%" mkdir "%DEST%"

REM Copy product images
echo Copying turmeric-large.jpg...
copy "%SOURCE%\2025\09\IMG-20250830-WA0028-scaled-1-1024x682-1.jpg" "%DEST%\turmeric-large.jpg" >nul 2>&1
if %errorlevel% equ 0 (echo [OK] turmeric-large.jpg) else (echo [FAIL] turmeric-large.jpg)

echo Copying red-chilli-large.jpg...
copy "%SOURCE%\2025\09\Malpani-Haldi-scaled-p76mtiivrwctuxj0okxhv133r4usedp1r9lzpjwj3s-1.jpg" "%DEST%\red-chilli-large.jpg" >nul 2>&1
if %errorlevel% equ 0 (echo [OK] red-chilli-large.jpg) else (echo [FAIL] red-chilli-large.jpg)

echo Copying black-pepper-large.jpg...
copy "%SOURCE%\2025\09\Malpani-Haldi-scaled-p76mtiivrwctuxj0okxhv133r4usedp1r9lzpjwj3s-2.jpg" "%DEST%\black-pepper-large.jpg" >nul 2>&1
if %errorlevel% equ 0 (echo [OK] black-pepper-large.jpg) else (echo [FAIL] black-pepper-large.jpg)

echo Copying coriander-large.jpg...
copy "%SOURCE%\2025\09\Malpani-Haldi-scaled-p76mtiivrwctuxj0okxhv133r4usedp1r9lzpjwj3s-3.jpg" "%DEST%\coriander-large.jpg" >nul 2>&1
if %errorlevel% equ 0 (echo [OK] coriander-large.jpg) else (echo [FAIL] coriander-large.jpg)

echo Copying clove-large.jpg...
copy "%SOURCE%\2025\09\product-1-1024x768.jpg" "%DEST%\clove-large.jpg" >nul 2>&1
if %errorlevel% equ 0 (echo [OK] clove-large.jpg) else (echo [FAIL] clove-large.jpg)

echo Copying coconut-oil-large.jpg...
copy "%SOURCE%\2025\09\Malpani-Haldi-scaled-p76mtiivrwctuxj0okxhv133r4usedp1r9lzpjwj3s-5.jpg" "%DEST%\coconut-oil-large.jpg" >nul 2>&1
if %errorlevel% equ 0 (echo [OK] coconut-oil-large.jpg) else (echo [FAIL] coconut-oil-large.jpg)

echo Copying chicken-masala-large.jpg...
copy "%SOURCE%\2025\09\Malpani-Haldi-scaled-p76mtiivrwctuxj0okxhv133r4usedp1r9lzpjwj3s-6.jpg" "%DEST%\chicken-masala-large.jpg" >nul 2>&1
if %errorlevel% equ 0 (echo [OK] chicken-masala-large.jpg) else (echo [FAIL] chicken-masala-large.jpg)

echo Copying garam-masala-large.jpg...
copy "%SOURCE%\2025\09\Malpani-Haldi-scaled-p76mtiivrwctuxj0okxhv133r4usedp1r9lzpjwj3s-7.jpg" "%DEST%\garam-masala-large.jpg" >nul 2>&1
if %errorlevel% equ 0 (echo [OK] garam-masala-large.jpg) else (echo [FAIL] garam-masala-large.jpg)

echo Copying sambhar-powder-large.jpg...
copy "%SOURCE%\2025\09\Malpani-Haldi-scaled-p76mtiivrwctuxj0okxhv133r4usedp1r9lzpjwj3s-8.jpg" "%DEST%\sambhar-powder-large.jpg" >nul 2>&1
if %errorlevel% equ 0 (echo [OK] sambhar-powder-large.jpg) else (echo [FAIL] sambhar-powder-large.jpg)

echo Copying mutton-masala-large.jpg...
copy "%SOURCE%\2025\09\86272-1.jpg" "%DEST%\mutton-masala-large.jpg" >nul 2>&1
if %errorlevel% equ 0 (echo [OK] mutton-masala-large.jpg) else (echo [FAIL] mutton-masala-large.jpg)

echo.
echo ========================================
echo Product Images Copy Complete!
echo ========================================
echo Destination: %DEST%
echo.
pause
