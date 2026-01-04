<?php
/**
 * Login Form Template - Split Panel Design
 * Modern two-column layout with decorative left panel
 */

if(!defined('ABSPATH')) die();
$logo = wpdm_valueof($params, 'logo');
if(!$logo) $logo = get_site_icon_url();
$site_name = get_bloginfo('name');
?>
<style>
/* =============================================
   WPDM Login Form - Split Panel Design
   ============================================= */

/* Full viewport centering for login page */
.w3eden#wpdmloginpage {
    display: flex;
    align-items: center;
    justify-content: center;
    /*min-height: 100vh;*/
    width: 100%;
    padding: 0;
    box-sizing: border-box;
}

.w3eden .wpdm-login-split {
    --login-primary: var(--color-primary);
    --login-primary-dark: var(--color-primary-active);
    --login-primary-light: var(--color-primary-hover);
    --login-text: #1e293b;
    --login-text-muted: #64748b;
    --login-border: #e2e8f0;
    --login-bg: #ffffff;
    --login-radius: 16px;
    --login-font: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;

    font-family: var(--login-font);
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100%;
    padding: 24px;
    box-sizing: border-box;
}

.w3eden .wpdm-login-split *,
.w3eden .wpdm-login-split *::before,
.w3eden .wpdm-login-split *::after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

/* Main Container */
.w3eden .wpdm-login-panel {
    display: flex;
    width: 100%;
    max-width: 900px;
    min-height: 520px;
    background: var(--login-bg);
    border-radius: var(--login-radius);
    overflow: hidden;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
}

/* Left Panel - Decorative */
.w3eden .wpdm-login-left {
    flex: 0 0 45%;
    background: linear-gradient(135deg, var(--color-primary-hover) 0%, var(--color-primary) 50%, var(--color-primary-active) 100%);
    padding: 40px;
    display: flex;
    flex-direction: column;
    position: relative;
    overflow: hidden;
}

/* Wave decoration */
.w3eden .wpdm-login-left::before {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 200px;
    background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='%23ffffff' fill-opacity='0.1' d='M0,160L48,170.7C96,181,192,203,288,197.3C384,192,480,160,576,165.3C672,171,768,213,864,218.7C960,224,1056,192,1152,165.3C1248,139,1344,117,1392,106.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z'%3E%3C/path%3E%3C/svg%3E") no-repeat bottom;
    background-size: cover;
}

.w3eden .wpdm-login-left::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 150px;
    background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='%23ffffff' fill-opacity='0.15' d='M0,224L48,213.3C96,203,192,181,288,181.3C384,181,480,203,576,218.7C672,235,768,245,864,234.7C960,224,1056,192,1152,181.3C1248,171,1344,181,1392,186.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z'%3E%3C/path%3E%3C/svg%3E") no-repeat bottom;
    background-size: cover;
}

/* Grid pattern overlay */
.w3eden .wpdm-login-grid {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image:
        linear-gradient(rgba(255,255,255,0.05) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.05) 1px, transparent 1px);
    background-size: 40px 40px;
    pointer-events: none;
}

/* Floating circles */
.w3eden .wpdm-login-circles {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    pointer-events: none;
    overflow: hidden;
}

.w3eden .wpdm-login-circle {
    position: absolute;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.1);
}

.w3eden .wpdm-login-circle:nth-child(1) {
    width: 80px;
    height: 80px;
    top: 15%;
    right: 10%;
}

.w3eden .wpdm-login-circle:nth-child(2) {
    width: 40px;
    height: 40px;
    top: 60%;
    left: 15%;
    background: rgba(255, 255, 255, 0.15);
}

.w3eden .wpdm-login-circle:nth-child(3) {
    width: 60px;
    height: 60px;
    bottom: 25%;
    right: 25%;
    background: rgba(255, 255, 255, 0.08);
}

.w3eden .wpdm-login-circle:nth-child(4) {
    width: 20px;
    height: 20px;
    top: 40%;
    left: 30%;
    background: rgba(255, 255, 255, 0.2);
}

/* Left panel content */
.w3eden .wpdm-login-brand {
    display: flex;
    align-items: center;
    gap: 12px;
    color: #fff;
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 0.5px;
    position: relative;
    z-index: 1;
}

.w3eden .wpdm-login-brand img {
    width: 36px;
    height: 36px;
    border-radius: 8px;
    object-fit: cover;
}

