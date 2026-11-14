#!/bin/bash
set -euo pipefail

LOCAL_DIR="/opt/lampp/htdocs/diccai_static"
REMOTE_USER="u797036281"
REMOTE_HOST="82.112.239.225"
REMOTE_DIR="/home/u797036281/domains/diccai.com/public_html"
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
# 4. Remote pull + reset to origin, then optional cache clear / reload
# ------------------------------------------------------------------
ssh "${REMOTE_USER}@${REMOTE_HOST}" "bash -s" <<EOF
set -euo pipefail

echo "=== Updating diccai.com ==="
cd "$REMOTE_DIR"

# Make sure we are on the right branch
git fetch origin "$BRANCH"
git reset --hard "origin/$BRANCH"
git clean -fd   # remove untracked files (comment out if you keep uploads locally on server)

# Optional: clear caches / set permissions / reload services here
# php artisan cache:clear 2>/dev/null || true
# find . -type d -exec chmod 755 {} \;
# find . -type f -exec chmod 644 {} \;
# pm2 reload all 2>/dev/null || true

echo "✅ Remote updated to origin/$BRANCH"
EOF

echo "🚀 Deployment successful."