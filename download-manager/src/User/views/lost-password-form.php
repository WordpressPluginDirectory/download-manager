<?php
/**
 * Lost Password Form Template - Split Panel Design
 * Modern two-column layout with decorative left panel
 */

if(!defined("ABSPATH")) die();
$logo = get_site_icon_url();
$site_name = get_bloginfo('name');
?>
<style>
/* =============================================
   WPDM Lost Password Form - Split Panel Design
   ============================================= */

/* Full viewport centering for lost password page */
.w3eden#wpdmlostpasspage {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    padding: 0;
    box-sizing: border-box;
}

.w3eden .wpdm-lostpass-split {
    --lp-primary: var(--color-primary);
    --lp-primary-dark: var(--color-primary-active);
    --lp-primary-light: var(--color-primary-hover);
    --lp-text: #1e293b;
    --lp-text-muted: #64748b;
    --lp-border: #e2e8f0;
    --lp-bg: #ffffff;
    --lp-radius: 16px;
    --lp-font: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;

    font-family: var(--lp-font);
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100%;
    padding: 24px;
    box-sizing: border-box;
}

.w3eden .wpdm-lostpass-split *,
.w3eden .wpdm-lostpass-split *::before,
.w3eden .wpdm-lostpass-split *::after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

/* Main Container */
.w3eden .wpdm-lostpass-panel {
    display: flex;
    width: 100%;
    max-width: 900px;
    min-height: 480px;
    background: var(--lp-bg);
    border-radius: var(--lp-radius);
    overflow: hidden;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
}

/* Left Panel - Decorative */
.w3eden .wpdm-lostpass-left {
    flex: 0 0 45%;
    background: linear-gradient(135deg, var(--color-primary-hover) 0%, var(--color-primary) 50%, var(--color-primary-active) 100%);
    padding: 40px;
    display: flex;
    flex-direction: column;
    position: relative;
    overflow: hidden;
}

/* Wave decoration */
.w3eden .wpdm-lostpass-left::before {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 200px;
    background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='%23ffffff' fill-opacity='0.1' d='M0,160L48,170.7C96,181,192,203,288,197.3C384,192,480,160,576,165.3C672,171,768,213,864,218.7C960,224,1056,192,1152,165.3C1248,139,1344,117,1392,106.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z'%3E%3C/path%3E%3C/svg%3E") no-repeat bottom;
    background-size: cover;
}

