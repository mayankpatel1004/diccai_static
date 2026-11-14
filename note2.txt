#!/bin/bash
set -e

cd /opt/lampp/htdocs/diccai_static || exit 1

# 2. Stage and commit only if changes exist locally
git add .
if ! git diff --cached --quiet; then
    git commit -m "Updates $(date '+%Y-%m-%d %H:%M:%S')"
    git push origin main
else
    echo "No local changes to commit. Proceeding with deployment..."
fi

# 3. Remote server pull and PM2 reload
ssh u797036281@82.112.239.225 << 'EOF'
set -e

echo "=== Updating emandi ==="
cd /home/u797036281/domains/diccai.com/public_html
# Discard server-side untracked/modified changes and align directly with origin/main
git fetch origin main
git reset --hard origin/main

EOF

echo "Deployment successful."