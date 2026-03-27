<?php
function site_detect_lang() {
    if (isset($_GET['lang']) && in_array($_GET['lang'], ['zh', 'en'], true)) {
        $lang = $_GET['lang'];
        setcookie('site_lang', $lang, time() + 365 * 24 * 3600, '/');
        return $lang;
    }
    if (isset($_COOKIE['site_lang']) && in_array($_COOKIE['site_lang'], ['zh', 'en'], true)) {
        return $_COOKIE['site_lang'];
    }
    $header = isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE']) : '';
    if (strpos($header, 'zh') !== false) {
        return 'zh';
    }
    return 'en';
}

$lang = site_detect_lang();

function t($zh, $en = null) {
    global $lang;
    if ($lang === 'en') {
        return $en !== null ? $en : $zh;
    }
    return $zh;
}

function localized($value, $langKey = null, $fallback = '') {
    global $lang;
    if (is_array($value)) {
        if ($langKey !== null && isset($value[$langKey])) return $value[$langKey];
        if ($lang === 'en' && isset($value['en'])) return $value['en'];
        if ($lang === 'zh' && isset($value['zh'])) return $value['zh'];
        return $fallback;
    }
    return $value !== null && $value !== '' ? $value : $fallback;
}

function url_with_lang($path, $params = []) {
    global $lang;
    $params = array_merge($params, ['lang' => $lang]);
    return $path . '?' . http_build_query($params);
}

function switch_lang_url($targetLang) {
    $params = $_GET;
    $params['lang'] = $targetLang;
    $path = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    if (!$path) $path = 'index.php';
    return $path . '?' . http_build_query($params);
}

function render_header($current = '') {
    global $lang;
    ?>
<header class="site-header">
  <div class="container nav">
    <a class="brand brand-logo" href="<?= url_with_lang('index.php') ?>"><img src="assets/customer/logo.png" alt="<?= htmlspecialchars(t('飞行魔方 Logo', 'Flicube Logo')) ?>"></a>
    <button class="mobile-menu-toggle" type="button" aria-expanded="false" aria-controls="mobile-menu-panel" aria-label="<?= htmlspecialchars(t('打开导航菜单', 'Open navigation menu')) ?>">☰</button>
    <nav class="menu">
      <a href="<?= url_with_lang('about.php') ?>"><?= htmlspecialchars(t('公司介绍', 'About')) ?></a>
      <a href="<?= url_with_lang('products.php') ?>"><?= htmlspecialchars(t('产品中心', 'Products')) ?></a>
      <a href="<?= url_with_lang('cases.php') ?>"><?= htmlspecialchars(t('应用案例', 'Cases')) ?></a>
      <a href="<?= url_with_lang('news.php') ?>"><?= htmlspecialchars(t('新闻资讯', 'News')) ?></a>
      <?php if ($current === 'home'): ?>
      <a href="<?= url_with_lang('index.php', ['#' => 'technology']) ?>#technology"><?= htmlspecialchars(t('技术优势', 'Technology')) ?></a>
      <?php endif; ?>
      <a href="<?= url_with_lang('contact.php') ?>" class="cta"><?= htmlspecialchars(t('联系我们', 'Contact')) ?></a>
      <a href="<?= htmlspecialchars(switch_lang_url($lang === 'zh' ? 'en' : 'zh')) ?>" style="padding:10px 14px;border-radius:999px;border:1px solid rgba(255,255,255,.24);font-size:13px;"> <?= $lang === 'zh' ? 'EN' : '中文' ?> </a>
    </nav>
  </div>
  <div class="container mobile-nav-wrap" id="mobile-menu-panel">
    <nav class="mobile-menu">
      <a href="<?= url_with_lang('about.php') ?>"><?= htmlspecialchars(t('公司介绍', 'About')) ?></a>
      <a href="<?= url_with_lang('products.php') ?>"><?= htmlspecialchars(t('产品中心', 'Products')) ?></a>
      <a href="<?= url_with_lang('cases.php') ?>"><?= htmlspecialchars(t('应用案例', 'Cases')) ?></a>
      <a href="<?= url_with_lang('news.php') ?>"><?= htmlspecialchars(t('新闻资讯', 'News')) ?></a>
      <a href="<?= url_with_lang('contact.php') ?>"><?= htmlspecialchars(t('联系我们', 'Contact')) ?></a>
      <a href="<?= htmlspecialchars(switch_lang_url($lang === 'zh' ? 'en' : 'zh')) ?>"><?= $lang === 'zh' ? 'Switch to English' : '切换到中文' ?></a>
    </nav>
  </div>
</header>
<?php
}
