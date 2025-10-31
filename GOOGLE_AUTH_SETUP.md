## Google OAuth Setup (Manual, no Socialite)

This project uses a manual Google OAuth flow. Do not commit real secrets.

Environment variables required in your local `.env` (not tracked):

```
GOOGLE_CLIENT_ID=your-client-id.apps.googleusercontent.com
GOOGLE_CLIENT_SECRET=your-client-secret
GOOGLE_REDIRECT_URI=http://localhost:8000/auth/google/callback
```

For templates, use `.env.example` (placeholders only). Never put real credentials in committed files.

Production notes:
- Set `APP_URL=https://your-domain`
- Update `GOOGLE_REDIRECT_URI` and the Google Cloud Console OAuth redirect URI to the production URL
- Consider `SESSION_SECURE_COOKIE=true` under HTTPS

Security checklist before pushing:
- [x] `.env` is ignored by git (`.gitignore` includes `.env`)
- [x] No secrets appear in code: `git grep -n "GOOGLE_CLIENT_SECRET"` returns no matches outside `.env`
- [x] No tokens are logged; logs only include non-sensitive metadata
- [x] `.env.example` contains placeholders only

