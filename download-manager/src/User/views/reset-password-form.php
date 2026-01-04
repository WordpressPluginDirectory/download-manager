<?php
/**
 * Reset Password Form Template - Split Panel Design
 * Modern two-column layout with decorative left panel
 * Matches login-form.php design
 */

if(!defined('ABSPATH')) die();

use WPDM\__\__;
use WPDM\__\Crypt;

$login = Crypt::decrypt(__::query_var('login'));
$user = check_password_reset_key(__::query_var('key'), $login);

$logo = get_site_icon_url();
$site_name = get_bloginfo('name');
?>
<style>
/* =============================================
   WPDM Reset Password Form - Split Panel Design
   ============================================= */

/* Full viewport centering for login page */
.w3eden#wpdmloginpage {
    display: flex;
    align-items: center;
    justify-content: center;
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

/* Login Link */
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

<?php if(!is_wp_error($user)): ?>

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
                    <?php if($logo){ ?>
                        <img src="<?php echo esc_attr($logo); ?>" alt="<?php echo esc_attr($site_name); ?>" />
                    <?php } else { ?>
                        <div class="wpdm-login-brand-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        </div>
                    <?php } ?>
                    <span><?php echo esc_html($site_name); ?></span>
                </div>

                <div class="wpdm-login-welcome">
                    <div class="wpdm-login-welcome-sub"><?php _e("Secure your account", WPDM_TEXT_DOMAIN); ?></div>
                    <div class="wpdm-login-welcome-title"><?php _e("NEW PASSWORD", WPDM_TEXT_DOMAIN); ?></div>
                    <div class="wpdm-login-welcome-line"></div>
                    <div class="wpdm-login-welcome-text">
                        <?php _e("Create a strong password to protect your account. Use a mix of letters, numbers, and symbols.", WPDM_TEXT_DOMAIN); ?>
                    </div>
                </div>
            </div>

            <!-- Right Panel - Form -->
            <div class="wpdm-login-right">
                <div class="wpdm-login-form-header">
                    <h1 class="wpdm-login-form-title"><?php _e("Reset Password", WPDM_TEXT_DOMAIN); ?></h1>
                    <p class="wpdm-login-form-desc"><?php _e("Enter your new password below. Make sure it's at least 8 characters long.", WPDM_TEXT_DOMAIN); ?></p>
                </div>

                <form name="updatePasswordForm" id="updatePassword" action="<?php echo admin_url('/admin-ajax.php?action=updatePassword'); ?>" method="post">
                    <?php wp_nonce_field('wpdm_password_reset_' . $user->ID, '__wpdm_update_pass'); ?>
                    <input type="hidden" name="key" value="<?php echo esc_attr(__::query_var('key')); ?>">
                    <input type="hidden" name="login" value="<?php echo esc_attr(__::query_var('login')); ?>">

                    <!-- New Password -->
                    <div class="wpdm-login-field">
                        <div class="wpdm-login-input-wrap">
                            <input type="password" name="password" id="password" class="wpdm-login-input has-toggle" required placeholder="<?php _e('New Password', WPDM_TEXT_DOMAIN); ?>" autocomplete="new-password" />
                            <button type="button" class="wpdm-login-pwd-toggle" onclick="wpdmTogglePwd('password')" aria-label="Toggle password visibility">
                                <svg class="eye-open" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                                <svg class="eye-closed" style="display:none" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"/><line x1="1" y1="1" x2="23" y2="23"/></svg>
                            </button>
                        </div>
                    </div>

                    <!-- Confirm Password -->
                    <div class="wpdm-login-field">
                        <div class="wpdm-login-input-wrap">
                            <input type="password" name="cpassword" id="cpassword" class="wpdm-login-input has-toggle" required placeholder="<?php _e('Confirm Password', WPDM_TEXT_DOMAIN); ?>" autocomplete="new-password" />
                            <button type="button" class="wpdm-login-pwd-toggle" onclick="wpdmTogglePwd('cpassword')" aria-label="Toggle password visibility">
                                <svg class="eye-open" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                                <svg class="eye-closed" style="display:none" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"/><line x1="1" y1="1" x2="23" y2="23"/></svg>
                            </button>
                        </div>
                    </div>

                    <!-- Submit -->
                    <button type="submit" name="wp-submit" id="updatePassword-submit" class="wpdm-login-btn">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"/></svg>
                        <span><?php _e("Update Password", WPDM_TEXT_DOMAIN); ?></span>
                    </button>

                    <!-- Login Link -->
                    <div class="wpdm-login-register">
                        <?php _e("Remember your password?", WPDM_TEXT_DOMAIN); ?>
                        <a href="<?php echo wpdm_login_url(); ?>"><?php _e("Sign in", WPDM_TEXT_DOMAIN); ?></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
function wpdmTogglePwd(fieldId) {
    var pwd = document.getElementById(fieldId);
    var wrap = pwd.closest('.wpdm-login-input-wrap');
    var eyeOpen = wrap.querySelector('.eye-open');
    var eyeClosed = wrap.querySelector('.eye-closed');
    if (pwd.type === 'password') {
        pwd.type = 'text';
        eyeOpen.style.display = 'none';
        eyeClosed.style.display = 'block';
    } else {
        pwd.type = 'password';
        eyeOpen.style.display = 'block';
        eyeClosed.style.display = 'none';
    }
}

