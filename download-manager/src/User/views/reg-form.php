<?php
/**
 * Registration Form Template - Split Panel Design
 * Modern two-column layout with decorative left panel
 */

if(!defined('ABSPATH')) die('!');
$logo = isset($params['logo']) ? $params['logo'] : get_site_icon_url();
$site_name = get_bloginfo('name');
?>
<style>
/* =============================================
   WPDM Registration Form - Split Panel Design
   ============================================= */

/* Full viewport centering for registration page */
.w3eden#wpdmregpage {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    padding: 0;
    box-sizing: border-box;
}

.w3eden #registerform .form-row{
    display: flex;
    flex-wrap: wrap;
}

.w3eden .wpdm-reg-split {
    --reg-primary: var(--color-primary);
    --reg-primary-dark: var(--color-primary-active);
    --reg-primary-light: var(--color-primary-hover);
    --reg-text: #1e293b;
    --reg-text-muted: #64748b;
    --reg-border: #e2e8f0;
    --reg-bg: #ffffff;
    --reg-radius: 16px;
    --reg-font: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;

    font-family: var(--reg-font);
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100%;
    padding: 24px;
    box-sizing: border-box;
}

.w3eden .wpdm-reg-split *,
.w3eden .wpdm-reg-split *::before,
.w3eden .wpdm-reg-split *::after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

/* Main Container */
.w3eden .wpdm-reg-panel {
    display: flex;
    width: 100%;
    max-width: 900px;
    min-height: 520px;
    background: var(--reg-bg);
    border-radius: var(--reg-radius);
    overflow: hidden;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
}

/* Left Panel - Decorative */
.w3eden .wpdm-reg-left {
    flex: 0 0 45%;
    background: linear-gradient(135deg, var(--color-primary-hover) 0%, var(--color-primary) 50%, var(--color-primary-active) 100%);
    padding: 40px;
    display: flex;
    flex-direction: column;
    position: relative;
    overflow: hidden;
}

/* Wave decoration */
.w3eden .wpdm-reg-left::before {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 200px;
    background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='%23ffffff' fill-opacity='0.1' d='M0,160L48,170.7C96,181,192,203,288,197.3C384,192,480,160,576,165.3C672,171,768,213,864,218.7C960,224,1056,192,1152,165.3C1248,139,1344,117,1392,106.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z'%3E%3C/path%3E%3C/svg%3E") no-repeat bottom;
    background-size: cover;
}