.w3eden .wpdm-login-brand-icon {
    width: 36px;
    height: 36px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.w3eden .wpdm-login-brand-icon svg {
    width: 20px;
    height: 20px;
    color: #fff;
}

.w3eden .wpdm-login-welcome {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    color: #fff;
    position: relative;
    z-index: 1;
}

.w3eden .wpdm-login-welcome-sub {
    font-size: 14px;
    opacity: 0.9;
    margin-bottom: 8px;
    font-weight: 400;
}

.w3eden .wpdm-login-welcome-title {
    font-size: 32px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin-bottom: 16px;
}

.w3eden .wpdm-login-welcome-line {
    width: 40px;
    height: 3px;
    background: #fff;
    border-radius: 2px;
    margin-bottom: 20px;
}

.w3eden .wpdm-login-welcome-text {
    font-size: 13px;
    line-height: 1.7;
    opacity: 0.85;
    max-width: 280px;
}

/* Right Panel - Form */
.w3eden .wpdm-login-right {
    flex: 1;
    padding: 48px 40px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.w3eden .wpdm-login-form-header {
    margin-bottom: 32px;
}

.w3eden .wpdm-login-form-title {
    font-size: 24px;
    font-weight: 700;
    color: var(--login-primary);
    margin-bottom: 12px;
}

.w3eden .wpdm-login-form-desc {
    font-size: 13px;
    color: var(--login-text-muted);
    line-height: 1.6;
}

/* Form Fields */
.w3eden .wpdm-login-field {
    margin-bottom: 20px;
}

.w3eden .wpdm-login-input-wrap {
    position: relative;
    display: flex;
    align-items: center;
}

/* Accent bar input style */
.w3eden .wpdm-login-split input[type="text"].wpdm-login-input,
.w3eden .wpdm-login-split input[type="email"].wpdm-login-input,
.w3eden .wpdm-login-split input[type="password"].wpdm-login-input,
.w3eden .wpdm-login-split .form-control,
.w3eden .wpdm-login-input {
    width: 100% !important;
    height: 50px !important;
    padding: 0 16px 0 20px !important;
    font-size: 14px !important;
    font-family: inherit !important;
    color: var(--login-text) !important;
    background: #f8fafc !important;
    border: none !important;
    border-left: 3px solid var(--color-primary-hover) !important;
    border-radius: 0 !important;
    outline: none !important;
    transition: all 0.2s ease !important;
}

.w3eden .wpdm-login-input::placeholder,
.w3eden .wpdm-login-split .form-control::placeholder {
    color: #94a3b8 !important;
    opacity: 1 !important;
}

.w3eden .wpdm-login-input:focus,
.w3eden .wpdm-login-split .form-control:focus {
    background: #f1f5f9 !important;
    border-left-color: var(--color-primary-active) !important;
}

/* Autofill fix */
.w3eden .wpdm-login-input:-webkit-autofill,
.w3eden .wpdm-login-input:-webkit-autofill:hover,
.w3eden .wpdm-login-input:-webkit-autofill:focus,
.w3eden .wpdm-login-split .form-control:-webkit-autofill {
    -webkit-box-shadow: 0 0 0 1000px #f8fafc inset !important;
    -webkit-text-fill-color: var(--login-text) !important;
    border-left: 3px solid var(--login-primary) !important;
}

/* Password toggle */
.w3eden .wpdm-login-input.has-toggle,
.w3eden .wpdm-login-split .form-control.has-toggle {
    padding-right: 48px !important;
}

.w3eden .wpdm-login-pwd-toggle {
    position: absolute;
    right: 8px;
    top: 50%;
    transform: translateY(-50%);
    width: 36px;
    height: 36px;
    background: transparent;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    color: var(--login-text-muted);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: color 0.15s;
}

.w3eden .wpdm-login-pwd-toggle:hover {
    color: var(--login-text);
}

.w3eden .wpdm-login-pwd-toggle svg {
    width: 18px;
    height: 18px;
}

/* Meta Row */
.w3eden .wpdm-login-meta {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 28px;
    font-size: 13px;
}

/* Custom Checkbox */
.w3eden .wpdm-login-remember {
    display: flex;
    align-items: center;
    gap: 10px;
    cursor: pointer;
    user-select: none;
    color: var(--login-text-muted);
}

.w3eden .wpdm-login-remember input[type="checkbox"] {
    position: absolute;
    opacity: 0;
    width: 0;
    height: 0;
}

.w3eden .wpdm-login-check {
    width: 18px;
    height: 18px;
    border: 2px solid var(--login-border);
    border-radius: 4px;
    background: var(--login-bg);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.15s ease;
    flex-shrink: 0;
}

.w3eden .wpdm-login-check svg {
    width: 10px;
    height: 10px;
    color: #fff;
    opacity: 0;
    transform: scale(0.5);
    transition: all 0.15s ease;
}

.w3eden .wpdm-login-remember input:checked + .wpdm-login-check {
    background: var(--login-primary);
    border-color: var(--login-primary);
}

.w3eden .wpdm-login-remember input:checked + .wpdm-login-check svg {
    opacity: 1;
    transform: scale(1);
}

/* Forgot Link */
.w3eden .wpdm-login-forgot {
    color: var(--login-primary);
    text-decoration: none;
    font-weight: 500;
    transition: color 0.15s;
}

.w3eden .wpdm-login-forgot:hover {
    color: var(--login-primary-dark);
}

/* Submit Button - Pill shape */
.w3eden .wpdm-login-btn {
    width: 100%;
    height: 50px;
    font-size: 14px;
    font-weight: 600;
    font-family: inherit;
    color: #fff;
    background: var(--login-primary);
    border: none;
    border-radius: 25px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: all 0.2s ease;
    box-shadow: 0 4px 15px rgba(var(--color-primary-rgb), 0.3);
}

.w3eden .wpdm-login-btn:hover {
    background: var(--login-primary-dark);
    box-shadow: 0 6px 20px rgba(var(--color-primary-rgb), 0.6);
    transform: translateY(-1px);
}

.w3eden .wpdm-login-btn:active {
    transform: translateY(0);
}

.w3eden .wpdm-login-btn:disabled {
    opacity: 0.7;
    cursor: not-allowed;
    transform: none;
}

.w3eden .wpdm-login-btn svg {
    width: 16px;
    height: 16px;
}

/* Spinner */
@keyframes wpdm-spin {
    to { transform: rotate(360deg); }
}

.w3eden .wpdm-login-spinner {
    width: 18px;
    height: 18px;
    border: 2px solid rgba(255,255,255,0.3);
    border-top-color: #fff;
    border-radius: 50%;
    animation: wpdm-spin 0.7s linear infinite;
}

/* Register Link */
.w3eden .wpdm-login-register {
    text-align: center;
    margin-top: 24px;
    font-size: 13px;
    color: var(--login-text-muted);
}

.w3eden .wpdm-login-register a {
    color: var(--login-primary);
    font-weight: 600;
    text-decoration: none;
    margin-left: 4px;
}

.w3eden .wpdm-login-register a:hover {
    text-decoration: underline;
}

/* Divider */
.w3eden .wpdm-login-divider {
    display: flex;
    align-items: center;
    gap: 16px;
    margin: 24px 0;
    font-size: 12px;
    color: var(--login-text-muted);
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.w3eden .wpdm-login-divider::before,
.w3eden .wpdm-login-divider::after {
    content: '';
    flex: 1;
    height: 1px;
    background: var(--login-border);
}

/* Social Buttons */
.w3eden .wpdm-login-social {
    display: flex;
    gap: 12px;
    justify-content: center;
}

.w3eden .wpdm-login-social-btn {
    width: 44px;
    height: 44px;
    border-radius: 10px;
    border: 1px solid var(--login-border);
    background: var(--login-bg);
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.2s ease;
    padding: 0;
}

.w3eden .wpdm-login-social-btn svg {
    width: 20px;
    height: 20px;
}

.w3eden .wpdm-login-social-btn.google svg { color: #ea4335; }
.w3eden .wpdm-login-social-btn.facebook svg { color: #1877f2; }
.w3eden .wpdm-login-social-btn.twitter svg { color: #0f172a; }
.w3eden .wpdm-login-social-btn.linkedin svg { color: #0a66c2; }

.w3eden .wpdm-login-social-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.w3eden .wpdm-login-social-btn.google:hover { background: #ea4335; border-color: #ea4335; }
.w3eden .wpdm-login-social-btn.facebook:hover { background: #1877f2; border-color: #1877f2; }
.w3eden .wpdm-login-social-btn.twitter:hover { background: #0f172a; border-color: #0f172a; }
.w3eden .wpdm-login-social-btn.linkedin:hover { background: #0a66c2; border-color: #0a66c2; }

.w3eden .wpdm-login-social-btn:hover svg { color: #fff; }

/* Alerts */
.w3eden .wpdm-login-alert {
    padding: 12px 16px;
    border-radius: 8px;
    font-size: 13px;
    margin-bottom: 20px;
    display: flex;
    align-items: flex-start;
    gap: 10px;
    line-height: 1.5;
}

.w3eden .wpdm-login-alert svg {
    width: 16px;
    height: 16px;
    flex-shrink: 0;
    margin-top: 2px;
}

.w3eden .wpdm-login-alert.success {
    background: #ecfdf5;
    color: #065f46;
    border: 1px solid #a7f3d0;
}

.w3eden .wpdm-login-alert.error {
    background: #fef2f2;
    color: #991b1b;
    border: 1px solid #fecaca;
    cursor: pointer;
}

.w3eden .wpdm-login-alert.info {
    background: #eff6ff;
    color: #1e40af;
    border: 1px solid #bfdbfe;
}

/* Override front.css */
.w3eden .wpdm-login-right .form-group { margin-bottom: 0; }
.w3eden .wpdm-login-right .form-group > label:first-child { display: none; }
.w3eden .wpdm-login-right .form-group .input-group { display: block; }
.w3eden .wpdm-login-right .form-group .input-group-prepend { display: none; }

/* reCAPTCHA */
.w3eden .wpdm-login-right .g-recaptcha {
    margin-bottom: 20px;
    display: flex;
    justify-content: center;
    transform: scale(0.92);
    transform-origin: center;
}


/* Responsive */
@media (max-width: 768px) {
    .w3eden .wpdm-login-split {
        padding: 16px;
    }

    .w3eden .wpdm-login-panel {
        flex-direction: column;
        max-width: 440px;
        min-height: auto;
    }

    .w3eden .wpdm-login-left {
        flex: 0 0 auto;
        padding: 32px 24px;
        min-height: 200px;
    }

    .w3eden .wpdm-login-welcome-title {
        font-size: 24px;
    }

    .w3eden .wpdm-login-welcome-text {
        display: none;
    }

    .w3eden .wpdm-login-right {
        padding: 32px 24px;
    }

    .w3eden .wpdm-login-meta {
        flex-direction: column;
        gap: 12px;
        align-items: flex-start;
    }
}

@media (max-width: 480px) {
    .w3eden .wpdm-login-left {
        padding: 24px 20px;
        min-height: 160px;
    }

    .w3eden .wpdm-login-welcome-title {
        font-size: 20px;
        letter-spacing: 1px;
    }

    .w3eden .wpdm-login-right {
        padding: 24px 20px;
    }

    .w3eden .wpdm-login-input,
    .w3eden .wpdm-login-split .form-control {
        font-size: 16px !important; /* Prevent iOS zoom */
    }
}
</style>

<div class="w3eden" id="wpdmloginpage">
    <div class="wpdm-login-split" id="wpdmlogin">
        <div class="wpdm-login-panel">
            <!-- Left Panel - Decorative -->
            <div class="wpdm-login-left">
                <div class="wpdm-login-grid"></div>
                <div class="wpdm-login-circles">
                    <div class="wpdm-login-circle"></div>
                    <div class="wpdm-login-circle"></div>
                    <div class="wpdm-login-circle"></div>
                    <div class="wpdm-login-circle"></div>
                </div>

                <div class="wpdm-login-brand">
                    <?php if($logo && !is_user_logged_in()){ ?>
                        <img src="<?php echo esc_attr($logo); ?>" alt="<?php echo esc_attr($site_name); ?>" />
                    <?php } else { ?>
                        <div class="wpdm-login-brand-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
                        </div>
                    <?php } ?>
                    <span><?php echo esc_html($site_name); ?></span>
                </div>

                <div class="wpdm-login-welcome">
                    <div class="wpdm-login-welcome-sub"><?php _e("Nice to see you again", WPDM_TEXT_DOMAIN); ?></div>
                    <div class="wpdm-login-welcome-title"><?php _e("WELCOME BACK", WPDM_TEXT_DOMAIN); ?></div>
                    <div class="wpdm-login-welcome-line"></div>
                    <div class="wpdm-login-welcome-text">
                        <?php _e("Sign in to access your account, manage your downloads, and explore all the features available to you.", WPDM_TEXT_DOMAIN); ?>
                    </div>
                </div>
            </div>

            <!-- Right Panel - Form -->
            <div class="wpdm-login-right">
                <?php do_action("wpdm_before_login_form"); ?>

                <div class="wpdm-login-form-header">
                    <h1 class="wpdm-login-form-title"><?php _e("Login Account", WPDM_TEXT_DOMAIN); ?></h1>
                    <p class="wpdm-login-form-desc"><?php _e("Enter your credentials to access your account and continue where you left off.", WPDM_TEXT_DOMAIN); ?></p>
                </div>

                <form name="loginform" id="loginform" action="" method="post">
                    <input type="hidden" name="permalink" value="<?php the_permalink(); ?>" />

                    <!-- Alerts -->
                    <div id="__signin_msg">
                        <?php
                        $wpdm_signup_success = \WPDM\__\Session::get('__wpdm_signup_success');
                        if(isset($_GET['signedup'])){
                            if($wpdm_signup_success == '') $wpdm_signup_success = apply_filters("wpdm_signup_success", __("Your account has been created successfully.", "download-manager"));
                            ?>
                            <div class="wpdm-login-alert success">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                                <span><?= $wpdm_signup_success; ?></span>
                            </div>
                            <?php
                        }
                        ?>
                    </div>

                    <?php if(isset($params['note_before']) && $params['note_before'] !== '') { ?>
                        <div class="wpdm-login-alert info">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
                            <span><?= esc_html($params['note_before']); ?></span>
                        </div>
                    <?php } ?>

                    <!-- Email -->
                    <div class="wpdm-login-field">
                        <div class="wpdm-login-input-wrap">
                            <input type="text" name="wpdm_login[log]" id="user_login" class="wpdm-login-input" required placeholder="<?php _e('Email ID', WPDM_TEXT_DOMAIN); ?>" autocomplete="username" />
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="wpdm-login-field">
                        <div class="wpdm-login-input-wrap">
                            <input type="password" name="wpdm_login[pwd]" id="password" class="wpdm-login-input has-toggle" required placeholder="<?php _e('Password', WPDM_TEXT_DOMAIN); ?>" autocomplete="current-password" />
                            <button type="button" class="wpdm-login-pwd-toggle" onclick="wpdmTogglePwd()" aria-label="Toggle password visibility">
                                <svg id="wpdm-eye" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                                <svg id="wpdm-eye-off" style="display:none" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"/><line x1="1" y1="1" x2="23" y2="23"/></svg>
                            </button>
                        </div>
                    </div>

                    <!-- Hidden hash -->
                    <?php $encrypted_params = \WPDM\__\Crypt::encrypt($params); ?>
                    <input type="hidden" name="__phash" id="__phash" value="<?php echo esc_attr($encrypted_params); ?>" />

                    <?php if(isset($params['note_after']) && $params['note_after'] !== '') { ?>
                        <div class="wpdm-login-alert info">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
                            <span><?= esc_html($params['note_after']); ?></span>
                        </div>
                    <?php } ?>

                    <?php do_action("wpdm_login_form"); ?>
                    <?php do_action("login_form"); ?>

                    <!-- Remember & Forgot -->
                    <div class="wpdm-login-meta">
                        <label class="wpdm-login-remember">
                            <input type="checkbox" name="rememberme" id="rememberme" value="forever" />
                            <span class="wpdm-login-check">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            </span>
                            <span><?php _e("Keep me signed in", WPDM_TEXT_DOMAIN); ?></span>
                        </label>
                        <a href="<?php echo wpdm_lostpassword_url(); ?>" class="wpdm-login-forgot"><?php _e("Forgot password?", WPDM_TEXT_DOMAIN); ?></a>
                    </div>

                    <!-- Submit -->
                    <button type="submit" name="wp-submit" id="loginform-submit" class="wpdm-login-btn">
                        <span><?php _e("Sign In", WPDM_TEXT_DOMAIN); ?></span>
                    </button>

                    <!-- Register Link -->
                    <?php if(isset($regurl) && $regurl != ''){ ?>
                        <div class="wpdm-login-register">
                            <?php _e("Don't have an account?", WPDM_TEXT_DOMAIN); ?>
                            <a href="<?php echo esc_attr(esc_url($regurl)); ?>"><?php _e("Sign up", WPDM_TEXT_DOMAIN); ?></a>
                        </div>
                    <?php } ?>

                    <input type="hidden" name="redirect_to" value="<?= htmlspecialchars_decode($log_redirect); ?>" />
                </form>

                <!-- Social Login -->
                <?php if(count($__wpdm_social_login) > 1) { ?>
                    <div class="wpdm-login-divider"><?php echo isset($params['social_title']) ? esc_html($params['social_title']) : __("or continue with", "download-manager"); ?></div>
                    <div class="wpdm-login-social">
                        <?php if(isset($__wpdm_social_login['google'])): ?>
                            <button type="button" class="wpdm-login-social-btn google" onclick="return _PopupCenter('<?php echo home_url('/?sociallogin=google'); ?>', 'Google', 400, 400);" title="Google">
                                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg>
                            </button>
                        <?php endif; ?>
                        <?php if(isset($__wpdm_social_login['facebook'])): ?>
                            <button type="button" class="wpdm-login-social-btn facebook" onclick="return _PopupCenter('<?php echo home_url('/?sociallogin=facebook'); ?>', 'Facebook', 400, 400);" title="Facebook">
                                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            </button>
                        <?php endif; ?>
                        <?php if(isset($__wpdm_social_login['twitter'])): ?>
                            <button type="button" class="wpdm-login-social-btn twitter" onclick="return _PopupCenter('<?php echo home_url('/?sociallogin=twitter'); ?>', 'Twitter', 400, 400);" title="X">
                                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                            </button>
                        <?php endif; ?>
                        <?php if(isset($__wpdm_social_login['linkedin'])): ?>
                            <button type="button" class="wpdm-login-social-btn linkedin" onclick="return _PopupCenter('<?php echo home_url('/?sociallogin=linkedin'); ?>', 'LinkedIn', 400, 400);" title="LinkedIn">
                                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                            </button>
                        <?php endif; ?>
                    </div>
                <?php } ?>

                <?php do_action("wpdm_after_login_form"); ?>
            </div>
        </div>
    </div>
</div>

<script>
function wpdmTogglePwd() {
    var pwd = document.getElementById('password');
    var eye = document.getElementById('wpdm-eye');
    var eyeOff = document.getElementById('wpdm-eye-off');
    if (pwd.type === 'password') {
        pwd.type = 'text';
        eye.style.display = 'none';
        eyeOff.style.display = 'block';
    } else {
        pwd.type = 'password';
        eye.style.display = 'block';
        eyeOff.style.display = 'none';
    }
}

jQuery(function ($) {
    <?php if(!isset($params['form_submit_handler']) || $params['form_submit_handler'] !== false){ ?>
    var $btn = $('#loginform-submit');
    var btnHtml = $btn.html();

    $('#loginform').submit(function () {
        $btn.html('<span class="wpdm-login-spinner"></span><span><?php _e("Signing in...", WPDM_TEXT_DOMAIN); ?></span>').attr('disabled', 'disabled');

        $(this).ajaxSubmit({
            error: function(error) {
                if(typeof error.responseJSON !== 'undefined') {
                    showErr(error.responseJSON.messages || error.responseJSON.message);
                    $btn.html(btnHtml).removeAttr('disabled');
                    <?php if((int)get_option('__wpdm_recaptcha_loginform', 0) === 1 && get_option('_wpdm_recaptcha_site_key') != ''){ ?>
                    try { grecaptcha.reset(); } catch (e) {}
                    <?php } ?>
                } else {
                    setTimeout(function () {
                        location.href = "<?= wp_sanitize_redirect(htmlspecialchars_decode($log_redirect)); ?>";
                    }, 1000);
                }
            },
            success: async function (res) {
                if (!res.success) {
                    showErr(res.message);
                    $btn.html(btnHtml).removeAttr('disabled');
                    <?php if((int)get_option('__wpdm_recaptcha_loginform', 0) === 1 && get_option('_wpdm_recaptcha_site_key') != ''){ ?>
                    try { grecaptcha.reset(); } catch (e) {}
                    <?php } ?>
                } else {
                    let proceed = await WPDM.doAction("wpdm_user_login", res);
                    $btn.html('<svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg><span>' + res.message + '</span>');
                    setTimeout(function () {
                        location.href = "<?= wp_sanitize_redirect(htmlspecialchars_decode($log_redirect)); ?>";
                    }, 1000);
                }
            }
        });
        return false;
    });
    <?php } ?>

    function showErr(msg) {
        $('#loginform .wpdm-login-alert.error').remove();
        var html = '<div class="wpdm-login-alert error">' +
            '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>' +
            '<span>' + msg + '</span></div>';
        $('#loginform').prepend(html);
    }

    $('body').on('click', '.wpdm-login-alert.error', function(){
        $(this).slideUp(150, function() { $(this).remove(); });
    });
});
</script>