jQuery(function ($) {
    var $btn = $('#updatePassword-submit');
    var btnHtml = $btn.html();

    $('#updatePassword').submit(function () {
        // Validate passwords match
        if ($('#password').val() !== $('#cpassword').val()) {
            showErr('<?php _e("Passwords do not match. Please try again.", WPDM_TEXT_DOMAIN); ?>');
            return false;
        }

        // Validate password length
        if ($('#password').val().length < 6) {
            showErr('<?php _e("Password must be at least 6 characters long.", WPDM_TEXT_DOMAIN); ?>');
            return false;
        }

        $btn.html('<span class="wpdm-login-spinner"></span><span><?php _e("Updating...", WPDM_TEXT_DOMAIN); ?></span>').attr('disabled', 'disabled');

        $(this).ajaxSubmit({
            success: function (res) {
                if (res.success) {
                    $('#updatePassword').html(
                        '<div class="wpdm-login-alert success">' +
                        '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>' +
                        '<div><strong><?php _e("Password Updated!", WPDM_TEXT_DOMAIN); ?></strong><br/><?php _e("Your password has been changed successfully.", WPDM_TEXT_DOMAIN); ?></div>' +
                        '</div>' +
                        '<a href="<?php echo wpdm_login_url(); ?>" class="wpdm-login-btn">' +
                        '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/><polyline points="10 17 15 12 10 7"/><line x1="15" y1="12" x2="3" y2="12"/></svg>' +
                        '<span><?php _e("Go to Login", WPDM_TEXT_DOMAIN); ?></span>' +
                        '</a>'
                    );
                } else {
                    showErr(res.message || '<?php _e("Failed to update password. Please try again.", WPDM_TEXT_DOMAIN); ?>');
                    $btn.html(btnHtml).removeAttr('disabled');
                }
            },
            error: function() {
                showErr('<?php _e("An error occurred. Please try again.", WPDM_TEXT_DOMAIN); ?>');
                $btn.html(btnHtml).removeAttr('disabled');
            }
        });
        return false;
    });

    function showErr(msg) {
        $('#updatePassword .wpdm-login-alert.error').remove();
        var html = '<div class="wpdm-login-alert error">' +
            '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>' +
            '<span>' + msg + '</span></div>';
        $('#updatePassword').prepend(html);
    }

    $('body').on('click', '.wpdm-login-alert.error', function(){
        $(this).slideUp(150, function() { $(this).remove(); });
    });
});
</script>

<?php else: ?>

<!-- Error State - Invalid/Expired Link -->
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
                    <?php if($logo){ ?>
                        <img src="<?php echo esc_attr($logo); ?>" alt="<?php echo esc_attr($site_name); ?>" />
                    <?php } else { ?>
                        <div class="wpdm-login-brand-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        </div>
                    <?php } ?>
                    <span><?php echo esc_html($site_name); ?></span>
                </div>

                <div class="wpdm-login-welcome">
                    <div class="wpdm-login-welcome-sub"><?php _e("Something went wrong", WPDM_TEXT_DOMAIN); ?></div>
                    <div class="wpdm-login-welcome-title"><?php _e("LINK EXPIRED", WPDM_TEXT_DOMAIN); ?></div>
                    <div class="wpdm-login-welcome-line"></div>
                    <div class="wpdm-login-welcome-text">
                        <?php _e("Password reset links are valid for a limited time for security reasons.", WPDM_TEXT_DOMAIN); ?>
                    </div>
                </div>
            </div>

            <!-- Right Panel - Error Message -->
            <div class="wpdm-login-right">
                <div class="wpdm-login-form-header">
                    <h1 class="wpdm-login-form-title" style="color: #dc2626;"><?php _e("Invalid Link", WPDM_TEXT_DOMAIN); ?></h1>
                    <p class="wpdm-login-form-desc"><?php _e("This password reset link is invalid or has expired.", WPDM_TEXT_DOMAIN); ?></p>
                </div>

                <div class="wpdm-login-alert error" style="cursor: default;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
                    <span><?php echo esc_html($user->get_error_message()); ?></span>
                </div>

                <p style="font-size: 13px; color: #64748b; line-height: 1.6; margin-bottom: 24px;">
                    <?php _e("Don't worry! You can request a new password reset link. Just click the button below to start over.", WPDM_TEXT_DOMAIN); ?>
                </p>

                <a href="<?php echo WPDM()->user->login->lostPasswordURL(); ?>" class="wpdm-login-btn">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                    <span><?php _e("Request New Link", WPDM_TEXT_DOMAIN); ?></span>
                </a>

                <div class="wpdm-login-register">
                    <?php _e("Remember your password?", WPDM_TEXT_DOMAIN); ?>
                    <a href="<?php echo wpdm_login_url(); ?>"><?php _e("Sign in", WPDM_TEXT_DOMAIN); ?></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php endif; ?>
