<?php
/**
 * Already Logged In View
 *
 * Displayed when a logged-in user visits the login page.
 *
 * @package WPDM
 */

if (!defined('ABSPATH')) die();
?>

<div class="w3eden">
    <div class="wpdm-logged-in-card">
        <!-- Success indicator -->
        <div class="wpdm-logged-in-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
            </svg>
        </div>

        <!-- Avatar with online indicator -->
        <div class="wpdm-logged-in-avatar">
            <img src="<?php echo esc_url(get_avatar_url(get_current_user_id(), ['size' => 160])); ?>" alt="<?php echo esc_attr($current_user->display_name); ?>" />
            <span class="wpdm-online-dot"></span>
        </div>

        <!-- User info -->
        <div class="wpdm-logged-in-info">
            <span class="wpdm-logged-in-greeting"><?php _e("Welcome back", "download-manager"); ?></span>
            <h3 class="wpdm-logged-in-name"><?php echo esc_html($current_user->display_name); ?></h3>
            <p class="wpdm-logged-in-email"><?php echo esc_html($current_user->user_email); ?></p>
        </div>

        <!-- Action buttons -->
        <div class="wpdm-logged-in-actions">
            <a href="<?php echo esc_url(wpdm_user_dashboard_url()); ?>" class="btn btn-lg btn-primary">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
                <?php _e("My Account", "download-manager"); ?>
            </a>
            <a href="<?php echo esc_url(wpdm_logout_url()); ?>" class="btn btn-lg btn-outline-secondary wpdm-btn-logout">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                    <polyline points="16 17 21 12 16 7"></polyline>
                    <line x1="21" y1="12" x2="9" y2="12"></line>
                </svg>
                <?php _e("Logout", "download-manager"); ?>
            </a>
        </div>
    </div>
</div>

<style>
    .w3eden .wpdm-logged-in-card {
        max-width: 380px;
        margin: 0 auto;
        padding: 24px;
        background: #ffffff;
        border-radius: 16px;
        box-shadow: 0 4px 24px rgba(0, 0, 0, 0.06), 0 1px 2px rgba(0, 0, 0, 0.04);
        text-align: center;
        position: relative;
        font-family: var(--wpdm-font);
    }

    /* Success badge */
    .w3eden .wpdm-logged-in-badge {
        position: absolute;
        top: -16px;
        left: 50%;
        transform: translateX(-50%);
        width: 40px;
        height: 40px;
        background: var(--color-success);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 12px rgba(var(--color-success-rgb), 0.4);
    }

    .w3eden .wpdm-logged-in-badge svg {
        width: 20px;
        height: 20px;
        color: #fff;
    }

    /* Avatar */
    .w3eden .wpdm-logged-in-avatar {
        position: relative;
        display: inline-block;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .w3eden .wpdm-logged-in-avatar img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid #e2e8f0;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    }

    .w3eden .wpdm-online-dot {
        position: absolute;
        bottom: 6px;
        right: 6px;
        width: 16px;
        height: 16px;
        background: var(--color-success);
        border: 3px solid #fff;
        border-radius: 50%;
        box-shadow: 0 2px 4px rgba(var(--color-success-rgb), 0.4);
    }

    /* User info */
    .w3eden .wpdm-logged-in-info {
        margin-bottom: 20px;
    }

    .w3eden .wpdm-logged-in-greeting {
        display: block;
        font-size: 13px;
        font-weight: 500;
        color: var(--color-success);
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 6px;
    }

    .w3eden .wpdm-logged-in-name {
        margin: 0 0 4px 0;
        font-size: 22px;
        font-weight: 700;
        line-height: 1.3;
    }

    .w3eden .wpdm-logged-in-email {
        margin: 0;
        font-size: 14px;
        color: var(--color-muted);
    }

    /* Action buttons layout */
    .w3eden .wpdm-logged-in-actions {
        display: flex;
        gap: 12px;
    }

    .w3eden .wpdm-logged-in-actions .btn {
        flex: 1;
        letter-spacing: 0px;
    }

    /* Logout button - outline style */
    .w3eden .wpdm-btn-logout {
        background: transparent;
        color: var(--color-secondary);
        border: 1px solid #dadee3;
    }

    .w3eden .wpdm-btn-logout:hover {
        background: rgba(var(--color-danger-rgb), 0.1);
        color: var(--color-danger);
        border-color: var(--color-danger);
    }

    /* Dark mode support */
    @media (prefers-color-scheme: dark) {
        .w3eden:not(.light-mode) .wpdm-logged-in-card {
            background: var(--dm-bg-secondary);
        }

        .w3eden:not(.light-mode) .wpdm-logged-in-avatar img {
            border-color: var(--dm-bg-tertiary);
        }

        .w3eden:not(.light-mode) .wpdm-online-dot {
            border-color: var(--dm-bg-secondary);
        }

        .w3eden:not(.light-mode) .wpdm-logged-in-email {
            color: var(--dm-text-muted);
        }
    }

    /* Manual dark mode class */
    .w3eden.dark-mode .wpdm-logged-in-card {
        background: var(--dm-bg-secondary);
    }

    .w3eden.dark-mode .wpdm-logged-in-avatar img {
        border-color: var(--dm-bg-tertiary);
    }

    .w3eden.dark-mode .wpdm-online-dot {
        border-color: var(--dm-bg-secondary);
    }

    .w3eden.dark-mode .wpdm-logged-in-email {
        color: var(--dm-text-muted);
    }

    /* Responsive */
    @media (max-width: 480px) {
        .w3eden .wpdm-logged-in-card {
            padding: 36px 24px;
            margin: 0 16px;
        }

        .w3eden .wpdm-logged-in-actions {
            flex-direction: column;
        }
    }
</style>
