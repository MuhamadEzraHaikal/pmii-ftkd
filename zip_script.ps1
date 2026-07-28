Add-Type -AssemblyName System.IO.Compression.FileSystem
$source = 'D:\laragon\www\website-FTKD'
$destination = 'D:\laragon\www\website-FTKD-upload.zip'
$tempDir = 'D:\laragon\www\website-FTKD-temp'

if (Test-Path $destination) { Remove-Item $destination -Force }
if (Test-Path $tempDir) { Remove-Item $tempDir -Recurse -Force }
New-Item -ItemType Directory -Path $tempDir -Force | Out-Null

robocopy $source $tempDir /E /XD node_modules .git /XF website-FTKD-upload.zip > $null

[System.IO.Compression.ZipFile]::CreateFromDirectory($tempDir, $destination)

Remove-Item -Path $tempDir -Recurse -Force