.w3eden .wpdm-lostpass-left::after {
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
.w3eden .wpdm-lostpass-grid {
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
.w3eden .wpdm-lostpass-circles {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    pointer-events: none;
    overflow: hidden;
}

.w3eden .wpdm-lostpass-circle {
    position: absolute;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.1);
}

.w3eden .wpdm-lostpass-circle:nth-child(1) {
    width: 80px;
    height: 80px;
    top: 15%;
    right: 10%;
}

.w3eden .wpdm-lostpass-circle:nth-child(2) {
    width: 40px;
    height: 40px;
    top: 60%;
    left: 15%;
    background: rgba(255, 255, 255, 0.15);
}

.w3eden .wpdm-lostpass-circle:nth-child(3) {
    width: 60px;
    height: 60px;
    bottom: 25%;
    right: 25%;
    background: rgba(255, 255, 255, 0.08);
}

.w3eden .wpdm-lostpass-circle:nth-child(4) {
    width: 20px;
    height: 20px;
    top: 40%;
    left: 30%;
    background: rgba(255, 255, 255, 0.2);
}

/* Left panel content */
.w3eden .wpdm-lostpass-brand {
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

.w3eden .wpdm-lostpass-brand img {
    width: 36px;
    height: 36px;
    border-radius: 8px;
    object-fit: cover;
}

.w3eden .wpdm-lostpass-brand-icon {
    width: 36px;
    height: 36px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.w3eden .wpdm-lostpass-brand-icon svg {
    width: 20px;
    height: 20px;
    color: #fff;
}

.w3eden .wpdm-lostpass-welcome {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    color: #fff;
    position: relative;
    z-index: 1;
}

.w3eden .wpdm-lostpass-welcome-sub {
    font-size: 14px;
    opacity: 0.9;
    margin-bottom: 8px;
    font-weight: 400;
}

.w3eden .wpdm-lostpass-welcome-title {
    font-size: 32px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin-bottom: 16px;
}

.w3eden .wpdm-lostpass-welcome-line {
    width: 40px;
    height: 3px;
    background: #fff;
    border-radius: 2px;
    margin-bottom: 20px;
}

.w3eden .wpdm-lostpass-welcome-text {
    font-size: 13px;
    line-height: 1.7;
    opacity: 0.85;
    max-width: 280px;
}

/* Right Panel - Form */
.w3eden .wpdm-lostpass-right {
    flex: 1;
    padding: 48px 40px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.w3eden .wpdm-lostpass-form-header {
    margin-bottom: 32px;
}

.w3eden .wpdm-lostpass-form-title {
    font-size: 24px;
    font-weight: 700;
    color: var(--lp-primary);
    margin-bottom: 12px;
}

.w3eden .wpdm-lostpass-form-desc {
    font-size: 13px;
    color: var(--lp-text-muted);
    line-height: 1.6;
}

/* Form Fields */
.w3eden .wpdm-lostpass-field {
    margin-bottom: 24px;
}

.w3eden .wpdm-lostpass-input-wrap {
    position: relative;
    display: flex;
    align-items: center;
}

/* Accent bar input style */
.w3eden .wpdm-lostpass-split input[type="text"],
.w3eden .wpdm-lostpass-split input[type="email"],
.w3eden .wpdm-lostpass-split .form-control,
.w3eden .wpdm-lostpass-input {
    width: 100% !important;
    height: 50px !important;
    padding: 0 16px 0 20px !important;
    font-size: 14px !important;
    font-family: inherit !important;
    color: var(--lp-text) !important;
    background: #f8fafc !important;
    border: none !important;
    border-left: 3px solid var(--lp-primary) !important;
    border-radius: 0 !important;
    outline: none !important;
    transition: all 0.2s ease !important;
}

.w3eden .wpdm-lostpass-input::placeholder,
.w3eden .wpdm-lostpass-split .form-control::placeholder {
    color: #94a3b8 !important;
    opacity: 1 !important;
}

.w3eden .wpdm-lostpass-input:focus,
.w3eden .wpdm-lostpass-split .form-control:focus {
    background: #f1f5f9 !important;
    border-left-color: var(--lp-primary-dark) !important;
}

/* Autofill fix */
.w3eden .wpdm-lostpass-input:-webkit-autofill,
.w3eden .wpdm-lostpass-input:-webkit-autofill:hover,
.w3eden .wpdm-lostpass-input:-webkit-autofill:focus,
.w3eden .wpdm-lostpass-split .form-control:-webkit-autofill {
    -webkit-box-shadow: 0 0 0 1000px #f8fafc inset !important;
    -webkit-text-fill-color: var(--lp-text) !important;
    border-left: 3px solid var(--lp-primary) !important;
}

/* Submit Button - Pill shape */
.w3eden .wpdm-lostpass-btn {
    width: 100%;
    height: 50px;
    font-size: 14px;
    font-weight: 600;
    font-family: inherit;
    color: #fff;
    background: var(--lp-primary);
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

.w3eden .wpdm-lostpass-btn:hover {
    background: var(--lp-primary-dark);
    box-shadow: 0 6px 20px rgba(var(--color-primary-rgb), 0.6);
    transform: translateY(-1px);
}

.w3eden .wpdm-lostpass-btn:active {
    transform: translateY(0);
}

.w3eden .wpdm-lostpass-btn:disabled {
    opacity: 0.7;
    cursor: not-allowed;
    transform: none;
}

.w3eden .wpdm-lostpass-btn svg {
    width: 16px;
    height: 16px;
}

/* Spinner */
@keyframes wpdm-lp-spin {
    to { transform: rotate(360deg); }
}

.w3eden .wpdm-lostpass-spinner {
    width: 18px;
    height: 18px;
    border: 2px solid rgba(255,255,255,0.3);
    border-top-color: #fff;
    border-radius: 50%;
    animation: wpdm-lp-spin 0.7s linear infinite;
}

/* Back Link */
.w3eden .wpdm-lostpass-back {
    text-align: center;
    margin-top: 24px;
    font-size: 13px;
    color: var(--lp-text-muted);
}

.w3eden .wpdm-lostpass-back a {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: var(--lp-primary);
    font-weight: 600;
    text-decoration: none;
    transition: color 0.15s;
}

.w3eden .wpdm-lostpass-back a:hover {
    color: var(--lp-primary-dark);
}

.w3eden .wpdm-lostpass-back a svg {
    width: 16px;
    height: 16px;
}

/* Alerts */
.w3eden .wpdm-lostpass-alert {
    padding: 12px 16px;
    border-radius: 8px;
    font-size: 13px;
    margin-bottom: 20px;
    display: flex;
    align-items: flex-start;
    gap: 10px;
    line-height: 1.5;
}

.w3eden .wpdm-lostpass-alert svg {
    width: 16px;
    height: 16px;
    flex-shrink: 0;
    margin-top: 2px;
}

.w3eden .wpdm-lostpass-alert.success {
    background: #ecfdf5;
    color: #065f46;
    border: 1px solid #a7f3d0;
}

.w3eden .wpdm-lostpass-alert.error {
    background: #fef2f2;
    color: #991b1b;
    border: 1px solid #fecaca;
    cursor: pointer;
}

.w3eden .wpdm-lostpass-alert.info {
    background: #eff6ff;
    color: #1e40af;
    border: 1px solid #bfdbfe;
}

/* Responsive */
@media (max-width: 768px) {
    .w3eden .wpdm-lostpass-split {
        padding: 16px;
    }

    .w3eden .wpdm-lostpass-panel {
        flex-direction: column;
        max-width: 440px;
        min-height: auto;
    }

    .w3eden .wpdm-lostpass-left {
        flex: 0 0 auto;
        padding: 32px 24px;
        min-height: 200px;
    }

    .w3eden .wpdm-lostpass-welcome-title {
        font-size: 24px;
    }

    .w3eden .wpdm-lostpass-welcome-text {
        display: none;
    }

    .w3eden .wpdm-lostpass-right {
        padding: 32px 24px;
    }
}

@media (max-width: 480px) {
    .w3eden .wpdm-lostpass-left {
        padding: 24px 20px;
        min-height: 160px;
    }

    .w3eden .wpdm-lostpass-welcome-title {
        font-size: 20px;
        letter-spacing: 1px;
    }

    .w3eden .wpdm-lostpass-right {
        padding: 24px 20px;
    }

    .w3eden .wpdm-lostpass-input,
    .w3eden .wpdm-lostpass-split .form-control {
        font-size: 16px !important; /* Prevent iOS zoom */
    }
}
</style>

<div class="w3eden" id="wpdmlostpasspage">
    <div class="wpdm-lostpass-split">
        <div class="wpdm-lostpass-panel">
            <!-- Left Panel - Decorative -->
            <div class="wpdm-lostpass-left">
                <div class="wpdm-lostpass-grid"></div>
                <div class="wpdm-lostpass-circles">
                    <div class="wpdm-lostpass-circle"></div>
                    <div class="wpdm-lostpass-circle"></div>
                    <div class="wpdm-lostpass-circle"></div>
                    <div class="wpdm-lostpass-circle"></div>
                </div>

                <div class="wpdm-lostpass-brand">
                    <?php if($logo){ ?>
                        <img src="<?php echo esc_attr($logo); ?>" alt="<?php echo esc_attr($site_name); ?>" />
                    <?php } else { ?>
                        <div class="wpdm-lostpass-brand-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
                        </div>
                    <?php } ?>
                    <span><?php echo esc_html($site_name); ?></span>
                </div>

                <div class="wpdm-lostpass-welcome">
                    <div class="wpdm-lostpass-welcome-sub"><?php _e("Forgot your password?", WPDM_TEXT_DOMAIN); ?></div>
                    <div class="wpdm-lostpass-welcome-title"><?php _e("RESET PASSWORD", WPDM_TEXT_DOMAIN); ?></div>
                    <div class="wpdm-lostpass-welcome-line"></div>
                    <div class="wpdm-lostpass-welcome-text">
                        <?php _e("No worries! Enter your email address and we'll send you a link to reset your password.", WPDM_TEXT_DOMAIN); ?>
                    </div>
                </div>
            </div>

            <!-- Right Panel - Form -->
            <div class="wpdm-lostpass-right">
                <div class="wpdm-lostpass-form-header">
                    <h1 class="wpdm-lostpass-form-title"><?php _e("Reset Password", WPDM_TEXT_DOMAIN); ?></h1>
                    <p class="wpdm-lostpass-form-desc"><?php _e("Enter your email address below and we'll send you instructions to reset your password.", WPDM_TEXT_DOMAIN); ?></p>
                </div>

                <form name="resetPassword" id="resetPassword" action="<?php echo admin_url('/admin-ajax.php?action=resetPassword'); ?>" method="post">
                    <?php wp_nonce_field(NONCE_KEY, '__wpdm_reset_pass'); ?>

                    <div id="__reset_msg"></div>

                    <div class="wpdm-lostpass-field">
                        <div class="wpdm-lostpass-input-wrap">
                            <input type="text" name="user_login" id="user_login" class="wpdm-lostpass-input" required placeholder="<?php _e('Enter your email address', WPDM_TEXT_DOMAIN); ?>" autocomplete="username" />
                        </div>
                    </div>

                    <button type="submit" name="wp-submit" id="resetPassword-submit" class="wpdm-lostpass-btn">
                        <span><?php _e("Send Reset Link", WPDM_TEXT_DOMAIN); ?></span>
                    </button>

                    <div class="wpdm-lostpass-back">
                        <a href="<?php the_permalink(); ?>">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m15 18-6-6 6-6"/></svg>
                            <span><?php _e("Back to sign in", WPDM_TEXT_DOMAIN); ?></span>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
jQuery(function ($) {
    var $btn = $('#resetPassword-submit');
    var btnHtml = $btn.html();
    var sent = 0;

    $('#resetPassword').submit(function (e) {
        e.preventDefault();
        if (sent === 1) return false;

        $btn.html('<span class="wpdm-lostpass-spinner"></span><span><?php _e("Sending...", WPDM_TEXT_DOMAIN); ?></span>').attr('disabled', 'disabled');

        $(this).ajaxSubmit({
            success: function (res) {
                if (res.match(/error/)) {
                    showMsg('error', '<?php _e("Account not found. Please check your email address.", WPDM_TEXT_DOMAIN); ?>');
                    $btn.html(btnHtml).removeAttr('disabled');
                } else {
                    sent = 1;
                    showMsg('success', '<?php _e("Reset link sent! Check your inbox.", WPDM_TEXT_DOMAIN); ?>');
                    $btn.html('<svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg><span><?php _e("Link Sent!", WPDM_TEXT_DOMAIN); ?></span>');
                }
            },
            error: function() {
                showMsg('error', '<?php _e("Something went wrong. Please try again.", WPDM_TEXT_DOMAIN); ?>');
                $btn.html(btnHtml).removeAttr('disabled');
            }
        });
        return false;
    });

    function showMsg(type, msg) {
        var icon = type === 'success'
            ? '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>'
            : '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>';
        $('#__reset_msg').html('<div class="wpdm-lostpass-alert ' + type + '">' + icon + '<span>' + msg + '</span></div>');
    }

    $('body').on('click', '.wpdm-lostpass-alert.error', function() {
        $(this).slideUp(150, function() { $(this).remove(); });
    });
});
</script>
