Write-Host ""
Write-Host "================================================================================" -ForegroundColor Cyan
Write-Host "  Starting Portfolio Development Servers" -ForegroundColor Green
Write-Host "================================================================================" -ForegroundColor Cyan
Write-Host ""
Write-Host "  Laravel Server: http://localhost:8000" -ForegroundColor Yellow
Write-Host "  Vite Dev Server: http://localhost:5173" -ForegroundColor Yellow
Write-Host ""

# Start both Laravel and Vite in one window using concurrently
Start-Process powershell -ArgumentList "-NoExit", "-Command", "cd '$PSScriptRoot'; npx concurrently -c 'blue,green' 'php artisan serve' 'npm run dev' --names 'Laravel,Vite'"

Write-Host "  Development servers are launching in one window..." -ForegroundColor Yellow
Write-Host ""
Write-Host "================================================================================" -ForegroundColor Cyan