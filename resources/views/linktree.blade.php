<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dex?? | Linktree</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700&display=swap" rel="stylesheet" />

  <style>
    body {
      font-family: 'Space Mono', monospace;
      background: linear-gradient(to bottom, #9fb1bd, #cad5dd);
      min-height: 100vh;
    }

    .lt-wrapper {
      max-width: 26rem;
      margin: 0 auto;
      padding: 2rem 1rem 3rem;
    }

    .lt-card {
      background: rgba(224, 246, 255, 0.65);
      border-radius: 1.5rem;
      overflow: hidden;
    }

    .lt-topbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: .85rem 1rem .5rem;
    }

    .lt-topbar-btn {
      background: rgba(255, 255, 255, 0.6);
      border: none;
      border-radius: 50%;
      width: 2rem;
      height: 2rem;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      font-size: .95rem;
      color: #1a1a1a;
      text-decoration: none;
    }

    .lt-avatar {
      width: 5.5rem;
      height: 5.5rem;
      border-radius: 50%;
      object-fit: cover;
      border: .2rem solid rgba(255, 255, 255, .6);
      display: block;
      margin: 0 auto;
    }

    .lt-username {
      font-size: 1.25rem;
      font-weight: 700;
      text-align: center;
      margin-top: .75rem;
    }

    .lt-bio {
      font-size: .9rem;
      text-align: center;
      color: #444;
    }

    .lt-socials {
      display: flex;
      justify-content: center;
      gap: 1rem;
      margin: .75rem 0 1.5rem;
    }

    .lt-socials a {
      color: #1a1a1a;
      font-size: 1.4rem;
      text-decoration: none;
    }

    .lt-section-title {
      font-size: .8rem;
      font-weight: 700;
      text-align: center;
      margin: 1.25rem 0 .75rem;
    }

    .lt-link {
      display: flex;
      align-items: center;
      background: transparent;
      border: 0.08rem solid rgba(0, 0, 0, 0.15);
      border-radius: 1.5rem;
      text-decoration: none;
      color: #1a1a1a;
      padding: .65rem .9rem;
      margin-bottom: .6rem;
      min-height: 3.75rem;
      transition: filter .15s;
    }

    .lt-link:hover {
      filter: brightness(.95);
      color: #1a1a1a;
    }

    .lt-link img {
      width: 2.5rem;
      height: 2.5rem;
      border-radius: 50%;
      object-fit: cover;
      flex-shrink: 0;
      margin-right: .75rem;
    }

    .lt-link-body {
      flex: 1;
      min-width: 0;
      text-align: center;
      font-size: .78rem;
      font-weight: 700;
      word-break: break-word;
      padding: 0 .3rem;
    }

    .lt-link-sub {
      font-size: .62rem;
      font-weight: 400;
      color: #555;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .lt-link-dots {
      color: #999;
      margin-left: .25rem;
    }

    .lt-join-btn {
      display: block;
      max-width: 18rem;
      margin: 2rem auto .5rem;
      background: #fff;
      border: .1rem solid #ccc;
      border-radius: 10rem;
      font-family: inherit;
      font-size: .8rem;
      font-weight: 700;
      color: #1a1a1a;
      padding: .65rem 1.25rem;
      text-align: center;
      text-decoration: none;
    }

    .lt-footer {
      text-align: center;
      font-size: .65rem;
      color: #555;
      padding-bottom: 2rem;
    }

    .lt-footer a {
      color: #555;
      text-decoration: none;
      margin: 0 .3rem;
    }
  </style>
</head>

<body>
  <div class="lt-wrapper">
    <div class="lt-card">

      <div class="lt-topbar">
        <button class="lt-topbar-btn" aria-label="Linktree">✳</button>
        <button class="lt-topbar-btn" aria-label="Share"><i class="bi bi-box-arrow-up"></i></button>
      </div>

      <div class="px-3 pb-4">
        <img class="lt-avatar" src="{{ asset('assets/lt-thumbs/avatar.jpeg') }}" alt="Dex??" />
        <div class="lt-username">Dex??</div>
        <div class="lt-bio">Frieren</div>

        <div class="lt-socials">
          <a href="https://discord.com/invite/yGKb5mh3vF" target="_blank" rel="noopener" aria-label="Discord">
            <i class="bi bi-discord"></i>
          </a>
          <a href="https://www.instagram.com/oldest.in" target="_blank" rel="noopener" aria-label="Instagram">
            <i class="bi bi-instagram"></i>
          </a>
        </div>

        <div class="lt-section-title">UTBK 2025</div>

        <a href="https://drive.google.com/drive/mobile/folders/1nzBZf4KY2UNLEzTHWDYsyYpWM5OZ0ipZ" class="lt-link"
          target="_blank" rel="noopener">
          <img src="{{ asset('assets/lt-thumbs/utbk1.jpeg') }}" alt="" />
          <div class="lt-link-body">SOAL SOAL UTBK - Google Drive</div>
          <span class="lt-link-dots">⋮</span>
        </a>

        <a href="https://drive.google.com/drive/mobile/folders/10LLNVgp8JPgApLuDypG1bf8bvIWN_E4s" class="lt-link"
          target="_blank" rel="noopener">
          <img src="{{ asset('assets/lt-thumbs/utbk2.jpeg') }}" alt="" />
          <div class="lt-link-body">UTBK 2024 - Google Drive</div>
          <span class="lt-link-dots">⋮</span>
        </a>

        <a href="https://drive.google.com/drive/mobile/folders/1-2iiZmod0J0GvtNviNUY63zCoL4DFnr_" class="lt-link"
          target="_blank" rel="noopener">
          <img src="{{ asset('assets/lt-thumbs/utbk3.webp') }}" alt="" />
          <div class="lt-link-body">LATIHAN UTBK-SNBT 2024 - Google Drive</div>
          <span class="lt-link-dots">⋮</span>
        </a>

        <a href="https://open.spotify.com/playlist/5CcBJ4dQoJJMkiQJABkTqC" class="lt-link" target="_blank"
          rel="noopener">
          <img src="{{ asset('assets/lt-thumbs/spotify.png') }}" alt="" style="background:#1DB954;padding:.4rem;" />
          <div class="lt-link-body">
            Playlist UTBK 2025
            <div class="lt-link-sub">🎵 Playlist · SEMANGATTT UTBK NYAA. AKU PERCAYA DIRIMU BISAA ✨</div>
          </div>
          <span class="lt-link-dots">⋮</span>
        </a>

        <div class="lt-section-title">Search - Brainstorm 🔎🦠</div>

        <a href="http://gemini.google.com" class="lt-link" target="_blank" rel="noopener">
          <img src="{{ asset('assets/lt-thumbs/gemini.png') }}" alt="" />
          <div class="lt-link-body">Gemini - chat to supercharge your ideas</div>
          <span class="lt-link-dots">⋮</span>
        </a>

        <a href="http://perplexity.ai" class="lt-link" target="_blank" rel="noopener">
          <img src="{{ asset('assets/lt-thumbs/perplexity.png') }}" alt="" />
          <div class="lt-link-body">Perplexity</div>
          <span class="lt-link-dots">⋮</span>
        </a>
      </div>

    </div>

    <a href="https://linktr.ee" class="lt-join-btn" target="_blank" rel="noopener">Join Dex_Frieren on Linktree</a>
    <div class="lt-footer">
      <a href="#">Cookie Preferences</a> · <a href="#">Report</a> · <a href="#">Privacy</a>
    </div>
  </div>
</body>

</html>