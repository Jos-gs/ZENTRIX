Set-Location $PSScriptRoot
Write-Host "ZENTRIX (solo visual) en http://localhost:3000"
Write-Host ""
php -S localhost:3000 -t public
