./vendor/bin/phel build
npm run tailwind
lftp -u $FTP_USER,$FTP_PW ftpupload.net -e "mirror -R out htdocs/out; bye"
