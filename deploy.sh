#!/bin/bash
set -euo pipefail

# ------------------------------------------------------------------
# Config
# ------------------------------------------------------------------
LOCAL_DIR="/opt/lampp/htdocs/diccai_static"
REMOTE_USER="u797036281"
REMOTE_HOST="82.112.239.225"
REMOTE_PORT="65002"
REMOTE_DIR="/home/u797234481/domains/diccai.com/public_html"
BRANCH="main"

# ------------------------------------------------------------------
# 1. Go to local repo
# ------------------------------------------------------------------
cd "$LOCAL_DIR" || { echo "❌ Local dir not found: $LOCAL_DIR"; exit 1; }

# ------------------------------------------------------------------
# 2. Stage and commit locally only if there are changes
# ------------------------------------------------------------------
git add -A

if ! git diff --cached --quiet; then
    git commit -m "Updates $(date '+%Y-%m-%d %H:%M:%S')"
    echo "✅ Local commit created."
else
    echo "ℹ️  No local changes to commit."
fi

# ------------------------------------------------------------------
# 3. Push to origin (safe even if nothing new)
# ------------------------------------------------------------------
git push origin "$BRANCH"
echo "✅ Local push done."

# ------------------------------------------------------------------
# 4. Remote pull + reset to origin/main over SSH (port 65002)
# ------------------------------------------------------------------
ssh -p "$REMOTE_PORT" \
    -o BatchMode=yes \
    -o ConnectTimeout=15 \
    -o StrictHostKeyChecking=accept-new \
    "${REMOTE_USER}@${REMOTE_HOST}" "bash -s" <<EOF
set -euo pipefail

echo "=== Updating diccai.com ==="
cd "$REMOTE_DIR"

git fetch origin "$BRANCH"
git reset --hard "origin/$BRANCH"
git clean -fd

# Optional post-deploy hooks (uncomment what applies):
# php artisan cache:clear 2>/dev/null || true
# find . -type d -exec chmod 755 {} \;
# find . -type f -exec chmod 644 {} \;

echo "✅ Remote updated to origin/$BRANCH"
EOF

echo "🚀 Deployment successful."