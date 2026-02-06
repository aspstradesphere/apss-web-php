# Product Images Copy Script - WordPress to PHP Project
# This script copies product detail images from the WordPress site to the PHP project

$sourceBase = "C:\Users\Sujit Singh\Desktop\BharatSpiceWorld\apps-Website\wp-content\uploads"
$destBase = "C:\Users\Sujit Singh\Desktop\BharatSpiceWorld\apps-Website-PHP\assets\images\products"

# Create destination directory if it doesn't exist
if (-not (Test-Path $destBase)) {
    New-Item -ItemType Directory -Path $destBase -Force
}

Write-Host "Starting product images copy process..." -ForegroundColor Green
Write-Host ""

# Define product image mappings: source -> destination
$productImageMappings = @{
    "2025\09\IMG-20250830-WA0028-scaled-1-1024x682-1.jpg"                           = "turmeric-large.jpg";
    "2025\09\Malpani-Haldi-scaled-p76mtiivrwctuxj0okxhv133r4usedp1r9lzpjwj3s-1.jpg" = "red-chilli-large.jpg";
    "2025\09\Malpani-Haldi-scaled-p76mtiivrwctuxj0okxhv133r4usedp1r9lzpjwj3s-2.jpg" = "black-pepper-large.jpg";
    "2025\09\Malpani-Haldi-scaled-p76mtiivrwctuxj0okxhv133r4usedp1r9lzpjwj3s-3.jpg" = "coriander-large.jpg";
    "2025\09\product-1-1024x768.jpg"                                                = "clove-large.jpg";
    "2025\09\Malpani-Haldi-scaled-p76mtiivrwctuxj0okxhv133r4usedp1r9lzpjwj3s-5.jpg" = "coconut-oil-large.jpg";
    "2025\09\Malpani-Haldi-scaled-p76mtiivrwctuxj0okxhv133r4usedp1r9lzpjwj3s-6.jpg" = "chicken-masala-large.jpg";
    "2025\09\Malpani-Haldi-scaled-p76mtiivrwctuxj0okxhv133r4usedp1r9lzpjwj3s-7.jpg" = "garam-masala-large.jpg";
    "2025\09\Malpani-Haldi-scaled-p76mtiivrwctuxj0okxhv133r4usedp1r9lzpjwj3s-8.jpg" = "sambhar-powder-large.jpg";
    "2025\09\86272-1.jpg"                                                           = "mutton-masala-large.jpg"
}

$successCount = 0
$failCount = 0

foreach ($mapping in $productImageMappings.GetEnumerator()) {
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
Write-Host "Product Images Copy Complete!" -ForegroundColor Cyan
Write-Host "========================================" -ForegroundColor Cyan
Write-Host "Successfully copied: $successCount images" -ForegroundColor Green
Write-Host "Failed/Not found: $failCount images" -ForegroundColor $(if ($failCount -gt 0) { "Red" } else { "Green" })
Write-Host ""
Write-Host "Destination: $destBase" -ForegroundColor Cyan
