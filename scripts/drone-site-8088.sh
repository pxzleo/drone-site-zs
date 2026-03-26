#!/usr/bin/env bash
set -euo pipefail
exec php -S 0.0.0.0:8088 -t /home/xu/.openclaw/workspace/drone-site/public