.w3eden .wpdm-reg-left::after {
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
.w3eden .wpdm-reg-grid {
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
.w3eden .wpdm-reg-circles {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    pointer-events: none;
    overflow: hidden;
}

.w3eden .wpdm-reg-circle {
    position: absolute;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.1);
}

.w3eden .wpdm-reg-circle:nth-child(1) {
    width: 80px;
    height: 80px;
    top: 15%;
    right: 10%;
}

.w3eden .wpdm-reg-circle:nth-child(2) {
    width: 40px;
    height: 40px;
    top: 60%;
    left: 15%;
    background: rgba(255, 255, 255, 0.15);
}

.w3eden .wpdm-reg-circle:nth-child(3) {
    width: 60px;
    height: 60px;
    bottom: 25%;
    right: 25%;
    background: rgba(255, 255, 255, 0.08);
}

.w3eden .wpdm-reg-circle:nth-child(4) {
    width: 20px;
    height: 20px;
    top: 40%;
    left: 30%;
    background: rgba(255, 255, 255, 0.2);
}

/* Left panel content */
.w3eden .wpdm-reg-brand {
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

.w3eden .wpdm-reg-brand img {
    width: 36px;
    height: 36px;
    border-radius: 8px;
    object-fit: cover;
}

.w3eden .wpdm-reg-brand-icon {
    width: 36px;
    height: 36px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.w3eden .wpdm-reg-brand-icon svg {
    width: 20px;
    height: 20px;
    color: #fff;
}

.w3eden .wpdm-reg-welcome {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    color: #fff;
    position: relative;
    z-index: 1;
}

.w3eden .wpdm-reg-welcome-sub {
    font-size: 14px;
    opacity: 0.9;
    margin-bottom: 8px;
    font-weight: 400;
}

.w3eden .wpdm-reg-welcome-title {
    font-size: 32px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin-bottom: 16px;
}

.w3eden .wpdm-reg-welcome-line {
    width: 40px;
    height: 3px;
    background: #fff;
    border-radius: 2px;
    margin-bottom: 20px;
}

.w3eden .wpdm-reg-welcome-text {
    font-size: 13px;
    line-height: 1.7;
    opacity: 0.85;
    max-width: 280px;
}

/* Right Panel - Form */
.w3eden .wpdm-reg-right {
    flex: 1;
    padding: 48px 40px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    overflow-y: auto;
}

.w3eden .wpdm-reg-form-header {
    margin-bottom: 28px;
}

.w3eden .wpdm-reg-form-title {
    font-size: 24px;
    font-weight: 700;
    color: var(--reg-primary);
    margin-bottom: 12px;
}

.w3eden .wpdm-reg-form-desc {
    font-size: 13px;
    color: var(--reg-text-muted);
    line-height: 1.6;
}

/* Form Fields */
.w3eden .wpdm-reg-field {
    margin-bottom: 16px;
}

.w3eden .wpdm-reg-input-wrap {
    position: relative;
    display: flex;
    align-items: center;
}

/* Accent bar input style */
.w3eden .wpdm-reg-split input[type="text"],
.w3eden .wpdm-reg-split input[type="email"],
.w3eden .wpdm-reg-split input[type="password"],
.w3eden .wpdm-reg-split input[type="tel"],
.w3eden .wpdm-reg-split textarea,
.w3eden .wpdm-reg-split select,
.w3eden .wpdm-reg-split .form-control,
.w3eden .wpdm-reg-input {
    width: 100% !important;
    height: 50px !important;
    padding: 0 16px 0 20px !important;
    font-size: 14px !important;
    font-family: inherit !important;
    color: var(--reg-text) !important;
    background: #f8fafc !important;
    border: none !important;
    border-left: 3px solid var(--color-primary-hover) !important;
    border-radius: 0 !important;
    outline: none !important;
    transition: all 0.2s ease !important;
}

.w3eden .wpdm-reg-split textarea {
    height: auto !important;
    min-height: 80px !important;
    padding: 12px 16px 12px 20px !important;
    resize: vertical;
}

.w3eden .wpdm-reg-input::placeholder,
.w3eden .wpdm-reg-split .form-control::placeholder {
    color: #94a3b8 !important;
    opacity: 1 !important;
}

.w3eden .wpdm-reg-input:focus,
.w3eden .wpdm-reg-split .form-control:focus,
.w3eden .wpdm-reg-split input:focus,
.w3eden .wpdm-reg-split textarea:focus,
.w3eden .wpdm-reg-split select:focus {
    background: #f1f5f9 !important;
    border-left-color: var(--color-primary-active) !important;
    box-shadow: none !important;
}

/* Autofill fix */
.w3eden .wpdm-reg-input:-webkit-autofill,
.w3eden .wpdm-reg-input:-webkit-autofill:hover,
.w3eden .wpdm-reg-input:-webkit-autofill:focus,
.w3eden .wpdm-reg-split .form-control:-webkit-autofill,
.w3eden .wpdm-reg-split input:-webkit-autofill {
    -webkit-box-shadow: 0 0 0 1000px #f8fafc inset !important;
    -webkit-text-fill-color: var(--reg-text) !important;
    border-left: 3px solid var(--reg-primary) !important;
}

/* Password toggle */
.w3eden .wpdm-reg-input.has-toggle,
.w3eden .wpdm-reg-split .form-control.has-toggle {
    padding-right: 48px !important;
}

.w3eden .wpdm-reg-pwd-toggle {
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
    color: var(--reg-text-muted);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: color 0.15s;
}

.w3eden .wpdm-reg-pwd-toggle:hover {
    color: var(--reg-text);
}

.w3eden .wpdm-reg-pwd-toggle svg {
    width: 18px;
    height: 18px;
}

/* Submit Button - Pill shape */
.w3eden .wpdm-reg-btn {
    width: 100%;
    height: 50px;
    font-size: 14px;
    font-weight: 600;
    font-family: inherit;
    color: #fff;
    background: var(--reg-primary);
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
    margin-top: 8px;
}

.w3eden .wpdm-reg-btn:hover {
    background: var(--reg-primary-dark);
    box-shadow: 0 6px 20px rgba(var(--color-primary-rgb), 0.6);
    transform: translateY(-1px);
}

.w3eden .wpdm-reg-btn:active {
    transform: translateY(0);
}

.w3eden .wpdm-reg-btn:disabled {
    opacity: 0.7;
    cursor: not-allowed;
    transform: none;
}

.w3eden .wpdm-reg-btn svg {
    width: 16px;
    height: 16px;
}

/* Spinner */
@keyframes wpdm-reg-spin {
    to { transform: rotate(360deg); }
}

.w3eden .wpdm-reg-spinner {
    width: 18px;
    height: 18px;
    border: 2px solid rgba(255,255,255,0.3);
    border-top-color: #fff;
    border-radius: 50%;
    animation: wpdm-reg-spin 0.7s linear infinite;
}

/* Login Link */
.w3eden .wpdm-reg-login {
    text-align: center;
    margin-top: 24px;
    font-size: 13px;
    color: var(--reg-text-muted);
}

.w3eden .wpdm-reg-login a {
    color: var(--reg-primary);
    font-weight: 600;
    text-decoration: none;
    margin-left: 4px;
}

.w3eden .wpdm-reg-login a:hover {
    text-decoration: underline;
}

/* Divider */
.w3eden .wpdm-reg-divider {
    display: flex;
    align-items: center;
    gap: 16px;
    margin: 24px 0;
    font-size: 12px;
    color: var(--reg-text-muted);
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.w3eden .wpdm-reg-divider::before,
.w3eden .wpdm-reg-divider::after {
    content: '';
    flex: 1;
    height: 1px;
    background: var(--reg-border);
}

/* Social Buttons */
.w3eden .wpdm-reg-social {
    display: flex;
    gap: 12px;
    justify-content: center;
}

.w3eden .wpdm-reg-social-btn {
    width: 44px;
    height: 44px;
    border-radius: 10px;
    border: 1px solid var(--reg-border);
    background: var(--reg-bg);
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.2s ease;
    padding: 0;
}

.w3eden .wpdm-reg-social-btn svg {
    width: 20px;
    height: 20px;
}

.w3eden .wpdm-reg-social-btn.google svg { color: #ea4335; }
.w3eden .wpdm-reg-social-btn.facebook svg { color: #1877f2; }
.w3eden .wpdm-reg-social-btn.twitter svg { color: #0f172a; }
.w3eden .wpdm-reg-social-btn.linkedin svg { color: #0a66c2; }

.w3eden .wpdm-reg-social-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.w3eden .wpdm-reg-social-btn.google:hover { background: #ea4335; border-color: #ea4335; }
.w3eden .wpdm-reg-social-btn.facebook:hover { background: #1877f2; border-color: #1877f2; }
.w3eden .wpdm-reg-social-btn.twitter:hover { background: #0f172a; border-color: #0f172a; }
.w3eden .wpdm-reg-social-btn.linkedin:hover { background: #0a66c2; border-color: #0a66c2; }

.w3eden .wpdm-reg-social-btn:hover svg { color: #fff; }

/* Alerts */
.w3eden .wpdm-reg-alert {
    padding: 12px 16px;
    border-radius: 8px;
    font-size: 13px;
    margin-bottom: 20px;
    display: flex;
    align-items: flex-start;
    gap: 10px;
    line-height: 1.5;
}

.w3eden .wpdm-reg-alert svg {
    width: 16px;
    height: 16px;
    flex-shrink: 0;
    margin-top: 2px;
}

.w3eden .wpdm-reg-alert.success {
    background: #ecfdf5;
    color: #065f46;
    border: 1px solid #a7f3d0;
}

.w3eden .wpdm-reg-alert.error {
    background: #fef2f2;
    color: #991b1b;
    border: 1px solid #fecaca;
    cursor: pointer;
}

.w3eden .wpdm-reg-alert.info {
    background: #eff6ff;
    color: #1e40af;
    border: 1px solid #bfdbfe;
}

/* Override front.css */
.w3eden .wpdm-reg-right .form-group { margin-bottom: 0; }
.w3eden .wpdm-reg-right .form-group > label:first-child { display: none; }
.w3eden .wpdm-reg-right .form-group .input-group { display: block; }
.w3eden .wpdm-reg-right .form-group .input-group-prepend { display: none; }

/* Input wrapper overrides */
.w3eden .wpdm-reg-right .input-wrapper {
    margin-bottom: 16px;
}

.w3eden .wpdm-reg-right .input-wrapper label {
    display: none;
}

.w3eden .wpdm-reg-right .input-wrapper.heading-input-wrapper {
    background: #f8fafc;
    padding: 10px 16px;
    border-left: 3px solid var(--reg-primary);
    font-weight: 600;
    font-size: 12px;
    color: var(--reg-text-muted);
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 16px;
    margin-top: 8px;
}

/* reCAPTCHA */
.w3eden .wpdm-reg-right .g-recaptcha,
.w3eden .wpdm-reg-right #reCaptchaLock {
    margin-bottom: 16px;
    display: flex;
    justify-content: center;
    transform: scale(0.92);
    transform-origin: center;
}

/* Disabled State */
.w3eden .wpdm-reg-disabled {
    padding: 60px 40px;
    text-align: center;
}

.w3eden .wpdm-reg-disabled-icon {
    width: 64px;
    height: 64px;
    margin: 0 auto 20px;
    background: rgba(239, 68, 68, 0.1);
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #dc2626;
}

.w3eden .wpdm-reg-disabled-icon svg {
    width: 32px;
    height: 32px;
}

.w3eden .wpdm-reg-disabled p {
    color: var(--reg-text-muted);
    font-size: 15px;
    margin: 0;
}

/* Responsive */
@media (max-width: 768px) {
    .w3eden .wpdm-reg-split {
        padding: 16px;
    }

    .w3eden .wpdm-reg-panel {
        flex-direction: column;
        max-width: 440px;
        min-height: auto;
    }

    .w3eden .wpdm-reg-left {
        flex: 0 0 auto;
        padding: 32px 24px;
        min-height: 200px;
    }

    .w3eden .wpdm-reg-welcome-title {
        font-size: 24px;
    }

    .w3eden .wpdm-reg-welcome-text {
        display: none;
    }

    .w3eden .wpdm-reg-right {
        padding: 32px 24px;
        max-height: none;
    }
}

@media (max-width: 480px) {
    .w3eden .wpdm-reg-left {
        padding: 24px 20px;
        min-height: 160px;
    }

    .w3eden .wpdm-reg-welcome-title {
        font-size: 20px;
        letter-spacing: 1px;
    }

    .w3eden .wpdm-reg-right {
        padding: 24px 20px;
    }

    .w3eden .wpdm-reg-input,
    .w3eden .wpdm-reg-split .form-control,
    .w3eden .wpdm-reg-split input {
        font-size: 16px !important; /* Prevent iOS zoom */
    }
}
</style>

<div class="w3eden" id="wpdmregpage">
    <div class="wpdm-reg-split" id="wpdmreg">
        <?php if(get_option('users_can_register')): ?>
            <div class="wpdm-reg-panel">
                <!-- Left Panel - Decorative -->
                <div class="wpdm-reg-left">
                    <div class="wpdm-reg-grid"></div>
                    <div class="wpdm-reg-circles">
                        <div class="wpdm-reg-circle"></div>
                        <div class="wpdm-reg-circle"></div>
                        <div class="wpdm-reg-circle"></div>
                        <div class="wpdm-reg-circle"></div>
                    </div>

                    <div class="wpdm-reg-brand">
                        <?php if($logo){ ?>
                            <img src="<?php echo esc_attr($logo); ?>" alt="<?php echo esc_attr($site_name); ?>" />
                        <?php } else { ?>
                            <div class="wpdm-reg-brand-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
                            </div>
                        <?php } ?>
                        <span><?php echo esc_html($site_name); ?></span>
                    </div>

                    <div class="wpdm-reg-welcome">
                        <div class="wpdm-reg-welcome-sub"><?php _e("Start your journey", WPDM_TEXT_DOMAIN); ?></div>
                        <div class="wpdm-reg-welcome-title"><?php _e("JOIN US", WPDM_TEXT_DOMAIN); ?></div>
                        <div class="wpdm-reg-welcome-line"></div>
                        <div class="wpdm-reg-welcome-text">
                            <?php _e("Create your free account today to access exclusive downloads, manage your files, and unlock all features.", WPDM_TEXT_DOMAIN); ?>
                        </div>
                    </div>
                </div>

                <!-- Right Panel - Form -->
                <div class="wpdm-reg-right">
                    <div class="wpdm-reg-form-header">
                        <h1 class="wpdm-reg-form-title"><?php _e("Create Account", WPDM_TEXT_DOMAIN); ?></h1>
                        <p class="wpdm-reg-form-desc"><?php _e("Fill in your details below to get started with your free account.", WPDM_TEXT_DOMAIN); ?></p>
                    </div>

                    <form method="post" action="" id="registerform" name="registerform">
                        <?php wp_nonce_field(WPDM_PUB_NONCE, 'wdpmregnonce'); ?>

                        <div id="__signup_msg"></div>

                        <?php if(!$_social_only): ?>
                            <?php if(isset($params['note_before']) && trim($params['note_before']) != ''): ?>
                                <div class="wpdm-reg-alert info">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
                                    <span><?php echo $params['note_before']; ?></span>
                                </div>
                            <?php endif; ?>

                            <?= $form_html; ?>

                            <?php if(isset($params['note_after']) && trim($params['note_after']) != ''): ?>
                                <div class="wpdm-reg-alert info">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
                                    <span><?php echo $params['note_after']; ?></span>
                                </div>
                            <?php endif; ?>

                            <?php do_action("wpdm_register_form"); ?>
                            <?php do_action("register_form"); ?>

                            <button type="submit" class="wpdm-reg-btn" id="registerform-submit" name="wp-submit">
                                <span><?php _e("Create Account", WPDM_TEXT_DOMAIN); ?></span>
                            </button>
                        <?php endif; ?>

                        <!-- Social Login -->
                        <?php if(count($__wpdm_social_login) > 1): ?>
                            <div class="wpdm-reg-divider"><?php echo isset($params['social_title']) ? esc_html($params['social_title']) : __("or sign up with", "download-manager"); ?></div>
                            <div class="wpdm-reg-social">
                                <?php if(isset($__wpdm_social_login['google'])): ?>
                                    <button type="button" class="wpdm-reg-social-btn google" onclick="return _PopupCenter('<?php echo home_url('/?sociallogin=google'); ?>', 'Google', 400, 400);" title="Google">
                                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg>
                                    </button>
                                <?php endif; ?>
                                <?php if(isset($__wpdm_social_login['facebook'])): ?>
                                    <button type="button" class="wpdm-reg-social-btn facebook" onclick="return _PopupCenter('<?php echo home_url('/?sociallogin=facebook'); ?>', 'Facebook', 400, 400);" title="Facebook">
                                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                                    </button>
                                <?php endif; ?>
                                <?php if(isset($__wpdm_social_login['twitter'])): ?>
                                    <button type="button" class="wpdm-reg-social-btn twitter" onclick="return _PopupCenter('<?php echo home_url('/?sociallogin=twitter'); ?>', 'Twitter', 400, 400);" title="X">
                                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                                    </button>
                                <?php endif; ?>
                                <?php if(isset($__wpdm_social_login['linkedin'])): ?>
                                    <button type="button" class="wpdm-reg-social-btn linkedin" onclick="return _PopupCenter('<?php echo home_url('/?sociallogin=linkedin'); ?>', 'LinkedIn', 400, 400);" title="LinkedIn">
                                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                                    </button>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <!-- Login Link -->
                        <?php if($loginurl != ''): ?>
                            <div class="wpdm-reg-login">
                                <?php _e("Already have an account?", WPDM_TEXT_DOMAIN); ?>
                                <a href="<?php echo esc_attr(esc_url($loginurl)); ?>"><?php _e("Sign in", WPDM_TEXT_DOMAIN); ?></a>
                            </div>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        <?php else: ?>
            <div class="wpdm-reg-panel">
                <div class="wpdm-reg-left">
                    <div class="wpdm-reg-grid"></div>
                    <div class="wpdm-reg-circles">
                        <div class="wpdm-reg-circle"></div>
                        <div class="wpdm-reg-circle"></div>
                        <div class="wpdm-reg-circle"></div>
                        <div class="wpdm-reg-circle"></div>
                    </div>
                    <div class="wpdm-reg-brand">
                        <?php if($logo){ ?>
                            <img src="<?php echo esc_attr($logo); ?>" alt="<?php echo esc_attr($site_name); ?>" />
                        <?php } ?>
                        <span><?php echo esc_html($site_name); ?></span>
                    </div>
                    <div class="wpdm-reg-welcome">
                        <div class="wpdm-reg-welcome-title"><?php _e("REGISTRATION", WPDM_TEXT_DOMAIN); ?></div>
                        <div class="wpdm-reg-welcome-line"></div>
                    </div>
                </div>
                <div class="wpdm-reg-right">
                    <div class="wpdm-reg-disabled">
                        <div class="wpdm-reg-disabled-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="4.93" y1="4.93" x2="19.07" y2="19.07"/></svg>
                        </div>
                        <p><?php _e("Registration is currently disabled.", WPDM_TEXT_DOMAIN); ?></p>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<script>
jQuery(function ($) {
    $('#__reg_nonce').val('<?php echo wp_create_nonce(NONCE_KEY); ?>');

    <?php if(!isset($params['form_submit_handler']) || $params['form_submit_handler'] !== false): ?>
    var $btn = $('#registerform-submit');
    var btnHtml = $btn.html();

    $('#registerform').submit(function (e) {
        e.preventDefault();

        if ($('#reg_password').val() !== $('#reg_confirm_pass').val()) {
            $('#reg_confirm_pass').parent('.input-wrapper').addClass('input-error');
            showErr('<?php echo esc_js(__("Passwords do not match.", WPDM_TEXT_DOMAIN)); ?>');
            return false;
        } else {
            $('#reg_confirm_pass').parent('.input-wrapper').removeClass('input-error');
        }

        $btn.html('<span class="wpdm-reg-spinner"></span><span><?php _e("Creating...", WPDM_TEXT_DOMAIN); ?></span>').attr('disabled', 'disabled');

        var form_data = $(this).serializeArray();

        $(this).ajaxSubmit({
            success: function (res) {
                if (res.success == false) {
                    showErr(res.message);
                    $btn.html(btnHtml).removeAttr('disabled');
                } else if (res.success == true) {
                    WPDM.doAction("wpdm_new_signup", form_data);
                    $btn.html('<svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg><span><?php _e("Success!", WPDM_TEXT_DOMAIN); ?></span>');
                    setTimeout(function () {
                        location.href = res.redirect_to;
                    }, 1500);
                } else {
                    alert(res);
                }
            },
            error: function() {
                showErr('<?php echo esc_js(__("Something went wrong. Try again.", WPDM_TEXT_DOMAIN)); ?>');
                $btn.html(btnHtml).removeAttr('disabled');
            }
        });

        return false;
    });
    <?php endif; ?>

    function showErr(msg) {
        $('#registerform .wpdm-reg-alert.error').remove();
        var html = '<div class="wpdm-reg-alert error">' +
            '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>' +
            '<span>' + msg + '</span></div>';
        $('#__signup_msg').html(html);
    }

    $('body').on('click', '.wpdm-reg-alert.error', function() {
        $(this).slideUp(150, function() { $(this).remove(); });
    });

    <?php
    if($error = \WPDM\__\Session::get('wpdm_signup_error')):
    ?>
    showErr('<?php echo esc_js($error); ?>');
    <?php
    \WPDM\__\Session::clear('wpdm_signup_error');
    endif;
    ?>
});
</script>
