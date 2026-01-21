# Image Copy Script - WordPress to PHP Project
# This script copies all required images from the WordPress site to the PHP project

$sourceBase = "C:\Users\Sujit Singh\Desktop\BharatSpiceWorld\apps-Website\wp-content\uploads"
$destBase = "C:\Users\Sujit Singh\Desktop\BharatSpiceWorld\apps-Website-PHP\assets\images"

# Create destination directory if it doesn't exist
if (-not (Test-Path $destBase)) {
    New-Item -ItemType Directory -Path $destBase -Force
}

Write-Host "Starting image copy process..." -ForegroundColor Green
Write-Host ""

# Define image mappings: source -> destination
$imageMappings = @{
    # Hero Slider Images
    "2025\09\59276.jpg" = "slider1.jpg"
    "2025\09\2148583693.jpg" = "slider2.jpg"
    "2025\09\1260.jpg" = "slider3.jpg"
    
    # Welcome Section - Spice Bowls
    "2025\09\2147684837.jpg" = "spice-bowl1.jpg"
    "2025\09\86272.jpg" = "spice-bowl2.jpg"
    
    # Turmeric Specialty Section
    "2025\09\IMG-20250830-WA0028-scaled-1-1024x682-1.jpg" = "turmeric.jpg"
    
    # Product Grid Images
    "2026\01\MK-2-1-e1767443887671.jpg" = "product-makhana.jpg"
    "2025\09\Malpani-Haldi-scaled-p76mtiivrwctuxj0okxhv133r4usedp1r9lzpjwj3s-1.jpg" = "product-red-chilli.jpg"
    "2025\09\Malpani-Haldi-scaled-p76mtiivrwctuxj0okxhv133r4usedp1r9lzpjwj3s-2.jpg" = "product-black-pepper.jpg"
    "2025\09\Malpani-Haldi-scaled-p76mtiivrwctuxj0okxhv133r4usedp1r9lzpjwj3s-3.jpg" = "product-coriander.jpg"
    "2025\09\product-1-1024x768.jpg" = "product-basmati-rice.jpg"
    "2025\09\Malpani-Haldi-scaled-p76mtiivrwctuxj0okxhv133r4usedp1r9lzpjwj3s-5.jpg" = "product-coconut-oil.jpg"
    "2025\09\Malpani-Haldi-scaled-p76mtiivrwctuxj0okxhv133r4usedp1r9lzpjwj3s-6.jpg" = "product-chicken-masala.jpg"
    "2025\09\Malpani-Haldi-scaled-p76mtiivrwctuxj0okxhv133r4usedp1r9lzpjwj3s-7.jpg" = "product-garam-masala.jpg"
    "2025\09\Malpani-Haldi-scaled-p76mtiivrwctuxj0okxhv133r4usedp1r9lzpjwj3s-8.jpg" = "product-sambhar-powder.jpg"
    "2025\09\86272-1.jpg" = "product-mutton-masala.jpg"
    
    # Service Icons
    "2025\09\india.png" = "india-icon.png"
    "2025\09\bulding.png" = "building-icon.png"
    
    # Company History
    "2025\09\light-masala-mixture-500x500-1.webp" = "masala-mixture.webp"
}

$successCount = 0
$failCount = 0
$skippedCount = 0

foreach ($mapping in $imageMappings.GetEnumerator()) {
    $sourcePath = Join-Path $sourceBase $mapping.Key
    $destPath = Join-Path $destBase $mapping.Value
    
    if (Test-Path $sourcePath) {
        try {
            Copy-Item -Path $sourcePath -Destination $destPath -Force
            Write-Host "[✓] Copied: $($mapping.Value)" -ForegroundColor Green
            $successCount++
        }
        catch {
            Write-Host "[✗] Failed to copy: $($mapping.Value) - $($_.Exception.Message)" -ForegroundColor Red
            $failCount++
        }
    }
    else {
        Write-Host "[!] Source not found: $($mapping.Key)" -ForegroundColor Yellow
        $failCount++
    }
}

Write-Host ""
Write-Host "========================================" -ForegroundColor Cyan
Write-Host "Copy Process Complete!" -ForegroundColor Cyan
Write-Host "========================================" -ForegroundColor Cyan
Write-Host "Successfully copied: $successCount images" -ForegroundColor Green
Write-Host "Failed/Not found: $failCount images" -ForegroundColor $(if ($failCount -gt 0) { "Red" } else { "Green" })
Write-Host ""
Write-Host "Destination: $destBase" -ForegroundColor Cyan
