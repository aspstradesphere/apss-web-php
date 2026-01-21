@echo off
echo Starting image copy process...
echo.

set "SOURCE=C:\Users\Sujit Singh\Desktop\BharatSpiceWorld\apps-Website\wp-content\uploads"
set "DEST=C:\Users\Sujit Singh\Desktop\BharatSpiceWorld\apps-Website-PHP\assets\images"

REM Create destination directory if it doesn't exist
if not exist "%DEST%" mkdir "%DEST%"

REM Hero Slider Images
copy "%SOURCE%\2025\09\59276.jpg" "%DEST%\slider1.jpg"
copy "%SOURCE%\2025\09\2148583693.jpg" "%DEST%\slider2.jpg"
copy "%SOURCE%\2025\09\1260.jpg" "%DEST%\slider3.jpg"

REM Welcome Section - Spice Bowls
copy "%SOURCE%\2025\09\2147684837.jpg" "%DEST%\spice-bowl1.jpg"
copy "%SOURCE%\2025\09\86272.jpg" "%DEST%\spice-bowl2.jpg"

REM Turmeric Specialty Section
copy "%SOURCE%\2025\09\IMG-20250830-WA0028-scaled-1-1024x682-1.jpg" "%DEST%\turmeric.jpg"

REM Product Grid Images
copy "%SOURCE%\2026\01\MK-2-1-e1767443887671.jpg" "%DEST%\product-makhana.jpg"
copy "%SOURCE%\2025\09\Malpani-Haldi-scaled-p76mtiivrwctuxj0okxhv133r4usedp1r9lzpjwj3s-1.jpg" "%DEST%\product-red-chilli.jpg"
copy "%SOURCE%\2025\09\Malpani-Haldi-scaled-p76mtiivrwctuxj0okxhv133r4usedp1r9lzpjwj3s-2.jpg" "%DEST%\product-black-pepper.jpg"
copy "%SOURCE%\2025\09\Malpani-Haldi-scaled-p76mtiivrwctuxj0okxhv133r4usedp1r9lzpjwj3s-3.jpg" "%DEST%\product-coriander.jpg"
copy "%SOURCE%\2025\09\product-1-1024x768.jpg" "%DEST%\product-basmati-rice.jpg"
copy "%SOURCE%\2025\09\Malpani-Haldi-scaled-p76mtiivrwctuxj0okxhv133r4usedp1r9lzpjwj3s-5.jpg" "%DEST%\product-coconut-oil.jpg"
copy "%SOURCE%\2025\09\Malpani-Haldi-scaled-p76mtiivrwctuxj0okxhv133r4usedp1r9lzpjwj3s-6.jpg" "%DEST%\product-chicken-masala.jpg"
copy "%SOURCE%\2025\09\Malpani-Haldi-scaled-p76mtiivrwctuxj0okxhv133r4usedp1r9lzpjwj3s-7.jpg" "%DEST%\product-garam-masala.jpg"
copy "%SOURCE%\2025\09\Malpani-Haldi-scaled-p76mtiivrwctuxj0okxhv133r4usedp1r9lzpjwj3s-8.jpg" "%DEST%\product-sambhar-powder.jpg"
copy "%SOURCE%\2025\09\86272-1.jpg" "%DEST%\product-mutton-masala.jpg"

REM Service Icons
copy "%SOURCE%\2025\09\india.png" "%DEST%\india-icon.png"
copy "%SOURCE%\2025\09\bulding.png" "%DEST%\building-icon.png"

REM Company History
copy "%SOURCE%\2025\09\light-masala-mixture-500x500-1.webp" "%DEST%\masala-mixture.webp"

echo.
echo Copy process complete!
echo Images copied to: %DEST%
pause
